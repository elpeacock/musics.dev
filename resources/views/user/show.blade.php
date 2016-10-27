@extends('layouts.master')

@section('content')
<div class="container">
	<h1>{{Auth::user()->name}}</h1>
	<h3>{{Auth::user()->email}}</h3>
	{{-- @if(Auth::id() == $users->id)
		<a href="{{action('UserController@edit', $users->id)}}"><button type="button" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></button></a>
	@endif --}}
	<hr>

	<h2>Events</h2>


@stop