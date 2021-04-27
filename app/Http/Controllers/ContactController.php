<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $contacts = Contact::all();
        return view('admin.contents.contact-admin',compact('contacts'));
    }
    public function edit(Contact $id){
        $contacts = $id;
        return view('admin.contents.contact-admin-edit',compact('contacts'));
    }
    public function update(Contact $id,Request $request){
        request()->validate([
            "location"  => ["required"],
            "call"      => ["required","numeric"],
            "email"     => ["required","email"],
        ]);
        $contacts=$id;
        $contacts->location = $request->location;
        $contacts->call     = $request->call;
        $contacts->email    = $request->email;
        $contacts->save();
        return redirect()->route('admin.contact')->with("success", "sauvegarde faite");
    }
    public function create(){
        return view('admin.contents.contact-admin-create');
    }
    public function store(Request $request){
        request()->validate([
            "location"  => ["required"],
            "call"      => ["required","numeric"],
            "email"     => ["required","email"],
        ]);
        $contact = new Contact();
        $contact->location  = $request->location;
        $contact->call      = $request->call;
        $contact->email     = $request->email;
        $contact->save();
        return redirect()->route('admin.contact')->with("success", "sauvegarde faite");
    }

    public function destroy(Contact $id){
        $id->delete();
        return redirect()->route('admin.about');
    }
}
