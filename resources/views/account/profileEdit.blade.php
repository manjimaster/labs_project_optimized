@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Profile edit</h1>
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
    <form action="{{route ('updateProfile', $user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4 offset-sm-4">
                    <div class="card hovercard">
                        <div class="avatar">
                            <input class="btn my-3 border rounded border-labsPurple" type="file" name="newImage" id="newImage" value="">
                        </div>
                        <div class="info">
                                <input class="btn my-2 border rounded border-labsPurple" type="text" name="newFirstName" id="newFirstName" class="form-control" value="{{$user->firstName}}">
                                <input class="btn my-2 border rounded border-labsPurple" type="text" name="newLastName" id="newLastName" class="form-control" value="{{$user->lastName}}">
                            <div class="desc">{{$user->positions->name}}</div>
                            <div class="desc">{{$user->roles->name}}</div>
                        </div>
                        <div class="bottom">
                            <div class="desc"><input class="btn my-2 border rounded border-labsPurple" type="text" name="newEmail" id="newEmail" class="form-control" value="{{$user->email}}"></div>
                            <input class="btn my-2 border rounded border-labsPurple" type="password" name="newPassword" id="newPassword" class="form-control" value="{{$user->password}}">
                            <textarea name="newBiography" type="text" class="form-control" rows="2">{{$user->biography}}</textarea>
                        </div>
                    <button class="btn btn-primary my-2" type="submit">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop