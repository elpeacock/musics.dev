@extends('layouts.master')

@section('title')

Faves and more...

@stop

@section('content')

<div class="container">
    
    <div class="col-sm-4">

        <form class="form" method="POST" action="{{ action('UserController@storeUserFavorites') }}">

        {{ csrf_field() }}

            <div id="bp_dropdown" class="multiselect">

            @foreach($soulBands as $band_id => $value)

                <a class="dropdown-item" href="#">

                <input type="checkbox" id="{{ $band_id }}" name="band_id" value="{{ $band_id }}">{{ $value->name }}<i></i></a>

            @endforeach
            
            </div>

        </form>

    </div>

</div>

@stop