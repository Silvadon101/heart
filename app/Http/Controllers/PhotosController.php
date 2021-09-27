<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class PhotosController extends Controller
{
    public function create()
    {
        $images = Photos::all();
        return view('media',['images'=>$images]);
    }

    public function store(Request $request)
    {
        $name = $request->file('photo')->getClientOriginalName();
        $size = $request->file('photo')->getSize();

        $request->file('photo')->storeAs('public/img/', $name);
        $photo = new Photos();
        $photo->name = $name;
        $photo->size = $size;
        $photo->save();
        return redirect()->back();
    }
}
