<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::where('id', 3)->get(); // ID'si 3 olan kullanıcıyı al
        return view('dashboard.users', compact('users'));
    }

    public function promoteToWriter($id) {
        $user = User::findOrFail($id);
        $user->role = 2; // 'writer' rolü için 2 değeri
        $user->save();

        return redirect()->route('dashboard.users')->with('success', 'Kullanıcı yazara terfi edildi!');
    }


}
