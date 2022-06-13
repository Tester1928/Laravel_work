<?php

namespace App\Http\Controllers;

use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $post = Post::query()->orderBy("created_at", "DESC")->limit(3)->get();

        return view('welcome',["posts"=>$post]);
    }
}
