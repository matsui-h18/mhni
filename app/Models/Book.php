<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Book extends Model
{
    protected $fillable = [
        'isbn',
        'book_name',
        'author',
        'pub_date',
        'content',
        'image',
    ];
    //
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
