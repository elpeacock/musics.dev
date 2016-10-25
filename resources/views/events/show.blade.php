@extends('layouts.master')

@section('title', 'Show')

@section('content')
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="http://placekitten.com/850/280" alt="Profile image example"/>
{{--         <img align="left" class="fb-image-profile thumbnail" src="http://placekitten.com/150/150" alt="Profile image example"/> --}}
        <div class="fb-profile-text">
            <h1>Band/Show Event</h1>
            <h4>Description</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h4>Location</h4>
            <p>123 Ocean AVE, San Antonio, Texas</p>
        </div>
    </div>
</div> <!-- /container -->  
<div class="container">
    <div id="map-canvas"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxjrqPRV6lxdrVf6csNsnmBySJmnQTZ9I"></script>

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
var address = "2410 N St Mary's St, San Antonio, TX 78212";

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
                  content: "Venue Name"
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

})();
    </script>

@stop