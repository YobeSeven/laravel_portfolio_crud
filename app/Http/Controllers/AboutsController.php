<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutsController extends Controller
{
    public function about(){
        $abouts = About::all();
        return view('admin.contents.about-admin', compact('abouts'));
    }

    public function edit(About $id){
        $abouts = $id;
        return view('admin.contents.about-admin-edit', compact('abouts'));
    }

    public function update(About $id, Request $request){
        request()->validate([
            "naissance"     => ["required"],
            "site"          => ["required"],
            "numero"        => ["required","numeric"],
            "ville"         => ["required"],
            "age"           => ["required","numeric"],
            "diplome"       => ["required"],
            "email"         => ["required","email"],
            "freelance"     => ["required"],
        ]);
        $abouts = $id;
        $abouts->naissance  = $request->naissance; 
        $abouts->site       = $request->site; 
        $abouts->numero     = $request->numero; 
        $abouts->ville      = $request->ville; 
        $abouts->age        = $request->age; 
        $abouts->diplome    = $request->diplome; 
        $abouts->email      = $request->email; 
        $abouts->freelance  = $request->freelance; 
        $abouts->save();
        return redirect()->route('admin.about')->with("success", "sauvegarde faite");
    }
    public function create(){
        return view('admin.contents.about-admin-create');
    }
    public function store(Request $request){
        request()->validate([
            "naissance"     => ["required"],
            "site"          => ["required"],
            "numero"        => ["required","numeric"],
            "ville"         => ["required"],
            "age"           => ["required","numeric"],
            "diplome"       => ["required"],
            "email"         => ["required","email"],
            "freelance"     => ["required"],
        ]);

        $about = new About();
        $about->naissance  = $request->naissance;
        $about->site       = $request->site;
        $about->numero     = $request->numero;
        $about->ville      = $request->ville;
        $about->age        = $request->age;
        $about->diplome    = $request->diplome;
        $about->email      = $request->email;
        $about->freelance  = $request->freelance;
        $about->save();
        return redirect()->route('admin.about')->with("success", "sauvegarde faite");
    }
    
    public function destroy(About $id){
        $id->delete();
        return redirect()->route('admin.about');
    }
    
}
