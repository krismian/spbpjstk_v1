@extends('layouts.main')
@section('show')

    <br>
    <br>
    {{--Judul Berita--}}
    <h1>{{ $berita->title }}</h1>
    <p style="font-size: smaller">Dibuat pada {{ $berita->created_at }} oleh {{ $berita->user->name }}</p>
    <hr>



    {{--Isi Berita--}}
    <div style="text-align: justify">
        <p>{!! $berita->content !!}</p>
    </div>



    {{--Komentar--}}
    <h3 id="komentar">Komentar</h3>
    {{ $berita->comments->render() }}


    @foreach($berita->comments as $comment)
        <div style="background-color: lightgrey; border: 1px solid grey; border-radius: 10px ;margin-bottom: 10px">
            <div style="padding: 10px; height: 20px;">
                <p style="font-size: smaller; margin-top: -10px">Dikomentari pada {{ $comment->created_at }}
                    oleh {{ $comment->user->name }} ({{ $comment->user->email }}) </p>
            </div>
            <div style="background-color: white; padding: 10px; border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px">

                <p>{{ $comment->comment }}</p>
            </div>
        </div>
    @endforeach
        {{ $berita->comments->render() }}

    {{--Tulis Komentar--}}
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Tulis Komentar Anda
    </button>

@endsection

@section('thumbnail')
    {{--Lampiran Gambar--}}
    <br>
    <br>
        @foreach($berita->images as $image)
            <img src="/storage/{{ $image->path }}" class="thumbnail img-thumbnail">
        @endforeach




    <!-- Modal -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tulis Komentar Anda</h4>
                </div>
                <div class="modal-body">
                    {{ Form::open(['url'=>'/komentar']) }}
                    {{ Form::hidden('id', $berita->id) }}
                    {{ Form::textarea('comment',null, ['class'=>'form-control']) }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    {{ Form::submit('Simpan Komentar',['class'=>'btn btn-default']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>



    @endsection