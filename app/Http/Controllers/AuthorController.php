<?php

namespace App\Http\Controllers;

use App\Models\User; // User modelini ekleyin
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($id) {
        $author = User::findOrFail($id); // Author yerine User kullanın
        return view('adminPanel.layout.writers', compact('author'));
    }

    public function writers() {
        // role alanı 2 olan kullanıcıları al
        $authors = User::where('role', 2)->get();
        return view('adminPanel.layout.writers', compact('authors'));
    }
}
