<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'image' => 'array',
    ];
}
