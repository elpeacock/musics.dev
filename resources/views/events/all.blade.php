@extends('layouts.master')

@section('title', 'All Events')


@section('content')

<div class="container">

    <h1>All Events</h1>

    @foreach($events as $event)

    <div class="media">

        <a class="pull-left" href="#">
            <img class="media-object" src="http://placekitten.com/250/180">
        </a>

        <div class="media-body">

            <a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>
            <h4>Location: {{$event->venue->name}}</h4>
            <h4>Date: {{$event->event_time}}</h4>
            <h4>Ticket Price: ${{$event->price}}</h4>
            <h4> Ticket Location: {{$event->buy_tickets}}</h4>

        </div>
        
    </div>

    <hr>
    @endforeach
</div>

@stop
