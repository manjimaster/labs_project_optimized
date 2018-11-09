<!-- Intro Section -->

<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="/storage/images/modified/big-logo.png" alt="">
            @foreach ($textsContent as $text)
                @if($text->uses=='1a')
                    {!! $text->content !!}
                @endif
            @endforeach
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carouselContent as $text)
        <div class="item  hero-item" data-bg="/storage/images/modified/{{$text->image_url}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->

<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($randomServices as $randomService)
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{$randomService->icon}}"></i>
                        </div>
                        <h2>{{$randomService->name}}</h2>
                        <p>{{$randomService->content}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About content -->
    <div class="about-contant">
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
            <div class="text-center mt60">
                <a href="{{route("blog")}}" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <img src="/storage/images/modified/video.jpg" alt="">
                        @foreach ($linksContent as $link)
                            @if($link->uses=='1a')
                                <a href="{{$link->content}}" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->

<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <div class="section-title left">
                    @foreach ($textsContent as $text)
                    @if($text->uses=='1c')
                    {!! $text->content !!}
                    @endif
                    @endforeach
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    @foreach ($testimonialsContent as $testimonial)
                    {{-- {{dd($testimonial->testimonial_images->image_url_1)}} --}}
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{$testimonial->content}}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="/storage/images/modified/avatar/{{$testimonial->testimonial_images->image_url_1}}"
                                    alt="">
                            </div>
                            <div class="client-name">
                                <h2>{{$testimonial->name}}</h2>
                                <p>{{$testimonial->position}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->


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
        <a href="{{route('services')}}" class="site-btn">Browse</a>
    </div>
</div>
<!-- services section end -->


<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>
                @foreach ($textsContent as $text)
                    @if($text->uses=='1ep1')
                        {!! $text->content !!}
                    @endif
                @endforeach
                <span>
                @foreach ($textsContent as $text)
                    @if($text->uses=='1esp')
                        {!! $text->content !!}
                    @endif
                @endforeach
                </span>
                @foreach ($textsContent as $text)
                    @if($text->uses=='1ep2')
                        {!! $text->content !!}
                    @endif
                @endforeach
            </h2>
        </div>
        <div class="row">
            @foreach ($randomTeamUsers as $key => $randomUser)
                @if ($key==1)
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="/storage/images/modified/team/{{$permanentTeamMember->users_images->image_url_1}}" alt="">
                            <h2>{{$permanentTeamMember->firstName}} {{$permanentTeamMember->lastName}}</h2>
                            <h3>{{$permanentTeamMember->positions->name}}</h3>
                        </div>  
                    </div>
                @endif
            <div class="col-sm-4">
                <div class="member">
                    <img src="/storage/images/modified/team/{{$randomUser->users_images->image_url_1}}" alt="">
                    <h2>{{$randomUser->firstName}} {{$randomUser->lastName}}</h2>
                    <h3>{{$randomUser->positions->name}}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->


<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @foreach ($textsContent as $text)
                    @if($text->uses=='1f')
                        {!! $text->content !!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="{{route('services')}}#6projects" class="site-btn btn-2">Browse</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->
