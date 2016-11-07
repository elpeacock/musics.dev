@extends('layouts.master')

@section('title', 'Events')

@section('content')

{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <img class="imgSize" src="/img/concert.jpg">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 imgUnder secondRow"><img class="imgSize" src="/img/conert2.jpg"></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 imgUnder secondRow"><img class="imgSize" src="/img/concert3.jpg"></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 imgUnder secondRow"><img class="imgSize" src="/img/concert4.jpg"></div>

</div>


<h2>Popular Events</h2>
<div class="container">
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
 --}}

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mainImg">

    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 imgUnder bigImg" data-content="Welcome to ShowUp.rocks! A place to view events and artists!">
    <img class="imgSize" src="/img/concert.jpg">
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 bigImg">

        <a href="/events/2"><div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 imgUnder secondRow" data-content="Kanye West"><img class="imgSize" src="/img/kanye2.jpg"></div></a>

        <a href="/events/5"><div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 imgUnder secondRow" data-content="Willie Nelson"><img class="imgSize" src="/img/willie.jpg"></div></a>

        <a href="/events/9"><div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 imgUnder secondRow" data-content="Red Hot Chili Peppers"><img class="imgSize" src="/img/RHCP.jpg"></div></a>
    </div>
</div>

<div class="container">

<h1>Popular Events</h1>

@foreach($events->slice(0, 3) as $event)

    <div class="media">

        <a class="pull-left" href="{{action('EventsController@show', $event->id)}}">

            <div id="thumbnail" class="band_{{$event->band_id}}"></div>

        </a>

        <div class="media-body">

            <a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>

            <h4>Location: {{$event->venue->name}}</h4>
            <h4>City: {{$event->venue->city}}</h4>
            <h4>Date: {{Carbon\Carbon::parse($event->event_time)->format('l, F jS, Y')}}</h4>
            <h4>Ticket Price: ${{$event->price}}</h4>
            <h4>Ticket Location: {{$event->buy_tickets}}</h4>

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
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","f555ec3e49ee4279a31ff26a01054049");
            },
            type: "POST",
            // Request body
            data: "{body}",
        })
        .done(function(data) {
          var img = data.value[0].thumbnailUrl;
          var target = $(".band_{{ $event->band_id }}");

          target.css('background-image', 'url(' + img + ')');
        })
        .fail(function() {
            // alert("error");
        });
    });

})();
    </script>

@endforeach
</div>
@stop
