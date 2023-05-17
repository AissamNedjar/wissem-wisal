<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'role',
        'email',
        'password'
    ];

    public function hospital()
    {
        return $this->hasOne(Hospital::class);
    }
}
