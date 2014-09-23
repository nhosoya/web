@extends('layout')
 
@section('content')
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div>
				<img src="/images/naoto.jpg" alt="naoto" class="img-rounded img-responsive comment-avator">
			</div>
			<div>
				{{ $user->name }}
			</div>
			<table class="table">
				<tbody>
					<tr>
						<td>
							Age
						</td>
						<td>
							{{ (int)((date('Ymd') - date('Ymd', strtotime($user->birth))) / 10000) }}
						</td>
					</tr>
					<tr>
						<td>
							Gender
						</td>
						<td>
							@if ($user->gender === 0)
								male
							@elseif ($user->gender === 1)
								female
							@endif
						</td>
					</tr>
					<tr>
						<td>
							Nationality
						</td>
						<td>
							{{ $user->nationality }}
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-8">
			activity
			<div>
				<a href="/user" class="btn btn-success">user list</a>
			</div>
			<div class="btn-coach">
				@if ($user->coach === 1)
					<button type="button" class="btn btn-success btn-lg">Coach</button>
				@endif
			</div>
		</div>
	</div>
@stop