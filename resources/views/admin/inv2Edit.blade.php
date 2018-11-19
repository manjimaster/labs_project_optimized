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
    <form class="my-3" action="{{route ('updateInv2', $text->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input class="btn mr-3 my-3" type="text" name="new1fp1" id="new1fp1" class="form-control" value="{{$text->content_p1}}">
        
        <textarea name="new1fp2" type="text" class="form-control">{{$text->content_p2}}</textarea>
        
        <button class="btn btn-primary my-3" type="submit">Submit</button>
    </form>
@stop