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

        return view('dashboard.index', compact('blogs'));
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
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'author_id' => 'nullable|exists:authors,id',
            'image' => 'nullable|image',
        ]);

        // Blog verilerini oluşturuyoruz
        $blog = new Blog($request->except('image'));


        $blog->author_id=\auth()->id();

        // Eğer bir görsel yüklendiyse, dosyayı kaydet
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $blog->image = $path;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog başarıyla oluşturuldu.');
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
        return view('adminPanel.layout.blog', compact('blogs')); // 'blogs.index' adında bir view oluşturmalısınız
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
            // Bu blogu beğenen kişilerin isimlerini al
            $likers = Like::where('blog_id', $id)
                ->with('user') // User ilişkisini getir
                ->get()
                ->pluck('user.name') // User isimlerini al
                ->toArray();

            // Kullanıcıya beğenenlerin isimlerini göster
            return back()->with('error', 'You have already liked this blog. People who liked this blog: ' . implode(', ', $likers));
        }

        // Eğer beğenmemişse beğeni oluştur
        Like::create([
            'blog_id' => $id,
            'user_id' => $userId,
        ]);

        // Bildirim oluştur
        Notification::create([
            'user_id' => $blogOwnerId, // Blogun sahibinin ID'si
            'like_id'=>\auth()->id(),
            'type' => 'blog',
            'entity_id' => $id,
        ]);
        dd("dsf");

        return back()->with('success', 'Blog liked successfully!');
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'blog_id' => 'required|exists:blogs,id',
            'user_id' => 'required|exists:users,id',
        ]);

        Comment::create([
            'blog_id' => $request->blog_id,
            'user_id' => $request->user_id,
            'content' => $request->content,
        ]);

        // Bildirim oluştur
        $blogOwnerId = Blog::find($id)->user_id; // Yorum yapılan blogun sahibinin ID'si
        Notification::create([
            'user_id' => $blogOwnerId,
            'type' => 'comment',
            'entity_id' => $comment->id, // Yorumun ID'si
        ]);

        return back()->with('success', 'Comment added successfully!');
    }
}
