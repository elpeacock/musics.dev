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
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 bigImg">
	<img class="imgSize" src="/img/concert.jpg">
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 bigImg">

	<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 imgUnder secondRow"><img class="imgSize" src="/img/conert2.jpg"></div>
	<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 imgUnder secondRow"><img class="imgSize" src="/img/concert3.jpg"></div>
	<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 imgUnder secondRow"><img class="imgSize" src="/img/concert4.jpg"></div>
</div>
</div>

<div class="container">
<h2>Popular Events</h2>
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
