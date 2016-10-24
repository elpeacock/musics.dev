@extends('layouts.master')

@section('content')
<div class="col-xs-8 col-xs-offset-2">
	<h4 class="modal-title">Create a new Band account</h4>
	<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<input
			type="text"
			class="form-control"
			name="band_name"
			id="band_name"
			placeholder="band name">
					
		</div>
		
		<div class="form-group">
			<input
			type="password"
			class="form-control"
			name="password"
			id="password"
			placeholder="Password">
				
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