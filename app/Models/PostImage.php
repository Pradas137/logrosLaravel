<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;
use App\Models\Comment;

class PostImage extends Model
{
    use HasFactory;

    public function users(){

    	return $this-> belongsTo(User::class);
    }

    public function comments(){

    	return $this-> hasMany(Comment::class);
    }

    public function likes(){

    	return $this-> belongsTo(User::class);
    }
}