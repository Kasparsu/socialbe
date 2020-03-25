<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggleLike(Post $post){
        $post->like();
        return $post;
    }
}
