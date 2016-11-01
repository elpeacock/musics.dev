@extends('layouts.master')

@section('content')
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
    Memeber since {{ $user->created_at->format('F Y') }}
            @if(Auth::check() && (Auth::user()->id == $user->id))
            <div>
                <a class="btn btn-default" href="{{ action('UserController@edit', $user->id) }}">Change your info</a>
            </div>
            @endif

    {{-- @if(Auth::id() == $users->id)
        <a href="{{action('UserController@edit', $users->id)}}"><button type="button" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></button></a>
    @endif --}}
    <hr>

    <div>
    <h1>Favorite Bands</h1>
    <ul>
    @foreach($user->bandPreferences as $favorite)
        <li class="col-sm-3">{{ $favorite->name }}</li>
    @endforeach
    </ul>
    </div>

    <h1>RSVPs</h1>
    @foreach($user->events as $event)
    <div class="col-lg-8">
        <a href="{{action('EventsController@show', $event->id)}}"><h3>{{$event->band->name}}</h3></a>
        <h4>Location: {{$event->venue->name}}</h4>
        <h4>Date: {{$event->event_time}}</h4>
        <h4>Ticket Price: ${{$event->price}}</h4>
        <hr>
    </div>
    <div class="col-lg-4">
        <form class="form" method="POST" action="{{ action('RsvpController@destroy', $event->id) }}">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button role="button" class="btn btn-danger">Delete <i class="fa fa-trash-o"></i></button>
        </form>

    </div>
    @endforeach

    </div>
</div>
@stop
