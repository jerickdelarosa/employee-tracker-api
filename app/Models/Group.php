<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'group_code',
        'name'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->whereActive(true);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'group_id', 'id');
    }
}
