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
			{{ Form::submit('login') }}
		</p>
	{{ Form::close() }}

@else
	ログイン済みです
@endif