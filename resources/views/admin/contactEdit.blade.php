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
    <form class="p-3 m-2" action="{{route ('updateContact')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="font-weight-bold">
            <div class="col-md-5 contact-info">
                <div class="section-title left">
                    <input class="btn my-2" type="text" name="newTitle1" id="newTitle1" class="form-control" value="{{$contact->title_1}}">
                </div>
                <textarea name="newContent" type="text" class="form-control" rows="2">{{$contact->content}}</textarea>
                <input class="btn my-2 d-block" type="text" name="newTitle2" id="newTitle2" class="form-control" value="{{$contact->title_2}}">
                <input class="btn my-2 mr-2" type="text" name="newAddress1" id="newAddress1" class="form-control" value="{{$contact->address_1}}">
                <input class="btn m-2" type="text" name="newAddress2" id="newAddress2" class="form-control" value="{{$contact->address_2}}">
                <input class="btn my-2 d-block" type="text" name="newPhone1" id="newPhone1" class="form-control" value="{{$contact->phone_1}}">
                <input class="btn my-2 d-block" type="text" name="newEmail1" id="newEmail1" class="form-control" value="{{$contact->email_1}}">
                <button class="btn btn-primary my-2" type="submit">Submit</button>
            </div>
        </div>
    </form>
@stop