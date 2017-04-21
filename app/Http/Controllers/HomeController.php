<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Banner;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        $berita = News::where('type','1')->orderBy('created_at', 'DESC')->paginate(4);
        return view('home', compact('banners', 'berita'));
    }
}
