<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogCategories = BlogCategory::where('featured',true)->get(['id','name']);
        return view('home.home',[
                'blogCategories'=>$blogCategories
            ]);
    }
}
