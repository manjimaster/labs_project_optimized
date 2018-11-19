@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Contact</h1>
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
    <form class="p-3 m-2" action="" method="post" enctype="multipart/form-data">
        <div class="font-weight-bold">
            <div class="col-md-5 contact-info">
                <div class="section-title left">
                    <h2 class="text-dark">{{$contact->title_1}}</h2>
                </div>
                <p class="text-dark">{{$contact->content}}</p>
                <h3 class="mt60 text-dark">{{$contact->title_2}}</h3>
                <p class="con-item text-dark">{{$contact->address_1}} <br> {{$contact->address_2}} </p>
                <p class="con-item text-dark">{{$contact->phone_1}}</p>
                <p class="con-item text-dark">{{$contact->email_1}}</p>
                <a href="{{route ('editContact')}}" class="btn btn-primary my-auto" type="submit">Change</a>
            </div>
        </div>
    </form>
@stop