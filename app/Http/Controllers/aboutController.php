<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{
    // Show all about records
    public function index()
    {
        $abouts = About::orderBy('id', 'desc')->get();
        return view('admin.about.index', compact('abouts'));
    }

    // Show create form
    public function create()
    {
        return view('admin.about.create');
    }

    // Store new about record
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $about = new About();
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->description = $request->description;

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about'), $filename);
            $about->image = $filename;
        }

        $about->save();

        return redirect()->route('admin.about.index')->with('success', 'About added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    // Update record
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $about = About::findOrFail($id);

    $about->title = $request->title;
    $about->short_description = $request->short_description;
    $about->description = $request->description;
    $about->status = $request->status;

    // ✅ Agar nayi image upload hui ho
    if ($request->hasFile('image')) {

        // Purani image delete kar do (agar exist karti ho)
        if ($about->image && file_exists(public_path('uploads/about/' . $about->image))) {
            unlink(public_path('uploads/about/' . $about->image));
        }

        // Nayi image save karo
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/about'), $filename);
        $about->image = $filename;
    }

    $about->save();

    return redirect()->route('admin.about.index')->with('success', 'About updated successfully!');
}


    // Delete record
public function destroy($id)
{
    $about = About::findOrFail($id);

    // ✅ Image delete from folder
    if ($about->image && file_exists(public_path('uploads/about/' . $about->image))) {
        unlink(public_path('uploads/about/' . $about->image));
    }

    // Database record delete
    $about->delete();

    return redirect()->route('admin.about.index')->with('success', 'About deleted successfully!');
}
}
