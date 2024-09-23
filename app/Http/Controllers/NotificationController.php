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
        // Mesajı okundu olarak işaretle
        $message = Message::find($id);
        if ($message && $message->receiver_id == Auth::id()) {
            $message->is_read = 0;
            $message->save();
        }

        return redirect()->route('messages.index');
    }
}
