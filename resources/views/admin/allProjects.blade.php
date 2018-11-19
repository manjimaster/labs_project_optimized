@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Projects</h1>
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
    <div class="row">
            @foreach ($projectsContent as $key => $project)
                @if ($key == 0)
                    <form class="col-md-4 col-sm-6 mx-auto mt-5 text-center p-3" action="{{route ('createProject')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- single project -->
                        <div class="p-2 border rounded border-dark">
                            <div>
                                <div class="d-inline-block mx-3">
                                    <h5 class="mb-3 mx-5">Project's icon</h5>
                                    <select name="newIconSelected" data-show-icon="true">
                                        @foreach ($iconsContent as $icon)
                                        <option value="{{$icon->id}}">{{$icon->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-inline-block mx-3">
                                    <h5 class="my-2 mx-5">Project's name</h5>
                                    <input class="btn" type="text" name="newName" id="newName" class="form-control" value="{{old('newName')}}">
                                </div>
                                <div>
                                    <h5 class="my-2">Project's content</h5>
                                    <textarea name="newContent" type="text" class="form-control" rows="2">{{old('newContent')}}</textarea>
                                </div>
                                <div>
                                    <h5 class="my-2 mx-5">Project's image</h5>            
                                    <input class="btn my-3" type="file" name="newImage" id="newImage">
                                </div>
                            </div>
                            <button class="btn btn-primary my-2" type="submit">create</button>
                        </div>
                    </form>
                    <form class="p-3 col-md-4 col-sm-6 mx-auto" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="border rounded border-dark p-2">
                            <!-- single project -->
                            <div class="mb-2">
                                <div class="icon-box light">
						        	<div class="icon">
                                        <i class="text-dark {{$project->icons->class}}"></i>
						        	</div>
						        	<div class="service-text">
                                        <h2 class="text-dark">{{$project->name}}</h2>
                                        <p class="text-dark">{{$project->content}}</p>
						        	</div>
						        </div>
                                <div class="text-center">
                                    <img src="/storage/images/modified/{{$project->projects_images->image_url_1}}" alt="">
                                </div>
                            </div>
                            <br>
                            <a href="{{route ('editProject', $project->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
                            <a href="{{route ('deleteProject', $project->id)}}" class="btn btn-danger my-auto" type="submit">Delete</a>
                        </div>
                    </form>
                @endif
                @if ($key > 0)
                    <form class="p-3 col-md-4 col-sm-6 mx-auto" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="border rounded border-dark p-2">
                            <!-- single project -->
                            <div class="mb-2">
                                <div class="icon-box light">
						        	<div class="icon">
                                        <i class="text-dark {{$project->icons->class}}"></i>
						        	</div>
						        	<div class="service-text">
                                        <h2 class="text-dark">{{$project->name}}</h2>
                                        <p class="text-dark">{{$project->content}}</p>
						        	</div>
						        </div>
                                <div class="text-center">
                                    <img src="/storage/images/modified/{{$project->projects_images->image_url_1}}" alt="">
                                </div>
                            </div>
                            <br>
                            <a href="{{route ('editProject', $project->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
                            <a href="{{route ('deleteProject', $project->id)}}" class="btn btn-danger my-auto" type="submit">Delete</a>
                        </div>
                    </form>
                @endif
                
                @if ((($key)%3) == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>
@stop