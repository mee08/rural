<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function post(){
        return view("post");
    }

    public function store(Request $request)
    {
        // 新規postを作成
        $post=new Post();

        // バリデーションルール
        $inputs=request()->validate([
            'title'=>'required|max:255',
            'body'=>'required|max:255',
            'image'=>'image'
        ]);

        // 画像ファイルの保存場所指定
        if(request('image')){
            $filename=request()->file('image')->getClientOriginalName();
            $inputs['image']=request('image')->storeAs('public/img', $filename);
        }

        // postを保存
        $post->create($inputs);
    }
}
