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
        <h3 class="my-3">Actual Image preview</h3>
        <img class="mb-3 border rounded border-dark w-15 h-25" src={{Storage::url('public/images/originals/'.$image->image_url)}} alt="">
        <form class="my-3" action="{{route ('updateCarousel', $image->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="btn my-3" type="file" name="newImage" id="newImage" value="">
            <button class="btn btn-primary my-2" type="submit">Submit</button>
        </form>
    </div>
@stop