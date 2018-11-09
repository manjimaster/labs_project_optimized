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
				@auth
					<li>
						<a class="bg-danger" href="{{route('home')}}">Admin</a>
					</li>
				@endauth
			</ul>
		</nav>
	</header>
	<!-- Header section end -->