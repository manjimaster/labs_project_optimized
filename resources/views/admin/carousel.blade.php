@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Carousel</h1>
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
        <h3 class="my-3">Add a new image to carousel</h3>
        <form class="my-3" action="{{route ('createCarousel')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="btn my-3" type="file" name="newImage" id="newImage" value="">
            <button class="btn btn-primary my-2" type="submit">Submit</button>
        </form>
    </div>
    {{-- <div class="d-inline"> --}}
        @foreach($carouselContent as $key => $item)
        <form class="text-center p-3 m-2 border rounded border-dark d-inline-block w-15 h-25" action="" method="post" enctype="multipart/form-data">
            @csrf
                <span>{{$key+1}}</span>
                <img class="mb-3 border rounded border-dark" src={{Storage::url('public/images/originals/'.$item->image_url)}} alt="">
                <a href="{{route ('editCarousel', $item->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
                <a href="{{route ('deleteCarousel', $item->id)}}" class="btn btn-danger my-auto" type="submit">Delete</a>
        </form>
        @endforeach
    {{-- </div> --}}
@stop