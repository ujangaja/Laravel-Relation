<h1>Halo{{ $user->name }} || no.passportnya {{$user->passport->no_pass}}</h1>


<h3>Daftar Forum</h3>
<ul>
@foreach($user->forums as $forum)
	<li>{{ $forum->title}}</li>
@endforeach
</ul>