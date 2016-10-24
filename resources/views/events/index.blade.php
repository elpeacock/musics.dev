@extends('layouts.master')

@section('title', 'Events')

@section('content')
<div class="container">
		{{-- <div class="well col-lg-4">
			<h2>Event</h2>
		</div>
		<div class="well col-lg-4">
			<h2>Event</h2>
		</div>
		<div class="well col-lg-4">
			<h2>Event</h2>
		</div> --}}
		<h2>Featured Events</h2>
@for($i = 0; $i < 3; $i++)
		<div class="col-lg-4">
				<div class="box thumbnail animated">

					<img class="imgSize" src="http://placekitten.com/400/400" alt="">

					<div class="caption">
						<h3>Show Name</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
					</div>
				</div> <!-- /.box thumbnail -->
			</div> <!-- /.col-sm-4 col-lg-4 col-md-4 -->
@endfor

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
    		<a href="#"><h4 class="media-heading">Event {{$i}}</h4></a>
          <p>Info</p>
          
       </div>
    </div>
  </div>
@endfor
</div>
@stop
