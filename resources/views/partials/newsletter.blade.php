<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" action="{{route('newsletter')}}" method="post">
						@csrf
						<input type="text" name="newNewsletter" placeholder="Your e-mail here" value="{{old('newNewsletter')}}">
						<button class="site-btn btn-2" type="submit">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->