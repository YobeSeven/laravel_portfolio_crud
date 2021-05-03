<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //* READ DANS ADMIN *//
    public function skill(){
        $skills = Skill::all();
        return view('admin.contents.skill-admin',compact('skills'));
    }

    //* MODIFICATION *//
    public function edit(Skill $id){
        $skills = $id;
        return view('admin.contents.skill-admin-edit', compact('skills'));
    }

    public function update(Skill $id, Request $request){
        request()->validate([
            "techno"  => ["required"],
            "niveau"  => ["required","numeric"],
        ]);

        $skills = $id;
        $skills->techno = $request->techno;
        $skills->niveau = $request->niveau;
        $skills->save();
        return redirect()->route('admin.skill')->with("success", "sauvegarde faite");
    }

    //* CREATION *//
    public function create(){
        return view('admin.contents.skill-admin-create');
    }

    public function store(Request $request){
        request()->validate([
            "techno"  => ["required"],
            "niveau"  => ["required","numeric"],
        ]);
        $skill = new Skill();
        $skill->techno = $request->techno;
        $skill->niveau = $request->niveau;
        $skill->save();
        return redirect()->route('admin.skill')->with("success", "sauvegarde faite");
    }

    //* SUPPRESSION *//
    public function destroy(Skill $id){
        $id->delete();
        return redirect()->route('admin.skill');
    }
}
