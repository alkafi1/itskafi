<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Banner_image;

class FrontController extends Controller
{
    function index(){
        $banner = Banner::where('status','1')->first();
        $banner_image = Banner_image::where('status','1')->first();
        return view('frontend.index',[
            'banner' => $banner,
            'banner_image' => $banner_image,
        ]);
    }
}
