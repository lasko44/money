<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index(){

    }

    public function show($blogCategory){
        $blogCategory = BlogCategory::find($blogCategory);
        $categories = BlogCategory::get(['id','name'])->all();
        return view('blog-category.show',[
            'blogCategory'=>$blogCategory,
            'categories'=>$categories
        ]);
    }
}
