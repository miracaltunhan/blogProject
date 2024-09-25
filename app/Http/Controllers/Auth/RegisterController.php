<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Testing\Fluent\Concerns\Has;

class RegisterController extends Controller
{
    // Validator ile formdan gelen verileri doğrulama
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);
    }

    // Kullanıcı kaydı oluşturma
    public function create(Request $request)
    {
        // Profil resmi yüklendiyse, dosyayı kaydet

        //$profileImagePath = $data['profile_image'] ? $data['profile_image']->store('profile_images', 'public') : null;

        // Kullanıcıyı veritabanına kaydet
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->profile_image=$request->profile_image;
        $user->save();

        Helper::sendVerificationEmail($user);
        return response()->json('Success');
    }

    // Register formundan gelen isteği işle
    public function register(Request $request)
    {
        // Gelen verileri doğrulama
        $this->validator($request->all())->validate();

        // Kullanıcıyı oluştur
        return redirect('/email/verify')->with('status', 'E-posta adresinize bir doğrulama linki gönderildi. Lütfen gelen kutunuzu kontrol edin.');
    }

    // Kayıt formunu göster
    public function showRegistrationForm()
    {
        return view('adminPanel.layout.register');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}

