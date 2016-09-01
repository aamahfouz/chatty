<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{route('home')}}">Chatty</a>
		</div>
		<div class="collapse navbar-collapse">
			@if (Auth::check())
			<ul class="nav navbar-nav">
				<li><a href="#">Timeline</a></li>
				<li><a href="#">Friends</a></li>
			</ul>
			<form action="#" class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input class="form-control" type="text" name="query" placeholder="Find People"></input>					
				</div>
				<button class="btn btn-default" type="submit">Search</button>
			</form>		
		@endif
		<ul class="nav navbar-nav navbar-right">
			@if (Auth::check())
			<li><a href="#">{{ Auth::user()->getNameOrUsername() }}
			</a></li>
			<li><a href="#">Update profile</a></li>
			<li><a href="{{ route('auth.signout') }}">Sign out</a></li>
			@else
			<li><a href="{{ route('auth.signup') }}">Sign up</a></li>
			<li><a href="{{ route('auth.signin') }}">Sign in</a></li>
			@endif
		</ul>
		</div>
	</div>
</nav>