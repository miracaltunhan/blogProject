<?php

namespace App\Http\Controllers;

use App\Models\User; // User modelini kullanıyoruz
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($id) {
        $author = User::findOrFail($id); // User modeli kullanılıyor
        return view('adminPanel.layout.writers', compact('author'));
    }

    public function writers() {
        // role alanı 2 olan kullanıcıları al
        $authors = User::where('role', 2)->get();
        return view('adminPanel.layout.writers', compact('authors'));
    }

    public function showBlogs($id)
    {
        $author = User::find($id); // Yazarın ID'sini bul
        if (!$author) {
            return redirect()->back()->with('error', 'Yazar bulunamadı.');
        }



        $blogs = $author->blogs; // Yazarın tüm bloglarını al

        return view('author.blogs', compact('author', 'blogs'));
    }

}
