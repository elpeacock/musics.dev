@extends('layouts.master')

@section('title', 'Show')

@section('content')
<div class="container" id="BandShowImage">
    <div class="fb-profile">

        {{-- <img class="fb-image-lg" src="http://placekitten.com/1000/280" alt="Profile image example"/> --}}

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="artistImg"><div class="bandContainer"><div class="bandImg" id=""></div></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="fb-profile-text">
              <h1>{{$events->band->name}}</h1>
              @if(Auth::check())
                  <form method="POST" action="{{action('RsvpController@store')}}">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                        <input type="hidden" name="event_id" value="{{$events->id}}">
                    </div>
                    <button type="submit" class="btn btn-default">RSVP &nbsp<i class="fa fa-calendar-check-o"></i></button>
              </form>
              @endif
              <h4><strong>Venue:</strong> {{$events->venue->name}}</h4>
              <h4><strong>Ticket Info:</strong> {{$events->buy_tickets}}</h4>
              <h4><strong>Address:</strong> {{$events->venue->address}}, {{$events->venue->city}}, {{$events->venue->state}}, {{$events->venue->zip_code}}</h4>
              <h4><strong>Description:</strong> {{$events->venue->description}}</h4>
          </div>
        </div>
    </div>
</div> <!-- /container -->
<div class="container">
    <div id="map-canvas"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeEOGGnOFWbYLlHT4dWckzghnotNw4oNU"></script>

{{-- AIzaSyAeEOGGnOFWbYLlHT4dWckzghnotNw4oNU --}}


<script type="text/javascript">
    (function() {
    "use strict";
        //places content in divs for three days
        // Set our map options
        var mapOptions = {
            // Set the zoom level
            zoom: 17,

            // This sets the center of the map at our location
            center: {
                lat:  29.426791,
                lng: -98.489602
            }
        };

        var geocoder = new google.maps.Geocoder();
// Set our address to geocode
var address = "{{$events->venue->address}}, {{$events->venue->city}}, {{$events->venue->state}} {{$events->venue->zip_code}}";

// // Init geocoder object
// var geocoder = new google.maps.Geocoder();

// // Geocode our address
// geocoder.geocode({ "address": address }, function(results, status) {

//    // Check for a successful result
//    if (status == google.maps.GeocoderStatus.OK) {

//        // Recenter the map over the address
//        map.setCenter(results[0].geometry.location);
//    } else {

//        // Show an error message with the status if our request fails
//        alert("Geocoding was not successful - STATUS: " + status);
//    }

// });

var renderMap = function (address, mapOptions){
        // Init geocoder object
        var geocoder = new google.maps.Geocoder();
        // Geocode our address
        var addressLatLng;
        geocoder.geocode({ "address": address }, function(results, status) {
          console.log(results[0].geometry.location);
           // Check for a successful result
           if (status == google.maps.GeocoderStatus.OK) {
              var lat = results[0].geometry.location.lat();
              var lng = results[0].geometry.location.lng();

              addressLatLng = {"lat": lat, "lng":lng};

              console.log(results[0]);
              console.log(addressLatLng);

              var marker = new google.maps.Marker({
                position: addressLatLng,
                map: map,
                animation: google.maps.Animation.DROP,
              });

              google.maps.event.addListener(marker, 'click', function() {         //info pops up when marker clicked
              infoWindow.open(map,marker);
              });

              var infoWindow = new google.maps.InfoWindow({
                  content: "<h2 style=text-align: center;>{{$events->venue->name}}</h2>"
              });
                     // Recenter the map over the address
              map.setCenter(results[0].geometry.location);
           } else {

               // Show an error message with the status if our request fails
               alert("Geocoding was not successful - STATUS: " + status);
           }

        });

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

      }//end of function
renderMap(address, mapOptions);

$(function($img) {
        var params = {
            // Request parameters
        };

        $.ajax({
            url: "https://api.cognitive.microsoft.com/bing/v5.0/images/search?q={{$events->band->name}}" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","multipart/form-data");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","230e87a2adcf434ba83a30ea5b633f2f");
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

})();
    </script>


@stop
