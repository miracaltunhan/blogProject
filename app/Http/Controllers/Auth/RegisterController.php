<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    // Validator ile formdan gelen verileri doğrulama
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Resim için validasyon
        ]);
    }

    // Kullanıcı kaydı oluşturma
    protected function create(array $data)
    {
        // Profil resmi yüklendiyse, dosyayı kaydet ve dosya yolunu al
        if (isset($data['profile_image'])) {
            $profileImagePath = $data['profile_image']->store('profile_images', 'public');
        } else {
            $profileImagePath = null; // Resim yüklenmediyse null bırak
        }

        // Kullanıcıyı veritabanına kaydet
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile_image' => $profileImagePath, // Profil resmini kaydet
        ]);
    }

    // Register formundan gelen isteği işle
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        // Profil resmini işlem için request'e ekle
        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image');
        }

        $user = $this->create($data);

        // Kullanıcıyı giriş yapmış gibi oturum başlat
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }
    public function showRegistrationForm()
    {
        return view('adminPanel.layout.register'); // Doğru yolu burada belirtiyoruz
    }

    protected function guard()
    {
        return Auth::guard(); // Laravel'ın varsayılan auth guard'ını döndür
    }

}
