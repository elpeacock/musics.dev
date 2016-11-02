@extends('layouts.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div class="container">
<div class="row">
@if(session()->has('SUCCESS_MESSAGE'))
        <div class="alert alert-success">
            <p>{{ session('SUCCESS_MESSAGE') }}</p>
        </div>
@endif
        {{-- <div class="col-xs-3">
            <img class="img img-thumbnail" src="{{ $user-> }}" height="150" width="150">
        </div> --}}
    <h1>{{$user->name}}</h1>
    <h4>User Email: {{$user->email}}</h4>
    <h4>BaseZone: {{$user->zip_code}}</h4>
    <h5>Memeber since {{ $user->created_at->format('F Y') }}</h5>
            @if(Auth::check() && (Auth::user()->id == $user->id))
            <div>
                <a class="btn btn-default" href="{{ action('UserController@edit', $user->id) }}">Change your info</a>
            </div>
            @endif
    <hr>

    <div>
    <h1>Favorite Bands</h1>
    <div class="container">
    <ul>
    @foreach($user->bandPreferences as $favorite)
        <li class="col-sm-3"><a href="{{action('BandsController@show', $favorite->id)}}">{{ $favorite->name }}</a></li>
    @endforeach
    </ul>
    </div>
    </div>

    <h1>RSVPs</h1>
    @if(count($user->events) != 0)
    @foreach($user->events as $event)
    <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
        <a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>
        <h4>Location: {{$event->venue->name}}</h4>
        <h4>Date: {{$event->event_time}}</h4>
        <h4>Ticket Price: ${{$event->price}}</h4>
        <hr>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <form class="form" method="POST" action="{{ action('RsvpController@destroy', $event->id) }}">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button role="button" id="deleteRsvp" class="pull-right btn btn-danger">Delete <i class="fa fa-trash-o"></i></button>
        </form>

    </div>
    </div>
    @endforeach
    @else
    <h3>No RSVPs</h3>
    @endif

    </div>
</div>
@stop
