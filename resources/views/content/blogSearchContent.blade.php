<!-- page section -->
<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
            <h1 class="py-3 pl-1 mb-4 text-light" style="background: #6a5abf;">Results for <span style="color: #2be6ab;" class="font-italic">"{{$search}}"</span><span style="font-size: 1.5rem;">  ({{count($results)}})</span></h1>
          <!-- Post item -->
          @foreach ($results as $article)
          {{-- {{dd($article)}} --}}
            <div class="post-item">
              <div class="post-thumbnail">
              <img src="{{Storage::url('public/images/modified/blog/'.$article->article_images->image_url_1)}}" alt="">
                <div class="post-date">
                  <h2>{{$article->created_at->format('d')}}</h2>
                  <h3>{{$article->created_at->format('M Y')}}</h3>
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
										<a href="">{{$article->comments->where('validation', 1)->count()}} Comments</a>
									</div>
                <p>{{$article->preview_content}}</p>
                <a href="/blogPost/{{$article->id}}" class="read-more">Read More</a>
              </div>
            </div>
          @endforeach
					<!-- Pagination -->
					<div class="page-pagination">
						@if ($results->onFirstPage())
						{{-- <p class="disabled"><a href="#">&laquo;</a></p> --}}
						@else
							<a class="btn btn-labsGreen text-labsPurple" href="/results/{{$search}}?page=1" rel="prev"  role="button">&laquo;</a>
						@endif

						@for ($i = 1; $i < $nbrArticlesPages+1; $i++)
							@if ($results->currentPage() != $i)
								<a class="btn btn-labsGreen text-labsPurple" href="/results/{{$search}}?page={{$i}}"  role="button">{{$i}}</a>
							@endif
						@endfor

						@if ($results->hasMorePages())
							<a class="btn btn-labsGreen text-labsPurple" href="/results/{{$search}}?page={{$results->lastPage()}}" rel="next"  role="button">&raquo;</a>
						@else
							{{-- <p class="disabled"><a href="#">&raquo;</a></p> --}}
						@endif
					</div>
        </div>
		<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="/search" method="post" class="search-form">
							@csrf
							<input name="search" type="text" placeholder="Search">
							<button class="search-btn" type="submit"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categoriesContent as $category)
								<li>
									<form action="/search" class="mb-0" method="post">
										@csrf
										<input type="hidden" name="search" value="{{$category->name}}">
										<a onclick="event.target.parentElement.submit();" style="cursor: pointer;">{{$category->name}}</a>
									</form>
								</li>
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
							<li>
								<form action="/search" class="mb-0" method="post">
								@csrf
								<input type="hidden" name="search" value="{{$tag->name}}">
								<a onclick="event.target.parentElement.submit();" style="cursor: pointer"> {{$tag->name}}</a>
								</form>  
							</li>
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
										{{$quote->content_p1}}
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