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
    <div class="row">
            @foreach ($servicesContent as $key => $service)
                @if ($key == 0)
                    <form class="col-md-4 col-sm-6 mx-auto text-center p-3" action="{{route ('createService')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- single service -->
                        <div class="p-2 border rounded border-dark">
                            <div>
                                <div class="d-inline-block mx-3">
                                    <h5 class="mb-3 mx-5">Service's icon</h5>
                                    <select name="newIconSelected" data-show-icon="true">
                                        @foreach ($iconsContent as $icon)
                                        <option value="{{$icon->id}}">{{$icon->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-inline-block mx-3">
                                    <h5 class="my-2 mx-5">Service's name</h5>
                                    <input class="btn" type="text" name="newName" id="newName" class="form-control" value="{{old('newName')}}">
                                </div>
                                    <h5 class="my-2">Service's content</h5>
                                <textarea name="newContent" type="text" class="form-control" rows="2">{{old('newContent')}}</textarea>
                            </div>
                            <button class="btn btn-primary my-2" type="submit">create</button>
                        </div>
                    </form>
                    <form class="p-3 col-md-4 col-sm-6 mx-auto" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="border rounded border-dark p-2 mt-4">
                            <!-- single service -->
                            <div class="service mb-2">
                                <div class="icon">
                                    <i class="{{$service->icons->class}}"></i>
                                </div>
                                <div class="service-text">
                                    <h2>{{$service->name}}</h2>
                                    <p>{{$service->content}}</p>
                                </div>
                            </div>
                            <a href="{{route ('editService', $service->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
                            <a href="{{route ('deleteService', $service->id)}}" class="btn btn-danger my-auto" type="submit">Delete</a>
                        </div>
                    </form>
                @endif
                @if ($key > 0)
                    <form class="p-3 col-md-4 col-sm-6 mx-auto" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="border rounded border-dark p-2">
                            <!-- single service -->
                            <div class="service mb-2">
                                <div class="icon">
                                    <i class="{{$service->icons->class}}"></i>
                                </div>
                                <div class="service-text">
                                    <h2>{{$service->name}}</h2>
                                    <p>{{$service->content}}</p>
                                </div>
                            </div>
                            <br>
                            <a href="{{route ('editService', $service->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
                            <a href="{{route ('deleteService', $service->id)}}" class="btn btn-danger my-auto" type="submit">Delete</a>
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