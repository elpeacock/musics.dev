@extends('layouts.master')

@section('content')
<div class="col-xs-8 col-xs-offset-2">
	<h4 class="modal-title">Create a new goer account</h4>
	<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<input
			type="text"
			class="form-control"
			name="first_name"
			id="first_name"
			placeholder="First name">
					
		</div>
		<div class="form-group">
			<input
			type="text"
			class="form-control"
			name="last_name"
			id="last_name"
			placeholder="Last name">
					
		</div>
		<div class="form-group">
			<input
			type="password"
			class="form-control"
			name="password"
			id="password"
			placeholder="Password">
			<small>Password has to be between 6-60 characters</small>
					
		</div>
		<div class="form-group">
			<input
			type="password"
			class="form-control"
			name="password_confirmation"
			id="password_confirmation"
			placeholder="Verify password">
					
		</div>
		<div class="form-group">
			<input	
			type="text"
			class="form-control"
			name="email"
			id="email"
			placeholder="Email">
				
		</div>
		<!-- add remember me button -->
		<div class="pull-left">
			Already a member? <a href="/auth/login">Log in here</a>
		</div>
		<button type="submit" class="btn btn-primary pull-right">Sign up</button>
	</form>
</div>
@stop