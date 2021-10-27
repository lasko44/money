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
        $title = $blogCategory->name;

        return view('blog-category.show',[
            'title'=>$title
        ]);
    }
}
