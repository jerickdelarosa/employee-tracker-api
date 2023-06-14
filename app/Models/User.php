<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'last_name',
        'first_name',
        'middle_name',
        'username',
        'email',
        'password',
        'user_type_id',
        'group_id',
        'role_id',
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


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_type()
    {
        return $this->hasOne(UserType::class, 'id', 'user_type_id');
    }

    public function office()
    {
    }

    public function getIsAdminAttribute()
    {
        return $this->user_type_id === 1;
    }

    public function getIsUserAttribute()
    {
        return $this->user_type_id === 2;
    }
}
