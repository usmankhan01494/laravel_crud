<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
class bannerController extends Controller
{
    //
    public function index(){

        $banners = Banner::all();
        return view('admin.banner.index' , compact('banners'));
    }


    public function create(){
        return view('admin.banner.create');
    }   



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $banner = new banner();
        $banner->title = $request->title;
        $banner->short_description = $request->short_description;
        $banner->description = $request->description;

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/banners'), $filename);
            $banner->image = $filename;
        }

        $banner->save();

        return redirect()->route('banners.index')->with('success', 'About added successfully!');
    }


    public function edit($id){
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));    

    }




    public function update(Request $request, $id){
        $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $banner = banner::findOrFail($id);

    $banner->title = $request->title;
    $banner->short_description = $request->short_description;
    $banner->description = $request->description;
    $banner->status = $request->status;

    // ✅ Agar nayi image upload hui ho
    if ($request->hasFile('image')) {

        // Purani image delete kar do (agar exist karti ho)
        if ($banner->image && file_exists(public_path('uploads/banners/' . $banner->image))) {
            unlink(public_path('uploads/banners/' . $banner->image));
        }

        // Nayi image save karo
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/banners'), $filename);
        $banner->image = $filename;
    }

    $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    }




    public function destroy($id){
        $banner = Banner::findOrFail($id);

        if ($banner->image && file_exists(public_path('uploads/banners/' . $banner->image))) {
            unlink(public_path('uploads/banners/' . $banner->image));
        }

        $banner->delete();



        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }



}
