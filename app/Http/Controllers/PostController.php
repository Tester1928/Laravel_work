<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::query()->orderBy("created_at", "DESC")->paginate(5);

        return view('posts.index',[
            "posts"=>$post
        ]);
    }

    public function show($id){
        $post = Post::where(["id"=>$id])->first();
        if(!$post){
            abort(404);
        }
        return view('posts.show',[
            "post"=>$post
        ]);
    }
}
