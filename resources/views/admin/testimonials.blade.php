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
    <form class="w-30 p-3 m-2 border rounded border-dark d-inline-block" action="{{route ('createTestimonial')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="client-info">
            <div class="avatar"> 
                <h5>Testimonial's avatar</h5>
                <input class="btn my-3" type="file" name="newImage" id="newImage" value="">
            </div>
            <div class="client-name">
                <h5>Testimonial's name</h5>
                <input class="btn m-3" type="text" name="newName" id="newName" class="form-control" value="{{old('newName')}}">
                <h5>Testimonial's position</h5>
                <input class="btn m-3" type="text" name="newPosition" id="newPosition" class="form-control" value="">
                <textarea name="newContent" type="text" class="form-control" rows="5">{{old('newContent')}}</textarea>
            </div>
        </div>
        <button class="btn btn-primary my-2" type="submit">Create</button>
    </form>
    @foreach ($testimonialsContent as $testimonial)
        <!-- single testimonial -->
        <form class="w-30 p-3 m-2 border rounded border-dark d-inline-block" method="post" enctype="multipart/form-data">
            @csrf
            <p>{{$testimonial->content}}</p>
            <div class="client-info">
                <div class="avatar">
                    <img src="/storage/images/modified/avatar/{{$testimonial->testimonial_images->image_url_1}}"
                        alt="">
                </div>
                <div class="client-name">
                    <h2>{{$testimonial->name}}</h2>
                    <p>{{$testimonial->position}}</p>
                </div>
            </div>
            <a href="{{route ('editTestimonial', $testimonial->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
            <a href="{{route ('deleteTestimonial', $testimonial->id)}}" class="btn btn-danger my-auto" type="submit">Delete</a>
        </form>
    @endforeach
@stop