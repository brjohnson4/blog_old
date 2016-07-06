@extends('layouts.app')

@section('content')
  
@include('includes.header')
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t">
<h1>Topics</h1>
<p class="subtitle">Check out all videos on a specific topic.</p>
</div></div>

</div>
<div class="container m-y">
<div class="col-md-12">
<div class="m-y col-md-10 col-md-offset-1">
@foreach($tags as $tag)
	<div class="m-y col-md-4 col-sm-6 col-xs-12 text-center">
	        <a href="{{ url('topics', $tag->url_slug) }}" class="no-decoration-link">
				<h4 class="media-heading">{{ $tag->name }} <span class="badge">{{ $tag->videos->count() }}</span></h4>
					</a>
	</div>
					@endforeach
</div>

</div>
</div>
@stop