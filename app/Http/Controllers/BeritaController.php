<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Image;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $berita = News::where('type','=','1')->orderBy('created_at', 'DESC')->paginate(4);
        return view('berita.index', compact('berita'));
    }

    function create(){
        $metode = 'newscreate';
        $user = \App\User::first();
        $berita = News::all();
        return view ('berita.create', compact('metode','berita'));
    }

    function store(Request $request){
        $news = News::create([
            'title'=>$request->input('title'),
            'previllage'=>$request->input('previllage'),
            'content'=>$request->input('content'),
            'user_id' => Auth::id(),
            'status' => 'diajukan',
            'type' => 1,
        ]);
        foreach ($request->file('image') as $image) {
            $images = new Image([
                'path' => $image->store('images', 'public'),
                'type' => 1
            ]);
            $news->images()->save($images);
        }
        return redirect('/');
    }

    function show($id){
        $berita = News::find($id);
        $berita->setRelation('comments', $berita->comments()->paginate(20));
        return view('berita.show', compact('berita'));
    }
    
    function edit(Request $request,$id){
        $metode = 'newsedit';
        $berita = News::find($id);
        return view('berita.create', compact('berita', 'metode'));
    }

    function update(Request $request,$id){
        News::find($id)->update([
            'title'=>$request->input('title'),
            'previllage'=>$request->input('previllage'),
            'content'=>$request->input('content'),
            'user_id' => Auth::id(),
            'status' => 'diajukan',
        ]);
        return redirect('/');
    }
    
/*
     * Untuk komentar
     * */
    
    function comment(Request $request){
        News::find($request->input('id'))->comments()->create([
            'comment' => $request->input('comment'),
            'user_id' => Auth::id(),
        ]);

        return redirect('/berita/'.$request->input('id'));
    }
}
