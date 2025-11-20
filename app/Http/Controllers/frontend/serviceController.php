<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class serviceController extends Controller
{
    //

    public function index(){
        $services = service::where('status', 1)->get();


        return view('frontend.service', compact('services'));

    }
}
