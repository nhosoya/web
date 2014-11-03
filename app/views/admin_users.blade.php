@extends('layout')
 
@section('content')
<div>
	<div class="btn-admin-back">
		<a href="/admin" class="btn btn-default">back</a>
	</div>
	<div class="btn-admin-create">
		<div href="/admin/user/create" class="btn btn-primary">create</a>
	</div>
</div>
<table class="table table-striped">
	<thread>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>email</th>
			<th>birth</th>
			<th>gender</th>
			<th>nationality</th>
			<th>coach</th>
			<th>role</th>
			<th></th>
			<th></th>
		</tr>
	</thread>
	<tbody class="tbody-users">
    @foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->birth }}</td>
			<td>{{ $user->gender }}</td>
			<td>{{ $user->nationality }}</td>
			<td>{{ $user->coach }}</td>
			<td>{{ $user->role }}</td>
			<td>
				<div>
					<a href="/admin/user/{{ $user->id }}/edit" class="btn btn-info">edit</a>
				</div>
			</td>
			<td>
				<div>
					<a href="#" class="btn btn-danger">delete</a>
				</div>
			</td>
		</tr>
    @endforeach
	</tbody>
</table>
@stop
