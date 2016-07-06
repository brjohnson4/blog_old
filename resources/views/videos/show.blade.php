@extends('layouts.app')

@section('content')
  
@include('includes.header')
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t">
<h1>Videos</h1>
</div></div>

</div>
<div class="container">
	<div class="m-y text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<p><a href="{{ url('videos') }}">Videos</a> > {{ $video->title }}</p>
	</div>
</div>
<div class="container">
	<div class="m-y text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h2>{{ $video->title }}</h2>
		<hr>
		@if (Auth::check())
			@if (Auth::user()->id == 1)
				<p class="text-center"><a href="{{ url('videos/' . $video->url_slug . '/edit') }}">Edit this Video</a> | <a href="{{ url('/videos') }}">Go to All Videos</a></p>
			@endif
		@endif
	</div>
	<div class="col-md-8 col-sm-12 col-xs-12 m-y">
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->youtube_id }}"></iframe>
		</div>
	</div>
	<div class="col-md-4 m-y">
		<p class="video-title">{{ $video->description }}</p>
		<p class="video-description"><b>Views:</b> {{ number_format($youtube->statistics->viewCount) }}</p>
		<p class="video-description"><b>Likes:</b> {{ number_format($youtube->statistics->likeCount) }}</p>
		@unless($video->tags->isEmpty())
			<p class="video-published"><b>Topics:</b> @foreach ($video->tags->sortBy('name') as $tag) <a href="{{ url('topics', $tag->url_slug) }}" class="no-decoration-link"><span class="label label-primary">{{ $tag->name }}</span></a> @endforeach</p>
		@endunless
		<p class="video-published">Published on {{ date( "F j, Y", strtotime($video->published_at)) }}</p>
	</div>
</div>
<div class="spacer-100"></div>
@stop