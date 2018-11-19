@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Profile</h1>
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
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4 offset-sm-4">
                <div class="card hovercard">
                    <div class="avatar">
                        <img alt="" src="/storage/images/originals/team/{{$user->users_images->image_url_1}}">
                    </div>
                    <div class="info">
                        <div class="title">
                            <h3>{{$user->firstName}} {{$user->lastName}}</h3>
                        </div>
                        <div class="desc">{{$user->positions->name}}</div>
                        <div class="desc">{{$user->roles->name}}</div>
                        <div class="desc">{{$user->biography}}</div>
                    </div>
                    <div class="bottom">
                        <div class="desc"><a href="mailto:{{$user->email}}">{{$user->email}}</a></div>
                    </div>
                        <a class="btn btn-warning" href="{{route ('editProfile', $user->id)}}">Change</a>
                </div>
            </div>
        </div>
        @can('editor')
        <div class="text-center mt-5">
            <a class="mx-5 btn btn-primary" href="/admin-master/articles/{{$user->id}}">See articles</a>
            <a class="mx-5 btn btn-labsPurple" href="{{route('createPagePersonalArticles')}}">Write a new article</a>
        </div>
        @endcan
    </div>
@stop