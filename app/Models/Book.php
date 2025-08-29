<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Book extends Model
{
    //
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
