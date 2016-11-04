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

        <button class="btn btn-primary" type="submit">Filter</button>

    </form>

<h1>All Events</h1>

@foreach($events as $event)

	<div class="media">

        <a class="pull-left" href="#">

            {{-- <img class="media-object" src="/img/rockNroll.png"> --}}
            <div id="thumbnail" class="band_{{$event->band_id}}"></div>

        </a>

        <div class="media-body">

            <a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>

            <h4>Location: {{$event->venue->name}}</h4>
            <h4>City: {{$event->venue->city}}</h4>
            <h4>Date: {{Carbon\Carbon::parse($event->event_time)->format('l, F jS, Y')}}</h4>
            <h4>Ticket Price: ${{$event->price}}</h4>
    		<h4> Ticket Location: {{$event->buy_tickets}}</h4>

        </div>

    </div>

    <hr>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    (function() {
    "use strict";
////////////////////////// image api ////////////////////////////////////////////

$(function($img) {
        var params = {
            // Request parameters
        };

        $.ajax({
            url: "https://api.cognitive.microsoft.com/bing/v5.0/images/search?q={{$event->band->name}}" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","multipart/form-data");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","97417c471f334a1b995ffd4cc535391c");
            },
            type: "POST",
            // Request body
            data: "{body}",
        })
        .done(function(data) {
          var img = data.value[0].thumbnailUrl;
          var target = $(".band_{{ $event->band_id }}");

          target.css('background-image', 'url(' + img + ')');
            // alert("success");
        })
        .fail(function() {
            // alert("error");
        });
    });

})();
    </script>
    @endforeach
</div>
<div class="text-center"> 
    {!! $events->render() !!}
</div>

@stop
