@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Testimonials</h1>
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
        <!-- single testimonial -->
        <form action="{{route ('updateTestimonial', $testimonial->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="client-info">
                <div class="avatar"> 
                    <h5>Testimonial's avatar</h5>
                    <input class="btn my-3" type="file" name="newImage" id="newImage" value="">
                </div>
                <div class="client-name">
                    <h5>Testimonial's name</h5>
                    <input class="btn m-3" type="text" name="newName" id="newName" class="form-control" value="{{$testimonial->name}}">
                    <h5>Testimonial's position</h5>
                    <input class="btn m-3" type="text" name="newPosition" id="newPosition" class="form-control" value="{{$testimonial->position}}">
                    <textarea name="newContent" type="text" class="form-control" rows="5">{{$testimonial->content}}</textarea>
                </div>
            </div>

            <button class="btn btn-primary my-2" type="submit">Submit</button>
        </form>
@stop