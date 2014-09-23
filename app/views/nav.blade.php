<!-- Static navbar -->
<!-- <div class="navbar navbar-default navbar-static-top" role="navigation"> -->
<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Spologics</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Handball <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						@foreach($sports as $sport)
        					<li><a>{{ $sport->name }}</a></li>
    					@endforeach
					</ul>
				<li><a href="#menu">Menu</a></li>
				<li><a href="/user">User</a></li>
				<li><a href="#coach">Coach</a></li>
				<li><a href="#lesson">Lesson</a></li>
				<li><a href="#profile">Profile</a></li>
				<li><a href="/logout">logout</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
