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

        $filename=$request->imgpath->getClientOriginalName();
        $img=$request->imgpath->storeAs('',$filename,'public');  //storeメソッドを追加

        $user_id = Auth::id();

        Post::create([
            "title" => $title,
            "body" => $body,
            "user_id" => $user_id,
            "img" => $img,
            "category" => $category
        ]);

        return view("redirect.thankyou");
    }
}
