<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function image(){
        $images = Image::all();
        return view('admin.contents.image-admin', compact('images'));
    }
    public function create(){
        return view('admin.contents.image-admin-create');
    }
    public function store(Request $request){

        $request->file('src')->storePublicly('img/','public');

        $image = new Image();
        $image->src = $request->file('src')->hashName();
        $image->save();
        return redirect()->route('admin.image');
    }

    public function destroy(Image $id){
        Storage::disk('public')->delete('img/'.$id->src);
        $id->delete();
        return redirect()->back();
    }

    public function edit(Image $id){
        $image = $id;
        return view('admin.contents.image-admin-edit',compact('image'));
    }

    public function update(Image $id,Request $request){
        $image = $id;
        if ($request->file('src') != null) {
            Storage::disk('public')->delete('img/' . $id->src);
            $request->file('src')->storePublicly('img/','public');
            $image->src = $request->file('src')->hashName();
            $image->save();
        }
        return redirect()->route('admin.image');
    }
    
    public function download(Image $id){
        return Storage::disk('public')->download('img/'.$id->src);
    }
}
