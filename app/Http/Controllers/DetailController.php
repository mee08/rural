<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DetailController extends Controller
{
    public function detail($id){
        $post = Post::find($id);
        return view("detail", ["post" => $post]);
    }
}
