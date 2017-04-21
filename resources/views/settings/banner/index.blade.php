@extends('layouts.main')

@section('content')
    <table class="table">
        <thead class="tab-pane">
            <tr>
                <td>Caption</td>
                <td>Gambar</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr class="table-striped">
                    <td> {{ $banner->caption }} </td>
                    <td><img src="storage/{{ $banner->file }}" class="img-thumbnail" style="width: 400px"></td>
                    <td>
                        {{ Form::open(['route' => ['banner.destroy', $banner->id], 'method' => 'delete']) }}
                        {{ Form::submit('Hapus',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/banner/create" class="btn btn-danger">create</a>

    @endsection




