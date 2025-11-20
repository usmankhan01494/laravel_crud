<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Testimonial;

class aboutController extends Controller
{
    //
    public function index(){
        $abouts  = about::where('status',1)->orderBy('id','desc')->limit(1)->get();
        $testimon = testimonial::where('status',1)->get();

        return view('frontend.about', compact('abouts','testimon'));
    }

}
