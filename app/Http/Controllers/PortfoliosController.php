<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->file('img') != null) {
            Storage::disk('public')->delete('img/portfolio/'.$id->img);
            $request->file('img')->storePublicly('img/portfolio/','public');

            $portfolios->img    = $request->file('img')->hashName();
            $portfolios->filter = $request->filter;
            $portfolios->title  = $request->title;
            $portfolios->save();
        }
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
        $request->file('img')->storePublicly('img/portfolio/','public');

        $portfolio = new Portfolio();
        $portfolio->img    = $request->file('img')->hashName();
        $portfolio->filter = $request->filter;
        $portfolio->title  = $request->title;
        $portfolio->save();
        return redirect()->route('admin.portfolio')->with("success", "sauvegarde faite");
    }

    public function destroy(Portfolio $id){
        Storage::disk('public')->delete('img/portfolio/'.$id->img);
        $id->delete();
        return redirect()->route('admin.portfolio');
    }

    public function download(Portfolio $id){
        return Storage::disk('public')->download('img/portfolio/' . $id->img);
    }

    public function show(Portfolio $id){
        $portfolios = $id;
        return view('admin.contents.portfolio-admin-show', compact('portfolios'));
    }
}
