
<h3>Daftar Tag</h3>
<ul>
@foreach($forum->tags as $tag)
	<li>{{ $tag->name}}</li>
@endforeach
</ul>