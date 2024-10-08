<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Container\Attributes\Database;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $blogId)
    {
        // Kullanıcının oturum açıp açmadığını kontrol et
        $userId = auth()->id();
        if (!$userId) {
            return redirect()->back()->withErrors(['auth' => 'Kullanıcı oturumu kapalı.']);
        }

        // Validasyon
        $request->validate([
            'content' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        // Yorum oluştur
        try {
            Comment::create([
                'content' => $request->input('content'),
                'user_id' => $userId,
                'blog_id' => $blogId,
                'parent_id' => $request->parent_id, // Yanıt için
            ]);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Yorum kaydedilirken bir hata oluştu: ' . $e->getMessage()]);
        }

        return redirect()->back()->with('success', 'Yorumunuz başarıyla gönderildi.');
    }

    public function like($commentId)
    {
        // Yorumun varlığını kontrol edin
        $comment = Comment::find($commentId);
        if (!$comment) {
            return back()->with('error', 'Comment not found.');
        }

        // Kullanıcının giriş yapıp yapmadığını kontrol edin
        if (!auth()->check()) {
            return back()->with('error', 'You must be logged in to like a comment.');
        }

        // Beğenme işlemi
        $userId = auth()->id();

        // Daha önce bu yorumu beğenip beğenmediğini kontrol edin
        $existingLike = $comment->likes()->where('user_id', $userId)->first();

        // Yorum beğenilmediyse ekle
        if (!$existingLike) {
            $comment->likes()->create(['user_id' => $userId]);
            $comment->increment('likes_count');
            return back()->with('success', 'You have liked the comment.');
        }

        // Yorum zaten beğenildiyse kaldır
        $existingLike->delete();
        $comment->decrement('likes_count');

        return back()->with('success', 'You have unliked the comment.');
    }

}
