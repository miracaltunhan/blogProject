<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

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

}
