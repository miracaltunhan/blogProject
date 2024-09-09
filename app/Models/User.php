<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Role alanını burada belirtin
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the role of the user.
     *
     * @return string
     */
    public function getRoleAttribute()
    {
        $roles = [
            1 => 'admin',
            2 => 'editor',
            3 => 'user',
        ];

        return $roles[$this->attributes['role']] ?? 'guest';
    }

    /**
     * Set the role of the user.
     *
     * @param string $value
     * @return void
     */
    public function setRoleAttribute($value)
    {
        $roles = [
            'admin' => 1,
            'editor' => 2,
            'user' => 3,
        ];

        $this->attributes['role'] = $roles[$value] ?? 0;
    }
}
