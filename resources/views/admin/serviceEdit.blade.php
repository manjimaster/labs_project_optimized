@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Services</h1>
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
        <form class="text-center p-3 mx-auto w-30 border rounded border-dark" action="{{route ('updateService', $service->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- single service -->
            <div>
                <div class="d-inline-block mx-3">
                    <h5 class="mb-3 mx-5">Service's icon</h5>
                    <select name="newIconSelected" data-show-icon="true">
                        <option selected value="{{$service->icons->id}}">{{$service->icons->name}}</option>
                        @foreach ($iconsContent as $icon)
                        @if($icon->name != $service->icons->name)
                        <option value="{{$icon->id}}">{{$icon->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="d-inline-block mx-3">
                    <h5 class="my-2 mx-5">Testimonial's name</h5>
                    <input class="btn" type="text" name="newName" id="newName" class="form-control" value="{{$service->name}}">
                </div>
                <h5 class="my-2">Service's content</h5>
                <textarea name="newContent" type="text" class="form-control" rows="5">{{$service->content}}</textarea>
            </div>

            <button class="btn btn-primary my-3" type="submit">Submit</button>
        </form>
@stop