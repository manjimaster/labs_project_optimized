<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="/storage/images/modified/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="{{ (\Request::route()->getName() == 'index') ? 'active' : '' }}">
					<a href="{{route('index')}}">Home</a>
				</li>
				<li class="{{ (\Request::route()->getName() == 'services') ? 'active' : '' }}">
					<a href="{{route('services')}}">Services</a>
				</li>
				<li class="{{ (\Request::route()->getName() == 'blog') ? 'active' : '' }}">
					<a href="{{route('blog')}}">Blog</a>
				</li>
				<li class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}">
					<a href="{{route('contact')}}">Contact</a>
				</li>
				@guest
					<li>
						<a href="/login">Log In</a>
					</li>
				@endguest
				@auth
					<li>
						<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ trans('adminlte::adminlte.log_out') }} </a>
						<form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
							@if(config('adminlte.logout_method'))
								{{ method_field(config('adminlte.logout_method')) }}
							@endif
								{{ csrf_field() }}
						</form>
					</li>
				@endauth
				@auth
					<li>
						<a class="bg-danger" href="{{route('home')}}">Club <i class="fas fa-globe"></i></a>
					</li>
				@endauth
			</ul>
		</nav>
	</header>
	<!-- Header section end -->