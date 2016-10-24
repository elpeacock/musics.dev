@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-xs-6 col-xs-offset-3">
		<h4 class="modal-title">Log In</h4>
		<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" class="form-control" name="email" id="email" placeholder="email">

			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" id="password" placeholder="password">

			</div>
			<div class="form-group">
				<a href="#">reset password</a>
			</div>
			<button type="submit" class ="btn btn-primary pull-right">log in</button>
		</form>
	</div>
</div>
@stop
