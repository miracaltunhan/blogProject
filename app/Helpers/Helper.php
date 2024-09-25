<?php

namespace App\Helpers;

use App\Models\EmailVerification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Helper
{
    public static function sendVerificationEmail($user)
    {


        $token = Str::random(60);
        $expiration_date = now()->addHours(48);

        $data = [
            'user' => $user,
            'token' => $token,
            'email' => $user->email,
            'expiration_date' => $expiration_date->format('H:i'),
        ];

            Mail::send('auth.verify-email', $data, function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Yeni Kullanıcı Kayıt Bildirimi');
            });


        EmailVerification::updateOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'token' => $token,
                'updated_at' => now(),
                'expiration_date' => $expiration_date,
            ]
        );
    }

}
