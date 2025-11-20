<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    public function index()
{
    $blogs = blog::all();  // correct model name
    return view('admin.blog.index', compact('blogs'));
}

     public function create()
    {
        return view('admin.blog.create');
    }

    // Store new about record
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $blog = new blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $blog->image = $filename;
        }

        $blog->save();

        return redirect()->route('admin.blog.index')->with('success', 'blog added successfully!');
    }


    // Blogs Edit 

    public function edit($id){
       $blog = blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    // Update record
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $blog = blog::findOrFail($id);

    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->status = $request->status;

    // ✅ Agar nayi image upload hui ho
    if ($request->hasFile('image')) {

        // Purani image delete kar do (agar exist karti ho)
        if ($blog->image && file_exists(public_path('uploads/blogs/' . $blog->image))) {
            unlink(public_path('uploads/blogs/' . $blog->image));
        }

        // Nayi image save karo
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/blogs'), $filename);
        $blog->image = $filename;
    }

    $blog->save();

    return redirect()->route('admin.blog.index')->with('success', 'blog updated successfully!');
    }


    public function destroy($id)
    {
        $blog = blog::findOrFail($id);

        // ✅ Image delete from folder
        if ($blog->image && file_exists(public_path('uploads/blogs/' . $blog->image))) {
            unlink(public_path('uploads/blogs/' . $blog->image));
        }

        // Database record delete
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'blog deleted successfully!');
    }

}

