@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
{{-- <h1>Home Page</h1> --}}
@stop

@section('content')
    {{-- <p>You are logged in!</p> --}}
    {{-- <h2>the {{$users[0]->name}}s are</h2>
    @foreach ($users as $item)
        @foreach ($item->users as $item2)
            <p> firstName : {{$item2->firstName}}</p>
            <p> lastName : {{$item2->lastName}}</p>
        @endforeach
    @endforeach --}}
    {{-- ZSH THEME POUR CONSOLE
    CRUD POUR BACKGROUNDS ET TESTIMONIAL GUY --}}
    <h1 class="text-center">Welcome {{\Auth::user()->firstName}} {{\Auth::user()->lastName}}</h1>
    @can('admin')
        <div class="row mt-5 pt-5">
            <div class="col-md-3 col-sm-6 col-xs-12 mx-auto">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fas fa-newspaper"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Articles</span>
                        <span class="info-box-number">{{$articlesToValidate}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12 mx-auto">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fas fa-pen-fancy"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Comments</span>
                        <span class="info-box-number">{{$commentsToValidate}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12 mx-auto">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fas fa-hashtag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tags</span>
                        <span class="info-box-number">{{$tagsToValidate}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12 mx-auto">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fas fa-tags"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Categories</span>
                        <span class="info-box-number">{{$categoriesToValidate}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    @endcan
@stop
