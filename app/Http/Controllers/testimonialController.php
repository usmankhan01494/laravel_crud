<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimonial;

class testimonialController extends Controller
{
    //
     public function index()
    {
        $testimonial = testimonial::orderBy('id', 'desc')->get();
        return view('admin.testimonial.index', compact('testimonial'));
    }



    public function create(){
        return view('admin.testimonial.create');
    }



    public function store(Request $request){
        // Validate and store testimonial data
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);



        $testimonial = new testimonial();
            $testimonial->name = $request->name;
            $testimonial->position = $request->position;
            $testimonial->message = $request->message;


        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/testimonials'), $filename);
            $testimonial->image = $filename;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial added successfully!');
    }





    public function edit($id){
        // Fetch testimonial by $id and return edit view

        $testimonial = testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }







    public function update(Request $request, $id){
        // Validate and update testimonial data

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $testimonial = testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->message = $request->message;

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/testimonials'), $filename);
            $testimonial->image = $filename;
            
    }   
        $testimonial->save();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully!');
    }




    public function destroy($id){
        // Delete testimonial by $id

        $testimonial = testimonial::findOrFail($id);
        // Delete associated image file
        if ($testimonial->image && file_exists(public_path('uploads/testimonials/' . $testimonial->image))) {
            unlink(public_path('uploads/testimonials/' . $testimonial->image));
        }
        $testimonial->delete();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial deleted successfully.');
    }
}
