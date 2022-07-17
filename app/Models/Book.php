<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'image_path', 'publish_date', 'synopsis', 'amazon_link', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}