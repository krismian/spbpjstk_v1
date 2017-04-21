@extends('layouts.main')

@section('content')

    @if($type == 1)
        <?php
        $button_label = 'File Gambar';
        $field_label = 'Judul Gambar';
        $field_name = 'caption';
        ?>

    @elseif($type == 2)
        <?php
        $button_label = 'File Peraturan';
        $field_label = 'Judul Peraturan';
        $field_name = 'title';
        ?>
    @endif

    {{--Buat Banner--}}
    @if($type == 1)
        <h1> Buat Banner</h1>
        {{ Form::open(['url' => '/banner', 'files' => 'true']) }}



    {{--Buat Lampiran Peraturan--}}
    @elseif($type == 2)
        <h1> Upload Lampiran Peraturan</h1>
        {{ Form::open(['url' => '/peraturan', 'files' => 'true']) }}


        <div class="form-group">

            {{ Form::label('type', 'Pilih Kategori Peraturan') }}
            {{ Form::select('type', ['2' => 'Internal', '3' => 'Eksternal'], null, ['placeholder'=>'Pilih Kategori Peraturan', 'class'=>'form-control']) }}
        </div>

    @endif




    <div class="form-group">

        {{ Form::label('image', $button_label) }}

        {{ Form::file('image',['class' => 'form-control btn btn-danger']) }}
    </div>

    <div class="form-group">

        {{ Form::label($field_name, $field_label) }}

        {{ Form::text($field_name,null, ['class' => 'form-control', 'placeholder' => $field_label]) }}
    </div>


    {{--Deskripsi untuk Lampiran--}}


    @if($type == 2)
    <div class="form-group">

        {{ Form::label('description', 'Deskripsi Peraturan') }}

        {{ Form::text('description',null, ['class' => 'form-control', 'placeholder' => 'Deskripsi Peraturan']) }}
    </div>
    @endif



    {{ Form::submit('Simpan', ['class' => 'btn btn-danger']) }}

    {{ Form::close() }}



    @endsection