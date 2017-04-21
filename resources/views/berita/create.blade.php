@extends('layouts.main')
@section('content')


    {{--Create News--}}
    @if($metode == 'newscreate')
    {{ Form::open(['url' => '/berita', 'files' => 'true' ]) }}

    {{--Create Tanya Jawab--}}
    @elseif($metode == 'tanyajawabcreate')
    {{ Form::open(['url' => '/tanyajawab', 'files' => 'true' ]) }}


    {{--Edit News--}}
    @elseif($metode == 'newsedit')
    {{ Form::model($berita, ['route' => ['berita.update', $berita], 'method' => 'put']) }}


    {{--Edit Tanya Jawab--}}
    @elseif($metode == 'newsedit')
    {{ Form::model($berita, ['route' => ['tanyajawab.update', $berita], 'method' => 'put']) }}

    @endif
    <br>
    <br>
    {{--Judul Berita--}}
    <div class="form-group">
        {{ Form::text('title', null, [ 'class' => 'form-control', 'placeholder' => 'Judul Berita']) }}
    </div>


    <div class="form-group">
        {{ Form::select('previllage', ['1' => 'Publik', '2' => 'Internal'], null, ['placeholder'=>'Pilih Sifat Berita', 'class'=>'form-control']) }}
    </div>

    {{--Isi Berita--}}
    <div class="form-group">
        {{ Form::textarea('content', null, ['id'=>'article-ckeditor', 'class' => 'form form-control', 'placeholder' => 'Isi Berita']) }}
    </div>


    <div class="form-group" id="dynamicInput">
        {{ Form::label('image', 'Gambar 1') }}
        {{ Form::file('image[]',['class' => 'form-control btn btn-danger']) }}
    </div>

    <div class="form-group">
        <input type="button" value="Tambah Gambar" onClick="addInput('dynamicInput');" class="btn btn-primary">
    </div>


    <div class="form-group">
        {{ Form::submit('Create',['class' => 'form-control btn btn-primary']) }}
    </div>

    {{ Form::close() }}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );

        var counter = 1;
        var limit = 8;
        function addInput(divName){
            if (counter == limit)  {
                alert("Anda hanya dapat melampirkan 8 file gambar saja ");
            }
            else {
                var newdiv = document.createElement('div');
                newdiv.innerHTML = "Gambar " + (counter + 1) + " <br><input class='form-control btn btn-danger' name='image[]' type='file'>";
                document.getElementById(divName).appendChild(newdiv);
                counter++;
            }
        }

    </script>
    @endsection