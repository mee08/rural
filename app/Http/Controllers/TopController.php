<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TopController extends Controller
{
    public function top(Request $request){
        // dd($request);
        $flg = false;
        $posts = Post::with([
            "user",
        ]);
        if($request->has("keyword")){
            $flg = true;
            $keyword = $request->get("keyword");
            $posts = $posts->where("title", "LIKE", "%". $keyword . "%");
        }
        $posts = $posts->orderBy('created_at', 'desc')->paginate(3);
        return view("top", ["posts" => $posts,"flg" => $flg]);
    }
}
