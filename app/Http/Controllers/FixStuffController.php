<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FixStuffController extends Controller
{
    public function replace(){
        $posts = Post::all();
        foreach($posts as $post){
            $post->update([
                'url' => 'https://www.hfslondon.com/wp-content/uploads/2018/03/london-by-night.jpg',
            ]);
        }
        return response('Done');
    }
}
