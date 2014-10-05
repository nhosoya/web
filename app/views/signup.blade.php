@extends('toplayout')

@section('content')
@if ( Auth::guest() )

	{{ Form::open(array('url' => 'register')) }}
		<p>
			{{ Form::label('username', 'username：') }}
			{{ Form::text('username') }}
		</p>
		<p>
			{{ Form::label('email', 'email：') }}
			{{ Form::email('email') }}
		</p>
		<p>
			{{ Form::label('password', 'password：') }}
			{{ Form::password('password') }}
		</p>
		<p>
			{{ Form::submit('sign up', array('class' => 'btn btn-default')) }}
		</p>
	{{ Form::close() }}

	<div>
		<a href="/" class="btn btn-default">back</a>
	</div>

@else
	ログイン済みです
@endif

@stop
