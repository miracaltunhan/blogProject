<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\NotificationController;

// Auth Middleware ile sadece giriş yapmış kullanıcılar erişebilir
Route::middleware(['auth'])->group(function () {
    // Admin için dashboard yönlendirmesi
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return view('adminPanel.dashboard'); // Admin paneli
        }
        return redirect('/home'); // Diğer kullanıcılar home sayfasına yönlendirilir
    })->name('dashboard');

    // Kullanıcı profil sayfası
    Route::view('profile', 'profile')->name('profile');

    // Mesajlaşma rotaları
    Route::middleware(['auth'])->group(function () {
        Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
        Route::post('/messages/send', [MessagesController::class, 'send'])->name('messages.send');
    });


    // Bildirim rotaları
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::get('/notifications/{id}/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');
});

// Admin rolüne sahip kullanıcılar için blog rotaları
Route::middleware(['auth', 'role_check:1'])->group(function () {
    Route::resource('blogs', BlogController::class);
});

// Diğer sayfalar için rotalar
Route::get('/home', function () {
    return view('adminPanel.layout.app'); // Ana sayfa
})->name('home');

Route::get('/news', function () {
    return view('adminPanel.layout.news'); // Haberler sayfası
})->name('news');

Route::get('/anno', function () {
    return view('adminPanel.layout.announcement'); // Duyurular sayfası
})->name('announcement');

Route::get('/writers', function () {
    return view('adminPanel.layout.writers'); // Yazarlar sayfası
})->name('writers');

Route::get('/contact', function () {
    return view('adminPanel.layout.contact'); // İletişim sayfası
})->name('contact');

// Kayıt ve giriş işlemleri
require __DIR__.'/auth.php';

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
