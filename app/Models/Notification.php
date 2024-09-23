<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'entity_id', 'is_read'];

    // User ilişkisi
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Notifiable ilişkisi
    public function notifiable()
    {
        return $this->morphTo();
    }
}
