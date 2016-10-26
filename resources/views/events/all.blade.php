@extends('layouts.master')

@section('title', 'All Events')


@section('content')

<div class="container">
<h2>All Events</h2>
@for($i = 1; $i < 10; $i++)
	      <div class="media">
        <a class="pull-left" href="#">
        <img class="media-object" src="http://placekitten.com/250/180">
      </a>
      <div class="media-body">
        <a href="/events/{{$i}}"><h3 class="media-heading">Event {{$i}}</h3></a>
          <h4>Info: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
          
       </div>
    </div>
    <hr>
@endfor
</div>

@stop
