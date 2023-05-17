<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
