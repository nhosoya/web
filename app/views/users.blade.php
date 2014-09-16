@extends('layout')
 
@section('content')
	<table class="table table-striped">
		<thread>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Birth</th>
				<th>Gender</th>
				<th>Nationality</th>
				<th>Coach</th>
			</tr>
		</thread>
		<tbody>
	    @foreach($users as $user)
	    	<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->birth }}</td>
				<td>{{ $user->gender }}</td>
				<td>{{ $user->nationality }}</td>
				<td>{{ $user->coach }}</td>
	    	</tr>
	    @endforeach
		</tbody>
	</table>
@stop