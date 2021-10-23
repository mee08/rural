<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\News;

class MainController extends Controller
{
    public function main1(){
        $news = News::orderBy('updated_at','desc')->get();
        $posts = Post::where("category", 1)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main1", ["posts" => $posts,"news"=>$news]);
    }
    public function main2(){
        $news = News::orderBy('updated_at','desc')->get();
        $posts = Post::where("category", 2)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main2", ["posts" => $posts,"news"=>$news]);
    }
    public function main3(){
        $news = News::orderBy('updated_at','desc')->get();
        $posts = Post::where("category", 3)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main3", ["posts" => $posts,"news"=>$news]);
    }
    public function main4(){
        $news = News::orderBy('updated_at','desc')->get();
        $posts = Post::where("category", 4)->orderBy('updated_at', 'desc')->paginate(3);
        return view("main/main4", ["posts" => $posts,"news"=>$news]);
    }
}
