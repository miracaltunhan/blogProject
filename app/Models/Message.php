<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'receiver_id', 'content', 'is_read'];

    // Sender ilişkisi
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Receiver ilişkisi
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
