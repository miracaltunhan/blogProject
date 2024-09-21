<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::where('role', 3)->get(); // ID'si 3 olan kullanıcıyı al
        return view('dashboard.users', compact('users'));
    }

    public function promoteToWriter(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->role = 2; // Kullanıcının rolünü 2 yap
        $user->title = $request->input('title'); // Title'ı güncelle
        $user->save();

        return redirect()->back()->with('success', 'Kullanıcı terfi edildi.');
    }


}
