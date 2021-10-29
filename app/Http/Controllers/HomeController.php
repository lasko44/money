<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $blogCategories = BlogCategory::where('featured',true)->get(['id','name']);
        $latestNews = Post::where('latest_news', true)->take(5);
        $trending = Post::where('trending', true)->take(5);

        return view('home.home',[
            'blogCategories'=>$blogCategories,
        ]);
    }
}
