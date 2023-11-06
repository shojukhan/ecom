<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;

class CatagoryController extends Controller
{
    public function catagory_create()
    {
        return view('catagory.catagory');
    }

    public function catagory_store(Request $request)
    {
        // // Validation and password hashing
        // $this->validate($request, [
        //     'username' => 'required|unique:cretate_users',
        //     'password' => 'required|min:8',
        // ]);

        $data = new catagory();
        $data->cat_name = $request->catagoryName;
        $data->cat_icon = $request->icon;
        if ($request->hasFile('image')) {
            $img = $request->file('image')->extension();

            $file_name = uniqid() . "catagory" . "." . $img;
            $image = $request->image->storeAs('upload/', $file_name, 'public');
            $data->cat_img = $file_name;
        }

        if ($request->hasFile('icon')) {
            $img = $request->file('icon')->extension();

            $file_icon = uniqid() . "icon" . "." . $img;
            $image = $request->icon->storeAs('upload/', $file_icon, 'public');
            $data->cat_icon = $file_icon;
        }
        $data->save();
        return redirect()->route('viewProduct')->with('massage', 'Catagory successfully add');
    }
}
