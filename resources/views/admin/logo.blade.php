@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Logo</h1>
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
    <div class="font-weight-bold text-center">
        <h3 class="my-3">Actual Logo preview</h3>
        <img src="{{Storage::url('public/images/originals/big-logo.png')}}" alt="">
        <form class="my-3" action="{{route ('updateLogo')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="btn my-3" type="file" name="newLogo" id="newLogo" value="">
            <button class="btn btn-primary my-2" type="submit">Submit</button>
        </form>
    </div>
@stop