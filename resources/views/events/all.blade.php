@extends('layouts.master')

@section('title', 'All Events')


@section('content')

<div class="container">

<form id="cityForm" name="cityForm" method="GET" action="{{ action('EventsController@index') }}" >             
<select class="selectpicker" data-selected-text-format="values" form="cityForm" name="city">

        <option disabled selected value>Filter By Town</option>
    @foreach($cities as $name => $city)
        <option name="{{ $name }}" value="{{ $city->city }}">{{ $city->city }}</option>

    @endforeach

</select>
    <button class="btn btn-default" type="submit">Filter</button>
</form>

<h2>All Events</h2>
@foreach($events as $event)
	      <div class="media">
        <a class="pull-left" href="#">
        <img class="media-object" src="http://placekitten.com/250/180">
      </a>
      <div class="media-body">
        <a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>
        <h4>Location: {{$event->venue->name}}</h4>
        <h4>Location: {{$event->venue->city}}</h4>
        <h4>Date: {{$event->event_time}}</h4>
        <h4>Ticket Price: ${{$event->price}}</h4>
				<h4> Ticket Location: {{$event->buy_tickets}}</h4>
        <hr>
       </div>
    </div>
    <hr>
@endforeach
</div>

@stop
