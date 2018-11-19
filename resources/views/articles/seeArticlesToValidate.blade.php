@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
    <h1>My articles</h1>
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
    <!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="blog-posts">
				<!-- Single Post -->
				<div class="single-post">
					@foreach ($articlesContent as $key => $article)
						<div class="post-thumbnail">
							<img src="/storage/images/modified/blog/{{$article->article_images->image_url_1}}" alt="">
							<div class="post-date">
								<h2>{{$article->created_at->format('d')}}</h2>
								<h3>{{$article->created_at->format('M')}} {{$article->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->title}}</h2>
							<div class="post-meta">
								<a href="">{{$article->users->lastName}} {{$article->users->firstName}}</a>
								{{-- {{dd($article->tags)}} --}}
								@foreach ($article->tags as $tag)
									@if ($tag->validation == 1)
										<a href="">{{$tag->name}}</a>
									@endif
									@if ($tag->validation == 0)
										<a class="text-danger" href="">{{$tag->name}}</a>
									@endif
								@endforeach
								<a href="#comments">{{$article->comments->where('validation', 1)->count()}} Comments</a>
							</div>
							<div class="post-meta">
								@foreach ($article->categories as $key => $categorie)
									@if ($categorie->validation == 1)
										<a href="">{{$categorie->name}}</a>
									@endif
									@if ($categorie->validation == 0)
										<a class="text-danger" href="">{{$categorie->name}}</a>
									@endif
								@endforeach
                            </div>
							<p>{!! $article->preview_content !!}</p>
							<p>{!! $article->full_content !!}</p>
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
						<a class="btn btn-success btn-block" href="{{route ('validateArticle', $article->id)}}">Validate article</a>
						<!-- Post Comments -->
						<div id="comments" class="comments">
							<h2>Comments {{$article->comments->where('validation', 1)->count()}}</h2>
							<ul class="comment-list">
								@foreach ($article->comments as $comment)
									@if ($comment->validation == 1)
										<li>
											<div class="avatar">
												@if ($comment->user_id != null)
													<img src="/storage/images/modified/team/{{$comment->image}}" alt="">
												@else
													<img src="/storage/images/modified/avatar/{{$comment->image}}" alt="">
												@endif
											</div>
											<div class="commetn-text">
												<h3>{{$comment->name}} | {{$article->created_at->format('d')}} {{$article->created_at->format('M')}}, {{$article->created_at->format('Y')}} | Reply</h3>
												<p>{{$comment->content}}</p>
											</div>
										</li>
									@endif
								@endforeach
							</ul>
						</div>
					@endforeach
					<!-- page section end-->
					<!-- Pagination -->
					<div class="page-pagination">
						@if ($articlesContent->onFirstPage())
						{{-- <p class="disabled"><a href="#">&laquo;</a></p> --}}
						@else
						<a class="btn btn-labsGreen text-labsPurple" href="{{url()->current()}}/?page=1" rel="prev"  role="button">&laquo;</a>
						@endif
						
						@for ($i = 1; $i < $nbrArticlesPages+1; $i++)
						@if ($articlesContent->currentPage() != $i)
						<a class="btn btn-labsGreen text-labsPurple" href="{{url()->current()}}/?page={{$i}}"  role="button">{{$i}}</a>
						@endif
						@endfor
						
						@if ($articlesContent->hasMorePages())
						<a class="btn btn-labsGreen text-labsPurple" href="{{url()->current()}}/?page={{$articlesContent->lastPage()}}" rel="next"  role="button">&raquo;</a>
						@else
						{{-- <p class="disabled"><a href="#">&raquo;</a></p> --}}
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@stop