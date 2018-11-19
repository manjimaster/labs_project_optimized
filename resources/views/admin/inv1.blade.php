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
        <div class="container">
            <div class="section-title">
                <h2 class="text-dark">
                            {{ $text->content_p1 }}
                    <span>
                            {{ $text->content_p2 }}
                    </span>
                            {{ $text->content_p3 }}
                </h2>
                <a href="{{route ('editInv1', $text->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        {{ $textAbout->content_p1 }}
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        {{ $textAbout->content_p2 }}
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route ('editInv1', $textAbout->id)}}" class="btn btn-primary my-auto" type="submit">Change</a>
            </div>
        </div>
@stop