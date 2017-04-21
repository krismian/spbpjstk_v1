<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;

class BannerController extends Controller
{
    function index(){
        $banners = Banner::all();
        return view('settings.banner.index', compact('banners'));
    }

    function create(){
        $type = 1;
        return view('settings.banner.create', compact('type'));
    }

    function store(Request $request){
        Banner::create([
            'caption' => $request->input('caption'),
            'file' => $request->file('image')->store('banners', 'public'),
        ]);

        return redirect('/banner');
    }

    function destroy($id){
        Banner::destroy($id);
        return redirect('/banner');
    }
}
