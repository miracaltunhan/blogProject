<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'category_id', 'author_id'];

    /**
     * Blog'un ait olduğu kategori.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Blog'un ait olduğu yazar.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Blog'un aldığı beğeniler.
     * 'likes' tablosu, 'blog_id' ve 'user_id' sütunlarını içeren bir pivot tablosudur.
     */
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'blog_id', 'user_id');
    }

    /**
     * Blog'un aldığı yorumlar.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
