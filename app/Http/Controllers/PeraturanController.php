<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class PeraturanController extends Controller
{
    function index(){
        $peraturan = Image::all();
        return view('peraturan.index', compact('peraturan'));
    }


    function create(){
        $type = 2;
        return view('settings.banner.create', compact('type'));
    }
    
    function store(Request $request){
        Image::create([
            'type' => 3,
            'path' => $request->file('image')->store('banners', 'public'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'news_id' => 0,
        ]);
        return redirect('/peraturan');
    }
}
