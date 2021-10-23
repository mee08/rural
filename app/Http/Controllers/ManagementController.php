<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    public function management(){
        $user_id = Auth::id();
        $posts = Post::where("user_id", $user_id)->orderBy('created_at', 'desc')->paginate(3);
        return view("management", ["posts" => $posts]);
    }

    public function edit($id){
        $post = Post::find($id);
        return view("edit", ["post" => $post]);
    }

    public function update(Request $request){
        // dd($request);
        $id = $request->post_id;
        $title = $request->title;
        $body = $request->body;
        $category = $request->category;

        $post = Post::find($id);
        $post->title = $title;
        $post->body = $body;
        if($request->has("imgpath")){
            $filename=$request->imgpath->getClientOriginalName();
            $img=$request->imgpath->storeAs('',$filename,'public');
            $post->img = $img;
        }
        $post->category = $category;
        $post->save();

        return view("redirect.thankyou");
    }

    public function delete($id){
        Post::where("id", $id)->delete();
        return view("redirect.deleted");
    }

    public function news(){
        return view("news");
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $category = $request->category;

        News::create([
            "title" => $title,
            "body" => $body,
            "category" => $category
        ]);

        return view("redirect.posted");
    }

    public function article($id)
    {
        $article = News::find($id);
        return view("article", ["article" => $article]);
    }
}
