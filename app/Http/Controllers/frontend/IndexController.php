<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Banner;

class IndexController extends Controller
{
    public function home(){
        $banners = Banner::where(['status' => 'active', 'condition' => 'banner'])->limit(3)->orderby('id', 'DESC')->get();
        $categories = Category::where(['status' => 'active', 'is_parent' => 1])->limit(3)->orderby('id', 'DESC')->get();
        return view('frontend.dashboard',compact('banners','categories'));
    }

    public function ProductCategory($slug){
        $categories = Category::with('products')->where('slug', $slug)->first();
        return view('frontend.pages.product_category', compact('categories'));
    }
}
