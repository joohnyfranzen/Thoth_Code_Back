<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'post_id',
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function userComment()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
