<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function homePageBanner(Request $request)
    {
        $request->validate([
            'mobile_image' => 'required|mimes:jpg,jpeg,png',
            'banner_image' => 'required|mimes:jpg,jpeg,png',
            'bannertitle' => 'required'
        ]);

        $banner = new Banner;
        $banner->title = $request->bannertitle;


        if($request->hasFile('banner_image','mobile_image'))
        {
            $file = $request->file('banner_image','mobile_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->move(public_path("/admin/images/product"),$fileNameToStore);
            $banner->banner_img = $fileNameToStore;
        }
        // if($request->hasFile('mobile_image'))
        // {
        //     $file = $request->file('mobile_image');
        //     $filenameWithExt = $file->getClientOriginalName();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $file->getClientOriginalExtension();
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     $path = $file->move(public_path("/admin/images/product"),$fileNameToStore);
        //     $banner->banner_img = $fileNameToStore;
        // }

        $banner->save();

        return back();
    }
    public function fetchBanner()
    {
        $banners  = Banner::where('status','Active')->get();
        return view("admin.banners.index", compact('banners'));
    }

    public function updateBanner(Request $request)
    {

        $banner = Banner::find($request->id);
        $banner->title = $request->bannertitle;

        if($request->hasFile('banner_image'))
        {
            $file = $request->file('banner_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->move(public_path("/admin/images/product"),$fileNameToStore);
            $banner->banner_img = $fileNameToStore;
        }
        $banner->save();
        return redirect()->route("banners.index")->with('success', 'Banner Updated Successfuly');
    }
    public function dlteBanner($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route("banners.index")->with('success', 'Banner Delete Successfuly');
    }
}
