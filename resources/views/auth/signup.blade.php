@extends('templates.default')

@section('content')
	<div class="row">
		<div class="col-lg-6">
			<form class="form-vertical" role="form" method="post" action="{{ route('auth.signup') }}">
				<div class="form-group">
					<label for="email" class="control-label">Your email address</label>
					<input type="text" name="email" id="email" class="form-control" value=""></input>			
				</div>
				<div class="form-group">
						<label for="username" class="control-label">Choose a username</label>
						<input type="text" name="username" id="username" class="form-control" value=""></input>	
				</div>
				<div class="form-group">
						<label for="password" class="control-label">Choose a password</label>
						<input type="password" name="password" id="password" class="form-control" value=""></input>	
				</div>
				<div class="form-group">
						<button class="btn btn-default" type="submit">Sign up</button>
				</div>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
@stop