@extends('layouts.app')

@section('content')
  
@include('includes.header')
<div class="container">
	<div class="col-md-12">
<h1>Search</h1>
<p class="subtitle">Search all of the videos.</p>
</div></div>


</div>
<div class="container m-y">
<div class="col-md-12">
	<div class="text-center">
		<h1>Search</h1>
	</div>
<div id="search">
<div class="m-y col-md-10 col-md-offset-1">
		<input type="text" class="form-control" placeholder="Search..." v-model="query" v-on:keyup.enter="search">
</div>
<div class="m-y col-md-10 col-md-offset-1">
	<ul class="list-group">
		<article v-for="video in videos" class="m-b">
			<a href="videos/@{{ video.url_slug }}" class="no-decoration-link">
				<h4>@{{{ video._highlightResult.title.value }}}</h4>
				<p class="col-md-offset-1">@{{{ video._highlightResult.description.value }}}<br><span v-for="tag in video.tags" class="label label-primary margin-right-small">@{{ tag.name }} </span></p>
			</a>
		</article>
	</ul>
</div>
</div>

</div>
</div>

<script src="//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js"></script>
<script>
	new Vue({
		
		el: '#search',
		
		data: { query: '', videos: [] },
				
		ready: function() {
				this.client = algoliasearch("9Z7M16OCMA", "c7895ec0f4c7130802975a8b4e451e9d");
				this.index = this.client.initIndex('videos');

		},		
				
		methods: {
			search: function() {
				
				this.index.search(this.query, function(error, results) {
					this.videos = results.hits;
				}.bind(this));
			}
		}
		
	});
	
</script>
@stop