@extends('layouts.app')

@section('content')
  
@include('includes.header')
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t">
<h1>Edit Video</h1>
</div></div>

</div>
<div class="container">
	<div class="m-y text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<p><a href="{{ url('videos') }}">Videos</a> > <a href="{{ url('/videos', $video->url_slug) }}">{{ $video->title }}</a> > Edit</p>
	</div>
</div>
<div class="container">
	<div class="m-y text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
		{!! Form::model($video, ['method' => 'PATCH', 'url' => 'videos/' . $video->url_slug]) !!}
		
		@include('videos._form', ['submitButtonText' => 'Update Video', 'published_at' => $video->published_at])
		
		{!! Form::close() !!}
		
		@include('errors.list')
	</div>
</div>
@stop