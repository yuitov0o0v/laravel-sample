<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'content',
        'post_id',
    ];

    public function post()
    {
        return $this->belongsTo(related: Post::class);
    }
}
