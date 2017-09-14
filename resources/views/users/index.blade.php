@extends("layouts.app");

@section("content")
<ul>
	@foreach($users as $user)
	  <li>
	    <h2>{{ $user->name }}</h2>
	    <div class="well">
	    	@foreach($user->posts as $post)
	    	<strong>{{ $post->title }}</strong>
	    	@endforeach
	    </div>
	  </li>
	@endforeach
</ul>
@endsection