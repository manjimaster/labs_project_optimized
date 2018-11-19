@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Invitation to blog</h1>
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
    
    <form class="my-3" action="{{route ('updateVideo2', $video->id)}}" method="post">
    @csrf
    <input class="btn mr-3" type="text" name="newLink" id="newLink" class="form-control" value="{{$video->content}}">
    
    <button class="btn btn-primary mx-3" type="submit">Submit</button>
</form>
@stop