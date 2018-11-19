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
        
    @if ($text->uses == '1b1')
            <form class="my-3" action="{{route ('updateInv1', $text->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="btn mr-3" type="text" name="new1bp1" id="new1bp1" class="form-control" value="{{$text->content_p1}}">
            <input class="btn mx-3" type="text" name="new1bp2" id="new1bp2" class="form-control" value="{{$text->content_p2}}">
            <input class="btn mx-3" type="text" name="new1bp3" id="new1bp3" class="form-control" value="{{$text->content_p3}}">
            
            {{-- <textarea name="newProjectDescription" type="text" class="form-control" placeholder="projectDescription">{{$item->projectDescription}}</textarea> --}}
            
            <button class="btn btn-primary mx-3" type="submit">Submit</button>
        </form>
    @endif

    @if ($text->uses == '1b2')
    <form class="my-3 text-center" action="{{route ('updateInv1', $text->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <textarea name="new1bp1" type="text" class="form-control" placeholder="projectExplanation" rows="5">{{$text->content_p1}}</textarea>
            
            <textarea name="new1bp2" type="text" class="form-control" placeholder="projectExplanation" rows="5">{{$text->content_p2}}</textarea>

            <input class="btn mx-3" type="text" name="new1bp3" id="new1bp3" class="form-control" value="{{$text->content_p3}}" hidden>
            
            <button class="btn btn-primary my-3" type="submit">Submit</button>
        </form>
    @endif
@stop