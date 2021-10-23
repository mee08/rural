<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\News;

class DetailController extends Controller
{
    public function detail($id){
        $news = News::orderBy('updated_at','desc')->get();
        $post = Post::find($id);
        return view("detail", ["post" => $post,"news" => $news]);
    }
}
