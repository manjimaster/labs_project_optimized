@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
<h1>Comments to validate</h1>
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
<div id="comments" class="comments">
    @foreach ($commentsContent as $key => $comment)
	<!-- Post Comments -->
	<div class="border rounded border-dark p-2 my-2">
		<div class="avatar">
			@if ($comment->user_id != null)
				<img src="/storage/images/modified/team/{{$comment->image}}" alt="">
			@else
				<img src="/storage/images/modified/avatar/{{$comment->image}}" alt="">
			@endif
		</div>
		<div class="comment-text">
			<h3>{{$comment->name}} | {{$comment->created_at->format('d')}} {{$comment->created_at->format('M')}}, {{$comment->created_at->format('Y')}} | Reply</h3>
			<p>{{$comment->content}}</p>
		</div>
		<a class="btn btn-success" href="{{route ('validateComment', $comment->id)}}">Validate comment</a>
	</div>
    @endforeach
    <!-- Pagination -->
    <div class="page-pagination">
        @if ($commentsContent->onFirstPage())
        	{{-- <p class="disabled"><a href="#">&laquo;</a></p> --}}
        @else
        	<a class="btn btn-labsGreen text-labsPurple" href="{{url()->current()}}/?page=1" rel="prev" role="button">&laquo;</a>
        @endif

		@for ($i = 1; $i < $nbrCommentsPages+1; $i++) 
			@if ($commentsContent->currentPage() != $i)
            	<a class="btn btn-labsGreen text-labsPurple" href="{{url()->current()}}/?page={{$i}}" role="button">{{$i}}</a>
            @endif
		@endfor

		@if ($commentsContent->hasMorePages())
            <a class="btn btn-labsGreen text-labsPurple" href="{{url()->current()}}/?page={{$commentsContent->lastPage()}}" rel="next" role="button">&raquo;</a>
		@else
            {{-- <p class="disabled"><a href="#">&raquo;</a></p> --}}
		@endif
    </div>
</div>
@stop
