<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Image;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        $abouts = About::all();
        $skills = Skill::all();
        $contacts = Contact::all();
        $portfolios = Portfolio::all();
        $facts = Fact::all();
        $services = Service::all();
        $images = Image::all();
        return view('home', compact('abouts','skills','contacts','portfolios','facts','services','images'));
    }


    public function admin(){
        return view('admin.index-admin');
    }
}
