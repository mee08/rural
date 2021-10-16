<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post(){
        return view("post");
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $category = $request->category;
        $user_id = Auth::id();

        Post::create([
            "title" => $title,
            "body" => $body,
            "user_id" => $user_id,
            "img" => null,
            "category" => $category
        ]);

        return view("redirect.thankyou");
    }
}
