<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id']; // parent_id'yi ekleyin

    // Alt kategorileri ilişkilendirin
    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Kategorinin bloglarını ilişkilendirin
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    // Kategorinin üst kategorisini ilişkilendirin
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
