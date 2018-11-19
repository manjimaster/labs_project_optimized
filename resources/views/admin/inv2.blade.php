@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Invitation to services</h1>
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
            <div class="section-title">
                <h2 class="text-dark">
                    {{ $text->content_p1 }}
                </h2>
                <p>
                    {{ $text->content_p2 }}
                </p>
                <a href="{{route ('editInv2', $text->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
            </div>
        </div>
@stop