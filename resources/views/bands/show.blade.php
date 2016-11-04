@extends('layouts.master')

@section('title', 'Band')

@section('content')
<div class="container" id="BandShowImage">
    <div class="fb-profile">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="artistImg">
        <div class="bandContainer"><div class="bandImg" id="image"></div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="fb-profile-text">
            <h1>{{$bands->name}}</h1>
            <h3>Genre</h3>
            <h4>{{$bands->genres->name}}</h4>
            <h3>Description</h3>
            <h4>{{$bands->description}}</h4>
        </div>
    </div>

    </div>
</div>
<div class="container">
    <h1>Events</h1>
    @if(count($bands->events) != 0)
        @foreach($bands->events as $event)
          <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="/img/rockNroll.png">
            </a>
            <div class="media-body">
                <a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>
            <h4>Location: {{$event->venue->name}}</h4>
            <h4>Date: {{$event->event_time}}</h4>
            <h4>Ticket Price: ${{$event->price}}</h4>
            <hr>
           </div>
        </div>
        <hr>
        @endforeach

    @else
    <h4>Currently, {{ $bands->name }} has no events scheduled</h4>
    @endif
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript">
    $(function() {
        var params = {
            // Request parameters
        };

        $.ajax({
            url: "https://api.cognitive.microsoft.com/bing/v5.0/images/search?q={{$bands->name}}" + $.param(params),
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
          console.log(data);
          console.log(data.value[0].webSearchUrl);
          $img = data.value[0].contentUrl
          var imageSpace = ""
           imageSpace += "<img src=" + $img +">"
        $(".bandImg").html(imageSpace);

            // alert("success");
        })
        .fail(function() {
            // alert("error");
        });
    });
</script>
@stop
