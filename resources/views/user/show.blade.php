@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-3">
			<img class="img img-thumbnail" src="{{ $user->avatar }}" height="150" width="150">
		</div>
		<div class="col-xs-6">
			<h2>{{ $user->user_name }} {{ $user->????() }}.</h2>
			@if(Auth::check() && (Auth::user()->id == $user->id))
			<div>
				<a class="btn btn-default" href="{{ action('UserController@edit', $user->id) }}">Change your info</a>
			</div>
			@endif
		</div>
	</div>
