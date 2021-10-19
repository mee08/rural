<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TopController extends Controller
{
    public function top(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view("top", ["posts" => $posts]);
    }
}
