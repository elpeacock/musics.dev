@extends('layouts.master')

@section('title', 'All Events')


@section('content')

<div class="container">
<h2>All Events</h2>
@for($i = 1; $i < 4; $i++)
	<div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object" src="http://placekitten.com/150/150">
  		</a>
  		<div class="media-body">
    		<a href="/events/{{$i}}"><h4 class="media-heading">Event {{$i}}</h4></a>
          <p>Info</p>

       </div>
    </div>
  </div>
@endfor
</div>

@stop
