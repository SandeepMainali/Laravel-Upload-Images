<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $req){
        // dd($req->all());
        $image = $req->file('image-upload');
        // dd($image);
        $image->store('image','public');
        // dd($image);

        $respone =$image->store('image','public');
        return back();

    }
}
