<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Auth;
class TanyaJawabController extends Controller
{
    function index(){
        $tanyajawab = News::where('type',2)->orderBy('created_at', 'DESC')->get();
        return view('tanyajawab.index', compact('tanyajawab'));
    }
    
    function create()
    {
        $metode = 'tanyajawabcreate';
        return view('berita.create', compact('metode'));
    }

    function store(Request $request){
        News::create([
            'title'=>$request->input('title'),
            'previllage'=>$request->input('previllage'),
            'content'=>$request->input('content'),
            'user_id' => Auth::id(),
            'status' => 'diajukan',
            'type' => 2,
        ]);

        return redirect('/tanyajawab');
    }

    function comment(Request $request){
        News::find($request->input('id'))->comments()->create([
            'comment' => $request->input('comment'),
            'user_id' => Auth::id(),
        ]);

        return redirect('/tanyajawab/#tanggapan'.$request->input('id'));
    }
}
