@extends('layouts.master')

@section('content')
<div class="container">

	<h1>{{$user->name}}</h1>
	<h4>User Email: {{$user->email}}</h4>
	<h4>BaseZone: {{$user->zip_code}}</h4>
	Memeber since {{ $user->created_at->format('F Y') }}
			@if(Auth::check() && (Auth::user()->id == $user->id))
			<div>
				<a class="btn btn-default" href="{{ action('UserController@edit', $user->id) }}">Change your info</a>
			</div>
			@endif


	{{-- @if(Auth::id() == $users->id)
		<a href="{{action('UserController@edit', $users->id)}}"><button type="button" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></button></a>
	@endif --}}
	<hr>

	<h1>RSVPs</h1>
	@foreach($user->events as $event)
		<a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>
		<h4>Location: {{$event->venue->name}}</h4>
		<h4>Date: {{$event->event_time}}</h4>
		<h4>Ticket Price: ${{$event->price}}</h4>
		<hr>
	@endforeach
@stop
