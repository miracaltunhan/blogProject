<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Eğer aaa@gmail.com e-mail adresiyle bir kullanıcı yoksa, yeni bir kullanıcı oluştur.
        $user = User::where('email', 'aaa@gmail.com')->first();
        if (!$user) {
            $user = User::create([
                'name' => 'Test User',
                'email' => 'aaa@gmail.com',
                'password' => Hash::make('12345678'), // Şifreyi buradan belirleyin
            ]);
        }

        // Rolleri belirlenen kullanıcılara atama işlemleri
        $user1 = User::find(1);
        if ($user1) {
            $user1->assignRole('admin');
        }

        $user2 = User::find(2);
        if ($user2) {
            $user2->assignRole('writer');
        }

        $user3 = User::find(3);
        if ($user3) {
            $user3->assignRole('user');
        }
    }
}
