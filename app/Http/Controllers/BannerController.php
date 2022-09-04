<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;
use DB;
use response;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'DESC')->get();
        return view('backend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'       => 'string|required',
            'description' => 'string|nullable',
            'photo'       =>'required',
            'status'      => 'required',
            'condition'   => 'required',
        ]);
        $data       = $request->all();
        $slug       = Str::slug($request->input('title'));
        $slug_count = Banner::where('slug' , $slug)->count();
        if($slug_count>0){
            $slug = time(). '-'. $slug;
        }
        $data['slug'] =$slug;
        $status       = Banner::create($data);
        if($status){
            return redirect()->route('banner.index')->with('success', 'Banner create successfully');
        }
        else{
            return back()->with('error', 'Something went wrong');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        if($banner){
           return view('backend.banner.edit', compact('banner'));
        }
        else{
            return back()->with('error', 'Data not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        if($banner){
            $this->validate($request,[
                'title'       => 'string|required',
                'description' => 'string|nullable',
                'photo'       =>'required',
            ]);
            $data       = $request->all();
            $status       = $banner->fill($data)->save();
            if($status){
                return redirect()->route('banner.index')->with('success', 'Banner update successfully');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        }
        else{
            return back()->with('error', 'Data not found!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if($banner){
            $status = $banner->delete($id);
            if($status){
                return redirect()->route('banner.index')->with('success', 'Banner delete successfully');
            }
            else {
                return back()->with('error', 'Something went wrong!');
            }
        }
        else{
            return back()->with('error', 'Data not found!');
        }
    }

    public function bannerStatus(Request $request){
        if($request->mode == 'true'){
            DB::table('banners')->where('id', $request->id)->update(['status' => 'active']);
        } else{
            DB::table('banners')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }
}
