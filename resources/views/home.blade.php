@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    {{-- <h2>the {{$users[0]->name}}s are</h2>
    @foreach ($users as $item)
        @foreach ($item->users as $item2)
            <p> firstName : {{$item2->firstName}}</p>
            <p> lastName : {{$item2->lastName}}</p>
        @endforeach
    @endforeach --}}
    ZSH THEME POUR CONSOLE
@stop