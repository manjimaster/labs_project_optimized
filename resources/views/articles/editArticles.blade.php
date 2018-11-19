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
	<form action="{{route ('updatePersonalArticles', $article->id)}}" method="post" enctype="multipart/form-data">
	@csrf
    <!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="blog-posts">
				<!-- Single Post -->
				<div class="single-post">
						<div class="post-thumbnail">
							<img src="/storage/images/modified/blog/{{$article->article_images->image_url_1}}" alt="">
							<br>
							<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's front image : </label><br>
							<input class="btn my-3" type="file" name="newImage" id="newImage" value="">
							<div class="post-date">
								<h2>{{$article->created_at->format('d')}}</h2>
								<h3>{{$article->created_at->format('M')}} {{$article->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content"><label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's title : </label><br>
                    		<input class="btn my-3" type="text" name="newTitle" id="newTitle" class="form-control" value="{{$article->title}}">
							<h2 class="post-title"></h2>
							<div class="post-meta">
								<a class="mr-3" href="">{{$article->users->lastName}} {{$article->users->firstName}}</a><br><br>
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's tags : </label><br>
								@foreach ($articleTags as $key => $tag)
									@if ($tag->validation == 1)
										<input type="checkbox" name="tag{{$key}}" id="" value="1" checked> <label>{{$tag->name}}</label>
									@endif
									@if ($tag->validation == 0)
										<input type="checkbox" name="tag{{$key}}" id="" value="1" checked> <label class="text-danger">{{$tag->name}}</label>
									@endif
								@endforeach
								<select class="btn bg-white my-2 mx-3" name="newTagSelected" data-show-icon="true">
									<option selected></option>
									@foreach ($tags as $tag)
											<option value="{{$tag->id}}">{{$tag->name}}</option>
									@endforeach
								</select>
								{{-- @foreach ($tags as $key => $tag)
									@if ($tag->validation == 1)
											@foreach ($articleTags as $articleTag)
												@if ($articleTag->id == $tag->id) 
												{
													{{$test = 'checked'}}
												}
												@endif
											@endforeach
										<input type="checkbox" name="tag{{$key}}" id="" value="1" $test><label>{{$tag->name}}</label>
									@endif
								@endforeach --}}
								<button class="btn btn-labsPurple mx-3 my-2 js-toggle2" type="button">+</button>
		                        <input class="btn my-2 slidedown2 d-none" type="text" name="newTag" id="newTag">
							</div>
							<div class="post-meta">
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's categories : </label><br>
								@foreach ($articleCategories as $key => $categorie)
									@if ($categorie->validation == 1)
										<input type="checkbox" name="cat{{$key}}" id="" value="1" checked> <label>{{$categorie->name}}</label>
									@endif
									@if ($categorie->validation == 0)
										<input type="checkbox" name="cat{{$key}}" id="" value="1" checked> <label class="text-danger">{{$categorie->name}}</label>
									@endif
								@endforeach
								<select class="btn bg-white my-2 mx-3" name="newCategorieSelected" data-show-icon="true">
                            		<option selected></option>
									@foreach ($categories as $categorie)
											<option value="{{$categorie->id}}">{{$categorie->name}}</option>
									@endforeach
								</select>
								<button class="btn btn-labsPurple mx-3 my-2 js-toggle" type="button">+</button>
		                        <input class="btn my-2 slidedown d-none" type="text" name="newCategorie" id="newCategorie">
                            </div>
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's intro : </label><br>
                            <textarea name="previewContent" id="previewContent" rows="10" cols="80">
                                {!! $article->preview_content !!}
                            </textarea>
								<label class="font-weight-bold my-2 p-2 border rounded border-labsPurple">My article's content : </label><br>
                            <textarea name="fullContent" id="fullContent" rows="10" cols="80">
                                {!! $article->full_content !!}
                            </textarea>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="/storage/images/modified/team/{{$article->users->users_images->image_url_1}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->users->lastName}} {{$article->users->firstName}}, <span>Author</span></h2>
								<p>{{$article->users->biography}}</p>
							</div>
						</div>
						</a><button class="btn btn-primary btn-block my-3" type="submit">Submit article</button>
					<!-- page section end-->
				</div>
			</div>
		</div>
	</div>
	</form>
@stop