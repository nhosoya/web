@extends('toplayout')

@section('content')
@if ( Auth::guest() )

	{{ Form::open() }}
		{{ Form::token() }}
		<p>
			{{ Form::label('email', 'email：') }}
			@if($errors->has('email'))
				<p class="error-message">{{ $errors->first('email') }}</p>
			@endif
			{{ Form::text('email', Input::old('email', '')) }}
		</p>
		<p>
			{{ Form::label('password', 'password：') }}
			@if($errors->has('password'))
				<p class="error-message">{{ $errors->first('password') }}</p>
			@endif
			{{ Form::password('password') }}
		</p>
		<p>
			{{ Form::checkbox('remember', '1') }}
			{{ Form::label('remember', 'remember me') }}
		</p>
		<p>
			{{ Form::submit('login') }}
		</p>
	{{ Form::close() }}

	<div>
		<a href="/register" class="btn btn-default">sign up</a>
	</div>

@else
	ログイン済みです
@endif

@stop
