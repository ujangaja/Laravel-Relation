<h3>Daftar User</h3>
<ul>
@foreach($lesson->users as $user)
	<li>{{ $user->name}}</li>
@endforeach
</ul>