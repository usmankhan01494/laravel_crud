<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    //

    public function index(){
        $blogs = blog::where('status',1)->get();
        return view('frontend.blog',compact('blogs'));
    }
}
