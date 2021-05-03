<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    //* READ DANS ADMIN *//
    public function fact(){
        $facts = Fact::all();
        return view('admin.contents.fact-admin', compact('facts'));
    }

    //* MODIFICATION *//
    public function edit(Fact $id){
        $facts = $id;
        return view('admin.contents.fact-admin-edit', compact('facts'));
    }

    public function update(Fact $id,Request $request){
        request()->validate([
            "clients"  => ["required","numeric"],
            "projets"  => ["required","numeric"],
            "support"  => ["required","numeric"],
            "workers"  => ["required","numeric"],
        ]);
        $facts = $id;
        $facts->clients = $request->clients;
        $facts->projets = $request->projets;
        $facts->support = $request->support;
        $facts->workers = $request->workers;
        $facts->save();
        return redirect()->route('admin.fact')->with("success", "sauvegarde faite");
    }

    //* CREATION *//
    public function create(){
        return view('admin.contents.fact-admin-create');
    }
    public function store(Request $request){
        request()->validate([
            "clients"  => ["required","numeric"],
            "projets"  => ["required","numeric"],
            "support"  => ["required","numeric"],
            "workers"  => ["required","numeric"],
        ]);
        $fact = new Fact();
        $fact->clients  = $request->clients;
        $fact->projets  = $request->projets;
        $fact->support  = $request->support;
        $fact->workers  = $request->workers;
        $fact->save();
        return redirect()->route('admin.fact')->with("success", "sauvegarde faite");
    }

    //* SUPPRESSION *//
    public function destroy(Fact $id){
        $id->delete();
        return redirect()->route('admin.fact');
    }
}
