@unless (count($posts) == 0)
	<h2>Posts:</h2>

	@foreach ($posts as $post)
		<h3>{{ $post->title }}</h3>
		<p>{{ $post->body }}</p>
		@include('posts.partials.delete')
	@endforeach
@endif
