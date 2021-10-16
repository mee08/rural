<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TopController extends Controller
{
    public function top(){
        $posts = Post::all();
        return view("top", ["posts" => $posts]);
    }
}
