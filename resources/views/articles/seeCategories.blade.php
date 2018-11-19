@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>All categories</h1>
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
		<form action="{{route('createCategories')}}" method="post">
			@csrf
			<tr class="font-weight-bold bg-labsGreen">
				<td>0</td>
				<td><input class="btn" type="text" name="newCategorie" id="newCategorie" class="form-control" value=""></td>
				<td></td>
				<td><button class="btn btn-primary">Create a new catgorie</button></td>
			</tr>
			</form>
			@foreach ($allCategories as $key => $categorie)
				<tr class="font-weight-bold bg-labsGreen">
					<td>{{$key+1}}</td>
					<td>{{$categorie->name}}</td>
					<td>
						@if ($categorie->validation == 1)
							yes
						@else
							no
						@endif
					</td>
					<td>
                        <a  class="btn btn-danger" href="{{route ('deleteCategories', $categorie->id)}}">Delete</a>
						@if ($categorie->validation == 0)
						<a class="btn btn-success" href="{{route ('validateCategories', $categorie->id)}}">Validate</a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop