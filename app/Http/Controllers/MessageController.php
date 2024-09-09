<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Gönderilmiş mesajları listele.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::where('receiver_id', Auth::id())
            ->orWhere('sender_id', Auth::id())
            ->get();

        return view('messages.index', compact('messages'));
    }

    /**
     * Yeni mesaj gönder.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
            'is_read' => false,
        ]);

        // Bildirim oluştur
        Notification::create([
            'user_id' => $request->receiver_id,
            'message' => 'Yeni bir mesajınız var!',
            'is_read' => false,
        ]);

        return response()->json(['status' => 'Message sent']);
    }
}
