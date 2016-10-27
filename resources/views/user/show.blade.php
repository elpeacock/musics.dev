@extends('layouts.master')

@section('content')
<div class="container">
	<h1>{{$user->name}}</h1>
	<h3>{{$user->email}}</h3>
	{{-- @if(Auth::id() == $users->id)
		<a href="{{action('UserController@edit', $users->id)}}"><button type="button" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></button></a>
	@endif --}}
	<hr>

	<h2>Events</h2>



	@foreach($user->events as $event)
		<h3>{{$event->band->name}}</h3>
		<h4>{{$event->venue_id}}</h4>
		<h4>{{$event->event_time}}</h4>
		<h4>{{$event->price}}</h4>
		<?php 
		var_dump($event);
	?>
	@endforeach
@stop