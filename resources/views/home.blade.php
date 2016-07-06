@extends('layouts.app')

@section('content')
  
@include('includes._mobilenavbar')

<div class="stage" id="stage">

<div class="block block-inverse block-fill-height app-header"
     style="background-image: url({{ asset('/img/colosseum.jpg') }});">

@include('includes._navbar')

  <div class="block-xs-middle p-b-lg">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-12 text-center">
          <h1 class="block-title m-b-sm" >Making Latin Make Sense</h1>
          <p class="lead m-b-md text-muted text-center white-text">Latin doesn't have to be hard. I make it easier with video tutorials and other interactive tools.</p>
          <a class="btn btn-primary btn-lg" href="{{ url('videos') }}">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block-secondary app-iphone-block">
  <div class="container">
    <div class="row ">
      <div class="col-sm-12 col-md-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->youtube_id }}"></iframe>
		</div>
      </div>

      <div class="col-sm-12 col-md-6 col-xs-12">
	    <h6 class="text-muted text-uppercase">Latest Video</h6>
	    <a href="{{ url('videos', $video->url_slug) }}" class="no-decoration-link">
        <h3 class="m-t-0">{{ $video->title }}</h3>
        <p class="lead m-b-md">{{ $video->description }}</p>
        <p class="lead">@foreach ($video->tags->sortBy('name') as $tag) <a href="{{ url('topics', $tag->url_slug) }}"  class="no-decoration-link"><span class="label label-primary">{{ $tag->name }}</span></a> @endforeach</p>
      </a>
      </div>
    </div>

  </div>
</div>
<div class="spacer-100"></div>

<div class="block block-inverse block-secondary app-code-block">
  <div class="container">
    <div class="row app-align-center">
      <div class="col-sm-6">
        <h6 class="text-muted text-uppercase">Video Topics</h6>
        <h3 class="m-t-0">Check out all of the videos in a specific area.</h3>
        <p class="lead m-b-md text-muted">Rather than search through the whole library of videos, you can check out all of the videos on an individual topic.</p>
        <a href="{{ url('topics') }}"><button class="btn btn-default btn-lg btn-borderless">View All Topics</button></a>
      </div>
            <div class="col-sm-5 text-center col-xs-12 m-t">
	      @foreach ($topics as $topic)
	      	<div class="col-sm-6"><h4><a href="{{ url('topics', $topic->url_slug) }}" class="no-decoration-link">{{ $topic->name }}</a></h4></div>
	      @endforeach
      </div>

    </div>
  </div>
</div>

<div class="block block-secondary app-block-marketing-grid">
  <div class="container text-center">

    <div class="row m-b-lg">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
        <h6 class="text-muted text-uppercase">Making Latin Make Sense</h6>
        <h3  class="m-t-0 m-b">There are a lot of different ways you can use the videos on this site.</h3>
      </div>
    </div>

    <div class="row app-marketing-grid">
      <div class="col-sm-4 p-x-md m-b-lg">
        <span class="icon icon-language icon-size"></span>
        <p><strong>Learn</strong> Use LatinTutorial as your first exposure to Latin grammatical topics.</p>
      </div>
      <div class="col-sm-4 p-x-md m-b-lg">
        <span class="icon icon-loop icon-size"></span>
        <p><strong>Review</strong> Brush up on what you already know when you prepare for tests or readings.</p>
      </div>
      <div class="col-sm-4 p-x-md m-b-lg">
        <span class="icon icon-flow-tree icon-size"></span>
        <p><strong>Extend</strong> Go beyond just the grammar and learn about how interesting classical civilization truly is.</p>
      </div>
    </div>

  </div>
</div>

@stop