<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function single(Post $post)
    {
        return view('single-post',['post' => $post]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('create.post',[
            'categories' => $categories
        ]);
    }
}
