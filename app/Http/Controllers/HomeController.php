<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\About;
use App\Models\Testimonial;
use App\Models\banner;
use App\Models\Service;
use App\Models\blog;
Use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

  public function index()
{
    $banners = Banner::where('status', 1)
                     ->orderBy('id', 'desc')
                     ->limit(2)  // 🔥 यहां limit लगा दी
                     ->get();

    $categories = category::where('status',1)->get();
    $abouts  = about::where('status',1)->orderBy('id','desc')->limit(1)->get();
    $services = service::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
    $testimon = testimonial::where('status',1)->orderBy('id','desc')->limit(2)->get();
    $blogs = blog::where('status',1)->get();

    return view('frontend.home', compact('banners','categories','abouts', 'services','testimon','blogs'));
}



    
}
