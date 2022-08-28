<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Banner_image;
use Carbon\Carbon;
use Image; 

class BannerController extends Controller
{
    //
    function index()
    {
        $banners = Banner::all();
        $banner_images = Banner_image::all();
        return view('admin.banner.index',[
            'banners' => $banners,
            'banner_images' => $banner_images,
        ]);
    }
    function banner_create()
    {
        return view('admin.banner.banner_create');
    }
    function banner_create_post(Request $request)
    {
        Banner::insert([
            'welcome_note' => $request->welcome_note,
            'title' => $request->title,
            'designation1' => $request->designation1,
            'designation2' => $request->designation2,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('succes','Banner Added.');
    }
    function banner_image_post(Request $request)
    {
       
        $image = $request->image;
        
        $request->validate([
            'image' => ['required','mimes:png,jpg']
        ]);
        $extension = $image->getClientOriginalExtension();
        $banner =  Banner_image::create([
            'image' => $request->image,
            'created_at' => Carbon::now(),
        ]);
        $banner_id = $banner->id;
        $image_name = $banner_id.'.'.$extension;
        Image::make($image)->save(public_path('/uploads/banner_image/').$image_name)->resize(700, 900);
        $banner->update([
            'image' => $image_name
        ]);
        return back()->with('succes','Banner Image Added.');
        

    }
    function status($banner_id)
    {
        
        $banners =Banner::where('status','1')->count();
        $banner = Banner::find($banner_id);
        if($banner->status == 0){
            $banners =Banner::where('status','1')->count();
            if($banners == 1){
                $banners1 =Banner::where('status','1')->update([
                    'status' => 0
                ]);
                $banner->update([
                    'status' => 1,
                ]);
                return back()->with('succes','Banner Active.');
            }
            else{
                $banner->update([
                    'status' => 1,
                ]);
                return back()->with('succes','Banner Active.');
            }
            
        }
        else{
            if($banners == 1){
                return back()->with('succes','Banner Cannot Deactive.');
            }
            else{
                    $banner->update([
                    'status' => 0,
                ]);
                return back()->with('succes','Banner Deactive.');
            }
            
        }
    }
    function image_status($banner_id)
    {
        
        $banner_images =Banner_image::where('status','1')->count();
        $banner_image = Banner_image::find($banner_id);
        if($banner_image->status == 0){
            $banners =Banner_image::where('status','1')->count();
            if($banners == 1){
                $banner_images1 =Banner_image::where('status','1')->update([
                    'status' => 0
                ]);
                $banner_image->update([
                    'status' => 1,
                ]);
                return back()->with('succes','Banner Active.');
            }
            else{
                $banner_image->update([
                    'status' => 1,
                ]);
                return back()->with('succes','Banner Active.');
            }
            
        }
        else{
            if($banner_images == 1){
                return back()->with('succes','Banner Cannot Deactive.');
            }
            else{
                    $banner_image->update([
                    'status' => 0,
                ]);
                return back()->with('succes','Banner Deactive.');
            }
            
        }
    }
    function banner_delete($banner_id)
    {
        
        Banner::find($banner_id)->delete();
        return back()->with('succes','Banner Deleted.');
    }

    function banner_image_delete($banner_id)
    {
        Banner_image::find($banner_id)->delete();
        return back()->with('succes','Banner Image Deleted.');
    }
}
