<!-- Footer section -->
	<footer class="footer-section">
		<h2>
			@foreach ($textsContent as $text)
				@if($text->uses=='footer')
					{!! $text->content_p1 !!}
				@endif
			@endforeach
			<a href="{{$footerLink}}" target="_blank"> 
				@foreach ($textsContent as $text)
					@if($text->uses=='footerLink')
						{!! $text->content_p1 !!}
					@endif
				@endforeach
			</a> 
		</h2>
                
	</footer>
	<!-- Footer section end -->