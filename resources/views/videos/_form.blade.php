<div class="form-group">
	{!! Form::label('title', 'Video Title: ') !!}
	
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">
	{!! Form::label('youtube_id', 'YouTube ID: ') !!}
	
	{!! Form::text('youtube_id', null, ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">
	{!! Form::label('url_slug', 'URL Slug: ') !!}
	
	{!! Form::text('url_slug', null, ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">
	{!! Form::label('length', 'Video Length: ') !!}
	
	{!! Form::text('length', null, ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">
	{!! Form::label('description', 'Description: ') !!}
	
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">
	{!! Form::label('published_at', 'Published At: ') !!}
	
	{!! Form::text('published_at', $published_at, ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">
	
	{!! Form::label('tag_list', 'Tags: ') !!}
	
	{!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple', 'id' => 'tag_list']) !!}
	
</div>

<div class="form-group">
	
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	
</div>

@section('footer')

<script src="{{ asset('/js/select2.js') }}"></script>

<script type="text/javascript">
  $('#tag_list').select2({
	  placeholder: 'Choose a tag',
	  tags: true,
  });
</script>

@endsection