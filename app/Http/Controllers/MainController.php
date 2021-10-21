<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function main1(){
        $posts = Post::where("category", 1)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main1", ["posts" => $posts]);
    }
    public function main2(){
        $posts = Post::where("category", 2)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main2", ["posts" => $posts]);
    }
    public function main3(){
        $posts = Post::where("category", 3)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main3", ["posts" => $posts]);
    }
    public function main4(){
        $posts = Post::where("category", 4)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main4", ["posts" => $posts]);
    }
}
