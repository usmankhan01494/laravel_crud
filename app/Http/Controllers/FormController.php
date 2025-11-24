<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;

class FormController extends Controller
{
    //


  public function save(Request $request)
{
    $request->validate([
        'name'    => 'required',
        'email'   => 'required|email',
        'phone'   => 'required',
        'service' => 'required',
        'date'    => 'nullable|date',
    ]);

    UserForm::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'date' => $request->date,
        'service' => $request->service,
    ]);

    return back()->with('success', 'Data saved successfully!');
}


    

}
