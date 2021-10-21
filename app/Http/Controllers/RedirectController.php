<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function thankyou(){
        return view("redirect.thankyou");
    }
    public function posted(){
        return view("redirect.posted");
    }
    public function deleted(){
        return view("redirect.deleted");
    }
}
