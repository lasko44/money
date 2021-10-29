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
        $latestNews = Post::where('latest_news', true)->take(4)->get();
        $trending = Post::where('trending', true)->take(8)->get(['title','id']);
        $main = Post::all()->sortByDesc('likes')->take(2);


        return view('home.home',[
            'blogCategories'=>$blogCategories,
            'latestNews'=>$latestNews,
            'trending'=>$trending,
            'main'=>$main
        ]);
    }
}
