@extends('layouts.app')

@section('content')
  
@include('includes.header')
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t">
<h1>Videos</h1>
<p class="subtitle">All of the videos from LatinTutorial to browse, search, and filter.</p>
</div></div>

</div>
<div class="container m-y">
<div class="col-md-12">
<div class="text-right">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Sort <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?sort=newest">Newest to Oldest</a></li>
            <li><a href="?sort=oldest">Oldest to Newest</a></li>
            <li class="divider"></li>
            <li><a href="?sort=most_views">Most Views</a></li>
            <li><a href="?sort=fewest_views">Fewest Views</a></li>
          </ul>
        </div>
</div>
<div class="m-y col-md-10 col-md-offset-1" id="pjax-container">
	@if (isset($sortedBy))
	<p class="video-description text-right">Sorted by {{ $sortedBy }}</p>
	@endif
@foreach($videos as $video)
	<div class="m-y">
	        <a href="{{ url('videos', $video->url_slug) }}" class="no-decoration-link">
			    <div class="media" >    
				    <div class="media-left col-xs-12 text-center hidden-sm hidden-md hidden-lg hidden-xl">
			            <img src="https://i.ytimg.com/vi/{{ $video->youtube_id }}/mqdefault.jpg" class="media-object thumbnail small-thumbnail-width" alt="videothumb">
				    </div>
				    <div class="media-left hidden-xs">
			            <img src="https://i.ytimg.com/vi/{{ $video->youtube_id }}/mqdefault.jpg" class="media-object thumbnail medium-thumbnail-width" alt="videothumb">
				    </div>
					<div class="media-body">
						<h4 class="media-heading">{{ $video->title }}</h4>
						<p>{{ $video->description }}</p>
						<p>@foreach ($video->tags->sortBy('name') as $tag) <span class="label label-primary">{{ $tag->name }}</span> @endforeach</p>
						
					</div>
			    </div>
					</a>
	</div>
					@endforeach
	<div class="pagination-container text-center m-t">{!! $videos->appends(['sort' => $sort])->links() !!}</div>

</div>


</div>
</div>

<script type="text/javascript">
	$(document).pjax('a', '#pjax-container');
</script>
@stop