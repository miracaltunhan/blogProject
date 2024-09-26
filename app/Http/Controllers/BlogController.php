<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Notification;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category', 'author')->get();

        return view('adminPanel.layout.blog', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('dashboard.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Görsel validasyonu
        ]);

        // Görsel yükleme işlemi
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // 'public' diskine kaydet
        }

        Blog::create([
            'title' => $request->title,
            'content' => request('content'),
            'image' => $imagePath, // Görsel yolu
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog başarıyla eklendi.');
    }


    public function show($id)
    {
        $blog = Blog::with('category', 'author')->findOrFail($id);
        return view('adminPanel.layout.show', compact('blog'));

    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('dashboard.blogs.edit', compact('blog', 'categories', 'authors'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'author_id' => 'nullable|exists:authors,id',
            'image' => 'nullable|image',
        ]);

        $blog->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $blog->image = $path;
        }

        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');

    }

    public function showBlogs()
    {
        $blogs = Blog::with('category', 'author')->get();
        return view('adminPanel.layout.blog', compact('blogs'));
    }


    public function likeBlog($id)
    {
        $userId = auth()->id();
        $blog = Blog::find($id);
        $blogOwnerId = $blog->author_id;

        // Kullanıcı bu blogu daha önce beğenmiş mi kontrol edin
        $existingLike = Like::where('blog_id', $id)
            ->where('user_id', $userId)
            ->first();

        if ($existingLike) {
            $likers = Like::where('blog_id', $id)
                ->with('user') // User ilişkisini getir
                ->get()
                ->pluck('user.name') // User isimlerini al
                ->toArray();

            return back()->with('error', 'You have already liked this blog. People who liked this blog: ' . implode(', ', $likers));
        }

        Like::create([
            'blog_id' => $id,
            'user_id' => $userId,
        ]);

        // Bildirim oluştur
        Notification::create([
            'user_id' => $blogOwnerId, // Blogun sahibinin ID'si
            'like_id' => \auth()->id(),
            'type' => 'blog',
            'entity_id' => $id,
        ]);


        return back()->with('success', 'Blog liked successfully!');
    }

    public function storeComment(Request $request, $id)
    {
        if (!auth()->check()) {
            return back()->with('error', 'You must be logged in to comment.');
        }

        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $userId = auth()->id();

        $comment = Comment::create([
            'blog_id' => $id,
            'user_id' => $userId,
            'content' => $request->input('content'),
        ]);

        $blogOwnerId = Blog::find($id)->user_id;
        if ($blogOwnerId) {
            Notification::create([
                'user_id' => $blogOwnerId,
                'type' => 'comment',
                'entity_id' => $comment->id,
            ]);
        }

        return back()->with('success', 'Comment added successfully!');
    }
    public function sortByLikes()
    {
        $blogs = Blog::withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->get();

        return view('adminPanel.layout.blog', compact('blogs'));
    }


}
