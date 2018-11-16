<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
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
								@foreach ($article->tags as $tag)
									@if ($tag->validation == 1)
										<a href="">{{$tag->name}}</a>
									@endif
								@endforeach
								<a href="#comments">{{$article->comments->where('validation', 1)->count()}} Comments</a>
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
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class" action="{{route('writeCommentOnBlogPost', $article->id)}}" method="post">
									@csrf
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="content" placeholder="Message"></textarea>
											<button class="site-btn" type="submit">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categoriesContent as $category)
								<li><a href="#">{{$category->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							@foreach ($instagramContent as $instagram)
								<li><img src="/storage/images/modified/instagram/{{$instagram->image_url}}" alt=""></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tagsContent as $tag)
								<li><a href="#">{{$tag->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>
								@foreach ($textsContent as $quote)
									@if ($quote->uses == 'quote')
										{{$quote->content}}
									@endif
								@endforeach
							</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="/storage/images/modified/add.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->