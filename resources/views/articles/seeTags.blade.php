@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>All Tags</h1>
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
	<table class="table">
		<thead>
			<tr class="font-weight-bold bg-labsPurple text-white">
				<th>#</th>
				<th>Name</th>
				<th>Validate</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<form action="{{route('createTags')}}" method="post">
			@csrf
			<tr class="font-weight-bold bg-labsGreen">
				<td>0</td>
				<td><input class="btn" type="text" name="newTag" id="newTag" class="form-control" value=""></td>
				<td></td>
				<td><button class="btn btn-primary">Create a new Tag</button></td>
			</tr>
			</form>
			@foreach ($allTags as $key => $tag)
				<tr class="font-weight-bold bg-labsGreen">
					<td>{{$key+1}}</td>
					<td>{{$tag->name}}</td>
					<td>
						@if ($tag->validation == 1)
							yes
						@else
							no
						@endif
					</td>
					<td>
                        <a  class="btn btn-danger" href="{{route ('deleteTags', $tag->id)}}">Delete</a>
						@if ($tag->validation == 0)
						<a class="btn btn-success" href="{{route ('validateTags', $tag->id)}}">Validate</a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop