<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="{{route('index')}}">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- Services section -->
	<div id="services" class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>
					@foreach ($textsContent as $text)
						@if($text->uses=='1dp1')
							{!! $text->content !!}
						@endif
					@endforeach
					<span>
					@foreach ($textsContent as $text)
						@if($text->uses=='1dsp')
							{!! $text->content !!}
						@endif
					@endforeach
					</span>
					@foreach ($textsContent as $text)
						@if($text->uses=='1dp2')
							{!! $text->content !!}
						@endif
					@endforeach
				</h2>
			</div>
			@foreach ($servicesContent->chunk(3) as $chunk)
			<div class="row">
				@foreach ($chunk as $service)
				<!-- single service -->
				<div class="col-md-4 col-sm-6 mx-auto">
					<div class="service">
						<div class="icon">
							<i class="{{$service->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$service->name}}</h2>
							<p>{{$service->content}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			@endforeach
			<div class="text-center m-3">
				{{-- @if ($servicesContent->onFirstPage())
					<span class="page-numbers prev inactive">@lang('pagination.previous')</span>
					@else
					<a href="{{ $servicesContent->previousPageUrl('#services') }}" class="page-numbers prev" rel="prev">@lang('pagination.previous')</a>
					@endif
					@if ($servicesContent->hasMorePages())
					<a href="{{ $servicesContent->nextPageUrl('#services') }}" class="page-numbers next" rel="next">@lang('pagination.next')</a>
					@else
					<span class="page-numbers next inactive">@lang('pagination.next')</span>
					@endif --}}
					{{-- {{$servicesContent->links()}} --}}
					@if ($servicesContent->onFirstPage())
					{{-- <p class="disabled"><a href="#">&laquo;</a></p> --}}
					@else
						<a class="btn btn-labsGreen text-labsPurple" href="/index?page=1#services" rel="prev"  role="button">&laquo;</a>
					@endif

					@for ($i = 1; $i < $nbrServicesPages+1; $i++)
						@if ($servicesContent->currentPage() != $i)
							<a class="btn btn-labsGreen text-labsPurple" href="/index?page={{$i}}#services"  role="button">{{$i}}</a>
						@endif
					@endfor

					{{-- @if ($servicesContent->currentPage() != $servicesContent->lastPage())
						<a class="btn btn-labsGreen text-labsPurple" href="/index?page={{$servicesContent->lastPage()}}#services"  role="button">{{$servicesContent->lastPage()}}</a>
					@endif --}}

					@if ($servicesContent->hasMorePages())
						<a class="btn btn-labsGreen text-labsPurple" href="/index?page={{$servicesContent->lastPage()}}#services" rel="next"  role="button">&raquo;</a>
					@else
						{{-- <p class="disabled"><a href="#">&raquo;</a></p> --}}
					@endif
			</div>

		</div>
		<div class="text-center">
			<a href="" class="site-btn">Browse</a>
		</div>
	</div>
<!-- services section end -->


	<!-- features section -->
	<div id="6projects" class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
                <h2>
                    @foreach ($textsContent as $text)
                        @if($text->uses=='1bp1')
                            {!! $text->content !!}
                        @endif
                    @endforeach
                    <span>
                    @foreach ($textsContent as $text)
                        @if($text->uses=='1bsp')
                            {!! $text->content !!}
                        @endif
                    @endforeach
                    </span>
                    @foreach ($textsContent as $text)
                        @if($text->uses=='1bp2')
                            {!! $text->content !!}
                        @endif
                    @endforeach
                </h2>
			</div>
			<div id="6projects" class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
				@foreach ($lastSixProjects as $key => $item)
					@if ($key>2)
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$item->name}}</h2>
								<p>{{$item->content}}</p>
							</div>
							<div class="icon">
							<i class="{{$item->icon}}"></i>
							</div>
						</div>		
					@endif
					@if ($key==3)
						</div>
						<!-- Devices -->
						<div class="col-md-4 col-sm-4 devices">
							<div class="text-center">
								<img src="/storage/images/modified/device.png" alt="">
							</div>
						</div>
						<!-- feature item -->
						<div class="col-md-4 col-sm-4 features">
					@endif
					@if ($key<3)
						<div class="icon-box light">
							<div class="icon">
								<i class="{{$item->icon}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$item->name}}</h2>
								<p>{{$item->content}}</p>
							</div>
						</div>
					@endif
				@endforeach
				</div>
				
			</div>
			<div class="text-center mt100">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				@foreach ($lastThreeProjects as $key => $item)
					<!-- Single Card -->
					<div class="col-md-4 col-sm-6">
						<div class="sv-card">
							<div class="card-img">
								{{-- {{dd($item->)}} --}}
								<img src="/storage/images/modified/{{$item->projects_images->image_url_1}}" alt="">
							</div>
							<div class="card-text">
								<h2>{{$item->name}}</h2>
								<p>{{$item->content}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->