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
		<p><a href="{{ url('videos') }}">Videos</a> > Create</p>
	</div>
</div>
<div class="container">
	<div class="m-y text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
		{!! Form::open(array('action' => 'VideoController@store')) !!}
		
		@include('videos._form', ['submitButtonText' => 'Create Video', 'published_at' => Carbon\Carbon::now()])
		
		{!! Form::close() !!}
		
		@include('errors.list')
	</div>
</div>
@stop