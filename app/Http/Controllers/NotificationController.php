<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function getNotifications()
    {
        // Giriş yapan kullanıcının okundu olarak işaretlenmemiş mesajlarını getir
        $notifications = Notification::where('user_id', Auth::id())
            ->where('is_read', 1)
            ->get();

        return view('your_view_name', compact('notifications'));
    }

    public function markAsRead($id)
    {
        $notification = Notification::find($id);
        if ($notification) {
            $notification->is_read = 0; // 1'den 0'a değiştir
            $notification->save();
        }

        return redirect()->route('blog.single', ['id' => $notification->entity_id]); // Blog sayfasına yönlendir
    }

}
