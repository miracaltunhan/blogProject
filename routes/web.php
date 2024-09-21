<?php

use App\Http\Middleware\RoleCheck;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;


Route::middleware(['auth'])->group(function () {
    // Admin için dashboard yönlendirmesi
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return view('adminPanel.dashboard');
        }
        return redirect('/home');
    })->name('dashboard');


    Route::view('profile', 'profile')->name('profile');

    Route::middleware(['auth'])->group(function () {
        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
        Route::post('/messages/send', [MessageController::class, 'send'])->name('messages.send');
    });



    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::get('/notifications/{id}/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');
});

Route::middleware(['auth', RoleCheck::class])->group(function () {
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::get('blogs/{blog}/destroy', [BlogController::class, 'edit'])->name('blogs.destroy');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.single');

});

Route::get('/home', function () {
    return view('adminPanel.layout.app'); // Ana sayfa
})->name('home');

Route::get('/news', function () {
    return view('adminPanel.layout.news'); // Haberler sayfası
})->name('news');

Route::get('/anno', function () {
    return view('adminPanel.layout.announcement'); // Duyurular sayfası
})->name('announcement');

Route::get('/writers', [AuthorController::class, 'writers'])->name('writers');

Route::get('/contact', function () {
    return view('adminPanel.layout.contact'); // İletişim sayfası
})->name('contact');

Route::get('/blog', [BlogController::class, 'showBlogs'])->name('blogs.show');

// Kayıt ve giriş işlemleri
require __DIR__.'/auth.php';

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/author/{id}', [AuthorController::class, 'show']);
Route::get('/dashboard/users', [UserController::class, 'index'])->name('dashboard.users');
Route::post('/dashboard/users/{id}/promote', [UserController::class, 'promoteToWriter'])->name('users.promote');
