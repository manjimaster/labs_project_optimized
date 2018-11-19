@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Users</h1>
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
<form action="{{route('createUsers')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table class="table font-weight-bold text-center mb-0">
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
                <td>0</td>
                <td><input class="btn my-3" type="file" name="newImage" id="newImage" value=""></td>
                <td><input class="btn my-2" type="text" name="newFirstName" id="newFirstName" class="form-control" value="{{old('newFirstName')}}"></td>
                <td><input class="btn my-2" type="text" name="newLastName" id="newLastName" class="form-control" value="{{old('newLastName')}}"></td>
                <td><input class="btn my-2" type="text" name="newEmail" id="newEmail" class="form-control" value="{{old('newEmail')}}"></td>
                <td><input class="btn my-2" type="password" name="newPassword" id="newPassword" class="form-control" value=""></td>
            </tr>
        </tbody>
    </table>
    <table class="table font-weight-bold text-center my-0">
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
                <td>0</td>
                <td>
                    <input class="btn my-2" type="text" name="newTeam" id="newTeam" class="form-control" value="">
                </td>
                <td>
                    <input class="btn my-2" type="text" name="newPermanent" id="newPermanent" class="form-control"
                        value="">
                </td>
                <td>
                    <select class="btn bg-white my-2" name="newPositionSelected" data-show-icon="true">
                        <option selected value=""></option>
                        @foreach ($positions as $position)
                        <option value="{{$position->id}}">{{$position->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-labsPurple js-toggle" type="button">+</button>
                    <br>
                    <input class="btn my-2 slidedown d-none" type="text" name="newPosition" id="newPosition" class="form-control" value="{{old('newPosition')}}">
                </td>
                <td>
                    <select class="btn bg-white my-2" name="newRoleSelected" data-show-icon="true">
                        <option selected value=""></option>
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-primary my-2 mb-5" type="submit">Creat a new user</button>
</form>
    <table class="table font-weight-bold text-center">
        <thead class="bg-labsPurple">
            <tr class="text-white">
                <th>#</th>
                <th>Avatar</th>
                <th>Fisrtname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Team member</th>
                <th>Permanent</th>
                <th>Position</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody  class="bg-labsGreen">
            @foreach ($users as $key => $user)
                <tr>
                    <td>{{$key+1}}</td>
                    <td><img src="/storage/images/modified/team/{{$user->users_images->image_url_1}}" alt=""></td>
                    <td>{{$user->firstName}}</td>
                    <td>{{$user->lastName}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    @if ($user->team == '1')
                        <td>yes</td>
                    @else
                        <td>no</td>
                    @endif
                    @if ($user->permanentTeamMember == '1')
                        <td>yes</td>
                    @else
                        <td>no</td>
                    @endif
                    <td>{{$user->positions->name}}</td>
                    <td>{{$user->roles->name}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route ('editUsers', $user->id)}}">Edit</a>
                        <a href="{{route ('deleteUsers', $user->id)}}" class="btn btn-danger my-auto" type="submit">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop