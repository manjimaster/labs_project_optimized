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
        <form class="col-md-4 col-sm-6 mx-auto mt-5 text-center p-3" action="{{route ('updateProject', $project->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- single project -->
            <div class="p-2 border rounded border-dark">
                <div>
                    <div class="d-inline-block mx-3">
                        <h5 class="mb-3 mx-5">Project's icon</h5>
                        <select name="newIconSelected" data-show-icon="true">
                            <option selected value="{{$project->icons->id}}">{{$project->icons->name}}</option>
                            @foreach ($iconsContent as $icon)
                                @if($icon->name != $project->icons->name)
                                    <option value="{{$icon->id}}">{{$icon->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="d-inline-block mx-3">
                        <h5 class="my-2 mx-5">Project's name</h5>
                        <input class="btn" type="text" name="newName" id="newName" class="form-control" value="{{$project->name}}">
                    </div>
                    <div>
                        <h5 class="my-2">Project's content</h5>
                        <textarea name="newContent" type="text" class="form-control" rows="2">{{$project->content}}</textarea>
                    </div>
                    <div>
                        <h5 class="my-2 mx-5">Project's image</h5>            
                        <input class="btn my-3" type="file" name="newImage" id="newImage" value="">
                    </div>
                </div>

                <button class="btn btn-primary my-2" type="submit">submit</button>
            </div>
        </form>
@stop