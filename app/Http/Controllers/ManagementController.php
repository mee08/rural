<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    public function management(){
        $user_id = Auth::id();
        $posts = Post::where("user_id", $user_id)->orderBy('updated_at', 'desc')->paginate(3);
        return view("management", ["posts" => $posts]);
    }

    public function edit($id){
        $post = Post::find($id);
        return view("edit", ["post" => $post]);
    }

    public function update(Request $request){
        $id = $request->post_id;
        $title = $request->title;
        $body = $request->body;
        $category = $request->category;

        Post::where("id",$id)->update([
            "title" => $title,
            "body" => $body,
            "img" => null,
            "category" => $category
        ]);

        return view("redirect.thankyou");
    }

    public function delete($id){
        Post::where("id", $id)->delete();
        return view("redirect.thankyou");
    }
}
