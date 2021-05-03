<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //* READ DANS ADMIN *//
    public function image(){
        $images = Image::all();
        return view('admin.contents.image-admin', compact('images'));
    }

    //* CREATION *//
    public function create(){
        return view('admin.contents.image-admin-create');
    }
    public function store(Request $request){
        request()->validate([
            "src"   => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);

        $request->file('src')->storePublicly('img/','public');

        $image = new Image();
        $image->src = $request->file('src')->hashName();
        $image->save();
        return redirect()->route('admin.image')->with("success", "sauvegarde faite");
    }

    //* SUPPRESSION *//
    public function destroy(Image $id){
        Storage::disk('public')->delete('img/'.$id->src);
        $id->delete();
        return redirect()->back();
    }

    //* MODIFICATION *//
    public function edit(Image $id){
        $image = $id;
        return view('admin.contents.image-admin-edit',compact('image'));
    }

    public function update(Image $id,Request $request){
        request()->validate([
            "src"   => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);
        $image = $id;
        if ($request->file('src') != null) {
            Storage::disk('public')->delete('img/' . $id->src);
            $request->file('src')->storePublicly('img/','public');
            $image->src = $request->file('src')->hashName();
            $image->save();
        }
        return redirect()->route('admin.image')->with("success", "sauvegarde faite");
    }

    //* TELECHARGEMENT *//
    public function download(Image $id){
        return Storage::disk('public')->download('img/'.$id->src);
    }
}
