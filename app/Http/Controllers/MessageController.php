<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request; // Doğru içe aktarma
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Kullanıcının mesajlarını listeleme.
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
        // Form verilerini logla
        \Log::info('Form Data:', $request->all());

        $request->validate([
            'receiver_name' => 'required|exists:users,name',
            'content' => 'required|string',
        ]);

        $receiver = User::where('name', $request->receiver_name)->first();

            Message::create([
                'sender_id' => Auth::id(),
                'receiver_id' => $receiver->id,
                'content' => $request->input('content'),
                'is_read' => false,
            ]);

        Notification::create([
            'user_id' => $receiver->id,
            'message' => 'Yeni bir mesajınız var!',
            'is_read' => false,
        ]);

        return response()->json(['status' => 'Message sent']);
    }
}
