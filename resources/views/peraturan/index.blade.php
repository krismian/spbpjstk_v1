@extends('layouts.main')
@section('content')
    <h1>Kumpulan Peraturan yang Berkaitan dengan Tenaga Kerja</h1>


    <h2>Peraturan Internal</h2>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Judul Peraturan</td>
                <td>Deskripsi</td>
                <td>Download</td>
            </tr>
        </thead>
        <tbody>
        <?php $i = 0;?>
        @foreach($peraturan as $aturan)
            @if($aturan->type === '2')
                <?php $i++;?>
                <tr>
                    <td>{{ $i }} {{ $aturan->type }}</td>
                    <td>{{ $aturan->title }}</td>
                    <td>{{ $aturan->description }}</td>
                    <td style="text-align: center"><a href="/storage/{{ $aturan->path }}"><span class="glyphicon glyphicon-download"></span> </a></td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>


    <h2>Peraturan Eksternal</h2>
    <table class="table">
        <thead>
        <tr>
            <td>No</td>
            <td>Judul Peraturan</td>
            <td>Deskripsi</td>
            <td>Download</td>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0;?>
        @foreach($peraturan as $aturan)
            @if($aturan->type === '3')
                <?php $i++;?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $aturan->title }}</td>
                    <td>{{ $aturan->description }}</td>
                    <td style="text-align: center"><a href="/storage/{{ $aturan->path }}"><span class="glyphicon glyphicon-download"></span> </a></td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <a href="/peraturan/create">
        <button class="btn btn-default">Buat Peraturan</button>
    </a>
    @endsection