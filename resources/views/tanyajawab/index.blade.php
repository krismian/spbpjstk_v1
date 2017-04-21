@extends('layouts.main')
@section('content')
    <h3 id="komentar">Forum Tanya Jawab</h3>
{{--    {{ $berita->comments->render() }}--}}

    <div class="form-group">

        <a href="/tanyajawab/create"><button class="btn btn-default">Buat Pertanyaan</button></a>
    </div>

    <h2>Daftar Tanya Jawab</h2>
    @foreach($tanyajawab as $forum)
        <div style="background-color: lightgrey; border: 1px solid grey; border-radius: 10px ;margin-bottom: 10px">
            <div style="padding: 10px; height: 20px;">
                <p style="font-size: smaller; margin-top: -10px">Ditanyakan pada {{ $forum->created_at }}
                    oleh {{ $forum->user->name }} ({{ $forum->user->email }}) </p>
            </div>
            <div style="background-color: white; padding: 10px; border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px">

                <p>{!! $forum->content !!}</p>
            </div>
            <h3 id="tanggapan{{ $forum->id }}">Tanggapan</h3>
            @foreach($forum->comments as $comment)
                <p style="font-size: smaller">Ditanggapi oleh {{ $comment->user->name }} pada {{ $comment->created_at }}</p>
                <p>{!!  $comment->comment !!}</p>
                @endforeach
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#{{ $forum->id }}">
                Tulis Tanggapan Anda
            </button>



        <!--Modal-->
            <!--Tanggapan-->
            <div class="modal" id="{{ $forum->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Tulis Komentar Anda</h4>
                        </div>
                        <div class="modal-body">
                            {{ Form::open(['url'=>'/tanyajawab/komentar']) }}
                            {{ Form::hidden('id', $forum->id) }}
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


            <!--Buat Pertanyaan-->

        </div>







    @endforeach


{{--    {{ $berita->comments->render() }}--}}

    @endsection