@extends('toplayout')

@section('content')
<div class="front-bg">
	<img src="images/front.jpg" alt="front" class="front-image">
</div>

<div class="front-card">
	<div class="login-form">
		{{ Form::open() }}
			{{ Form::token() }}
			<p>
				{{ Form::email('email', null, array('placeholder' => 'email')) }}
			</p>
			<p>
				{{ Form::password('password', array('placeholder' => 'password')) }}
			</p>
			<p>
				{{ Form::checkbox('remember', '1') }}
				{{ Form::label('remember', 'remember me') }}
			</p>
			<p>
				{{ Form::submit('login', array('class' => 'btn btn-primary')) }}
			</p>
		{{ Form::close() }}
	</div>

	<div class="register-form">
		{{ Form::open(array('url' => 'register')) }}
			<p>
				{{ Form::text('username', null, array('placeholder' => 'username')) }}
			</p>
			<p>
				{{ Form::email('email', null, array('placeholder' => 'email')) }}
			</p>
			<p>
				{{ Form::password('password', array('placeholder' => 'password')) }}
			</p>
			<p>
				{{ Form::submit('sign up', array('class' => 'btn btn-warning')) }}
			</p>
		{{ Form::close() }}
	</div>
</div>

@stop
