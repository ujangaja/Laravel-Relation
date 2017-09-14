<h3>Daftar User</h3>
<ul>
@foreach($lesson->users as $user)
	<li>{{ $user->name}}</li>
@endforeach
</ul>


<h3>Jumlah Like: {{$lesson->likes->count()}}</h3>


<h3>Daftar Tag</h3>
<ul>
@foreach($lesson->tags as $tag)
	<li>{{ $tag->name}}</li>
@endforeach
</ul>