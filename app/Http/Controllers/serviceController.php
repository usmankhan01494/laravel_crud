<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class serviceController extends Controller
{
    //

    public function index()
{
    $services = Service::all();  // correct model name
    return view('admin.service.index', compact('services'));
}

     public function create()
    {
        return view('admin.service.create');
    }

    // Store new about record
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $service = new service();
        $service->title = $request->title;
        $service->description = $request->description;
        

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/services'), $filename);
            $service->image = $filename;
        }

        $service->save();

        return redirect()->route('admin.service.index')->with('success', 'service added successfully!');
    }


    // Services Edit 

    public function edit($id){
       $service = service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    // Update record
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $service = service::findOrFail($id);

    $service->title = $request->title;
    $service->description = $request->description;
    $service->status = $request->status;

    // ✅ Agar nayi image upload hui ho
    if ($request->hasFile('image')) {

        // Purani image delete kar do (agar exist karti ho)
        if ($service->image && file_exists(public_path('uploads/services/' . $service->image))) {
            unlink(public_path('uploads/services/' . $service->image));
        }

        // Nayi image save karo
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/services'), $filename);
        $service->image = $filename;
    }

    $service->save();

    return redirect()->route('admin.service.index')->with('success', 'service updated successfully!');
    }


    public function destroy($id)
    {
        $service = service::findOrFail($id);

        // ✅ Image delete from folder
        if ($service->image && file_exists(public_path('uploads/services/' . $service->image))) {
            unlink(public_path('uploads/about/' . $service->image));
        }

        // Database record delete
        $service->delete();

        return redirect()->route('admin.service.index')->with('success', 'service deleted successfully!');
    }

}
