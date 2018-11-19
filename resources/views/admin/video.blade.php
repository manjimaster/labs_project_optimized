@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Video</h1>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="font-weight-bold text-center">
        <h3 class="my-3">Actual Video Background Image preview</h3>
        <img src="{{Storage::url('public/images/originals/video.jpg')}}" alt="">
        <form class="my-3" action="{{route ('updateVideo1')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="btn my-3" type="file" name="newBackground" id="newBackground" value="">
            <button class="btn btn-primary my-2" type="submit">Submit</button>
        </form>
        <h3 class="my-3">Actual Video preview</h3>
            <a href="{{$video->content}}">Link to video</a>
        <form class="my-3" action="{{route ('editVideo', $video->id)}}" method="get">
            @csrf
            <button class="btn btn-primary my-2" type="submit">Change</button>
        </form>
    </div>
@stop