<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::where('role', '!=', 1)->get();
        return view('dashboard.users', compact('users'));
    }

    public function promoteToWriter(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->role = 2;
        $user->title = $request->input('title'); // Title'ı güncelle
        $user->save();

        return redirect()->back()->with('success', 'Kullanıcı terfi edildi.');
    }

    public function demoteToUser($id)
    {
        // Kullanıcıyı id ile buluyoruz.
        $user = User::findOrFail($id);

        // Kullanıcının rolünü writer (role = 3) yapıyoruz.
        $user->role = 3;

        // Kullanıcıyı kaydediyoruz.
        $user->save();

        // Başarılı mesajı ile geri dönüyoruz.
        return redirect()->route('dashboard.users')->with('success', 'Kullanıcı başarıyla writer rolüne terfi edildi.');
    }


}
