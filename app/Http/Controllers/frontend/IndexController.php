<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class IndexController extends Controller
{
    public function home(){
        $banners = Banner::where(['status' => 'active', 'condition' => 'banner'])->limit(3)->orderby('id', 'DESC')->get();
        return view('frontend.dashboard',compact('banners'));
    }
}
