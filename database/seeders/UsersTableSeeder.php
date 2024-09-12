<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

        $user1 = User::where('email', 'aaa@gmail.com')->first();
        if (!$user1) {
            $user1 = User::create([
                'name' => 'Test User 1',
                'email' => 'aaa@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }

        $user2 = User::where('email', 'bbb@gmail.com')->first();
        if (!$user2) {
            $user2 = User::create([
                'name' => 'Test User 2',
                'email' => 'bbb@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }

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
