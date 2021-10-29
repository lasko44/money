<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index(){

    }

    public function show($blogCategory){
        $blogCategory = BlogCategory::with(['Post'=>function ($query) {
            $query->take(10);
        }])->find($blogCategory);
        $categories = BlogCategory::get(['id','name'])->all();

        return view('blog-category.show',[
            'blogCategory'=>$blogCategory,
            'categories'=>$categories
        ]);
    }
}
