<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index(){

    }

    public function show(BlogCategory $blogCategory = null){
        return view('blog-category.show');
    }
}
