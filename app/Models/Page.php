<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'excerpt', 'body', 'image', 'meta', 'published_at'
    ];

    protected $casts = [
        'meta' => 'array',
        'published_at' => 'datetime',
    ];
}
