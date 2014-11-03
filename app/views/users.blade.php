@extends('layout')
 
@section('content')
<script>
jQuery(function($) {
  $('tr[data-href]').addClass('clickable')
    .click(function(e) {
      if(!$(e.target).is('a')){
        window.location = $(e.target).closest('tr').data('href');
      };
  });
});
</script>
<table class="table table-striped table-hover">
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
	<tbody class="tbody-users">
    @foreach($users as $user)
		<tr data-href="/user/{{ $user->id }}">
			<td>{{ $user->id }}</td>
			<td>{{ $user->username }}</td>
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
