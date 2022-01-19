<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
