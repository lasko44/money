<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\Image;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function store(Request $request)
    {
        $path = $request->file('image')->store('images', 's3');
        Storage::disk('s3')->setVisibility($path, 'public');
        $post = Post::create([
            'title' => 'Test',
            'body' => 'Test',
            'file_name' => basename($path),
            'url' => Storage::disk('s3')->url($path)
        ]);
        return $post;
    }
    public function show($postId){
      $post = Post::find($postId)->first();
        dd($post);
    }
}
