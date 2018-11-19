@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>Edit my article</h1>
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
    <form action="{{route('createPersonalArticles')}}" method="post" enctype="multipart/form-data">
	@csrf
    <!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="blog-posts">
				<!-- Single Post -->
				<div class="single-post">
						<div class="post-thumbnail">
							<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's front image : </label><br>
							<input class="btn my-3" type="file" name="newImage" id="newImage" value="">
						</div>
						<div class="post-content"><label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's title : </label><br>
                    		<input class="btn my-3" type="text" name="newTitle" id="newTitle" class="form-control" value="{{old('newTitle')}}">
							<h2 class="post-title"></h2>
							<div class="post-meta">
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's tags : </label>
								<br>
								@foreach ($tags as $key => $tag)
									@if ($tag->validation == 1)
										<input type="checkbox" name="tag{{$key}}" id="" value="1"> 
										<label>{{$tag->name}}</label>
									@endif
									@if ($tag->validation == 0)
										<input type="checkbox" name="tag{{$key}}" id="" value="1"> 
										<label class="text-danger">{{$tag->name}}</label>
									@endif
								@endforeach
								<button class="btn btn-labsPurple mx-3 my-2 js-toggle2" type="button">+</button>
		                        <input class="btn my-2 slidedown2 d-none" type="text" name="newTag" id="newTag" value="{{old('newTag')}}">
							</div>
							<div class="post-meta">
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's categories : </label>
								<br>
								@foreach ($categories as $key => $categorie)
									@if ($categorie->validation == 1)
										<input type="checkbox" name="cat{{$key}}" id="" value="1"> 
										<label>{{$categorie->name}}</label>
									@endif
									@if ($categorie->validation == 0)
										<input type="checkbox" name="cat{{$key}}" id="" value="1"> 
										<label class="text-danger">{{$categorie->name}}</label>
									@endif
								@endforeach
								<button class="btn btn-labsPurple mx-3 my-2 js-toggle" type="button">+</button>
		                        <input class="btn my-2 slidedown d-none" type="text" name="newCategorie" id="newCategorie" value="{{old('newCategorie')}}">
                            </div>
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's intro : </label>
								<br>
                            <textarea name="previewContent" id="previewContent" rows="10" cols="80">
                                {{old('previewContent')}}
                            </textarea>
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's content : </label>
								<br>
                            <textarea name="fullContent" id="fullContent" rows="10" cols="80">
                                {{old('fullContent')}}
                            </textarea>
						</div>
						<!-- Post Author -->
						<button class="btn btn-primary btn-block my-3" type="submit">Submit article</button>
					<!-- page section end-->
				</div>
			</div>
		</div>
	</div>
	</form>
@stop