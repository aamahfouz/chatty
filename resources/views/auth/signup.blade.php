@extends('templates.default')

@section('content')
<h3>Sign up</h3>
	<div class="row">
		<div class="col-lg-6">
			<form class="form-vertical" role="form" method="post" action="{{ route('auth.signup') }}">
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label for="email" class="control-label">Your email address</label>
					<input type="text" name="email" id="email" class="form-control" value="{{Request::old('email')?:''}}"></input>
					@if ($errors->has('email'))
					<span class="help-block">{{ $errors->first('email') }}</span>
					@endif			
				</div>
				<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
						<label for="username" class="control-label">Choose a username</label>
						<input type="text" name="username" id="username" class="form-control" value="{{Request::old('username')?:''}}"></input>	
					@if ($errors->has('username'))
					<span class="help-block">{{ $errors->first('username') }}</span>
					@endif	
				</div>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="control-label">Choose a password</label>
						<input type="password" name="password" id="password" class="form-control" value=""></input>	
					@if ($errors->has('password'))
					<span class="help-block">{{ $errors->first('password') }}</span>
					@endif	
				</div>
				<div class="form-group">
						<button class="btn btn-default" type="submit">Sign up</button>
				</div>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
@stop