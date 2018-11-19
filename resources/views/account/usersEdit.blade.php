@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
<h1>User edit</h1>
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
{{-- <div class="font-weight-bold text-center">
    <h3 class="my-3">Actual Logo preview</h3>
    <img src="{{Storage::url('public/images/originals/big-logo.png')}}" alt="">
    <form class="my-3" action="{{route ('updateLogo')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input class="btn my-3" type="file" name="newLogo" id="newLogo" value="">
        <button class="btn btn-primary my-2" type="submit">Submit</button>
    </form>
</div> --}}
<form action="{{route ('updateUsers', $user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <table class="table font-weight-bold text-center">
        <thead class="bg-labsPurple">
            <tr class="text-white">
                <th>#</th>
                <th>Avatar</th>
                <th>Fisrtname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody class="bg-labsGreen">
            <tr>
                <td>{{$user->id}}</td>
                <td><input class="btn my-3" type="file" name="newImage" id="newImage" value=""></td>
                <td><input class="btn my-2" type="text" name="newFirstName" id="newFirstName" class="form-control"
                        value="{{$user->firstName}}"></td>
                <td><input class="btn my-2" type="text" name="newLastName" id="newLastName" class="form-control" value="{{$user->lastName}}"></td>
                <td><input class="btn my-2" type="text" name="newEmail" id="newEmail" class="form-control" value="{{$user->email}}"></td>
                <td><input class="btn my-2" type="password" name="newPassword" id="newPassword" class="form-control"
                        value="{{$user->password}}"></td>
            </tr>
        </tbody>
    </table>
    <table class="table font-weight-bold text-center">
        <thead class="bg-labsPurple">
            <tr class="text-white">
                <th>#</th>
                <th>Team member (0 or 1)</th>
                <th>Permanent (0 or 1)</th>
                <th>Position</th>
                <th>Permissions</th>
            </tr>
        </thead>
        <tbody class="bg-labsGreen">
            <tr>
                <td>{{$user->id}}</td>
                <td>
                    <input class="btn my-2" type="text" name="newTeam" id="newTeam" class="form-control" value="{{$user->team}}">
                </td>
                <td>
                    <input class="btn my-2" type="text" name="newPermanent" id="newPermanent" class="form-control"
                        value="{{$user->permanentTeamMember}}">
                </td>
                <td>
                    <select class="btn bg-white my-2" name="newPositionSelected" data-show-icon="true">
                        <option selected value="{{$user->positions->id}}">{{$user->positions->name}}</option>
                        @foreach ($positions as $position)
                        @if($position->name != $user->positions->name)
                        <option value="{{$position->id}}">{{$position->name}}</option>
                        @endif
                        @endforeach
                    </select>
                    <button class="btn btn-labsPurple js-toggle" type="button">+</button>
                    <br>
                    <input class="btn my-2 slidedown d-none" type="text" name="newPosition" id="newPosition" class="form-control"
                        value="">
                </td>
                <td>
                    <select class="btn bg-white my-2" name="newRoleSelected" data-show-icon="true">
                        <option selected value="{{$user->roles->id}}">{{$user->roles->name}}</option>
                        @foreach ($roles as $role)
                        @if($role->name != $user->roles->name)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-primary my-2" type="submit">submit</button>
</form>
@stop
