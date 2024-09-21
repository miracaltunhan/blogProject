<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($id) {
        $author = Author::findOrFail($id);
        return view('adminPanel.layout.writers', compact('author')); // Burayı güncelle
    }
    public function writers() {
        $authors = Author::all(); // Tüm yazarları al
        return view('adminPanel.layout.writers', compact('authors')); // Yazarları view'a gönder
    }

}
