<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service(){
        $services = Service::all();
        return view('admin.contents.service-admin', compact('services'));
    }

    public function edit(Service $id){
        $services=$id;
        return view('admin.contents.service-admin-edit', compact('services'));
    }

    public function update(Service $id, Request $request){
        request()->validate([
            "icone"  => ["required"],
            "titre"  => ["required"],
            "texte"  => ["required"],
        ]);
        $services=$id;
        $services->icone = $request->icone;
        $services->titre = $request->titre;
        $services->texte = $request->texte;
        $services->save();
        return redirect()->route('admin.service')->with("success", "sauvegarde faite");
    }
    public function create(){
        return view('admin.contents.service-admin-create');
    }
    public function store(Request $request){
        request()->validate([
            "icone"  => ["required"],
            "titre"  => ["required"],
            "texte"  => ["required"],
        ]);
        $service= new Service();
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        $service->save();
        return redirect()->route('admin.service')->with("success", "sauvegarde faite");
    }
    public function destroy(Service $id){
        $id->delete();
        return redirect()->route('admin.service');
    }
}
