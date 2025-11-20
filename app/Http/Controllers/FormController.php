<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;

class FormController extends Controller
{
    //


   public function save(Request $request)
{
    UserForm::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'date' => $request->date ?? null, // ❗ empty ho to NULL save hoga
        'service' => $request->service,
    ]);

    return back()->with('success', 'Data saved successfully!');
}

    

}
