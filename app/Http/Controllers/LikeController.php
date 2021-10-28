<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function add(){
        $postId = (request('postId'));
        $post = Post::find($postId)->get(['id','likes']);
        $likes = $post->likes++;
        $post::update([
            'likes'=>$likes
        ]);
        return response(200);
    }

    public function remove(){
        $postId = (request('postId'));
        $post = Post::find($postId)->get(['id','likes']);
        $likes = $post->likes--;
        $post::update([
            'likes'=>$likes
        ]);
        return response(200);
    }
}
