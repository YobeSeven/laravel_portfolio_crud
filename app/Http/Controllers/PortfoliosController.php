<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function portfolio(){
        $portfolios = Portfolio::all();
        return view('admin.contents.portfolio-admin', compact('portfolios'));
    }

    public function edit(Portfolio $id){
        $portfolios = $id;
        return view('admin.contents.portfolio-admin-edit', compact('portfolios'));
    }

    public function update(Portfolio $id, Request $request){
        request()->validate([
            "img"       => ["required"],
            "filter"    => ["required"],
            "title"     => ["required"],
        ]);
        $portfolios = $id;
        $portfolios->img    = $request->img;
        $portfolios->filter = $request->filter;
        $portfolios->title  = $request->title;
        $portfolios->save();
        return redirect()->route('admin.portfolio')->with("success", "sauvegarde faite");
    }

    public function create(){
        return view('admin.contents.portfolio-admin-create');
    }
    public function store(Request $request){
        request()->validate([
            "img"       => ["required"],
            "filter"    => ["required"],
            "title"     => ["required"],
        ]);
        $portfolio = new Portfolio();
        $portfolio->img    = $request->img;
        $portfolio->filter = $request->filter;
        $portfolio->title  = $request->title;
        $portfolio->save();
        return redirect()->route('admin.portfolio')->with("success", "sauvegarde faite");
    }
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('admin.portfolio');
    }
    
    public function show(Portfolio $id){
        $portfolios = $id;
        return view('admin.contents.portfolio-admin-show', compact('portfolios'));
    }
}
