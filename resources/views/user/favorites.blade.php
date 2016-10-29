@extends('layouts.master')

@section('title')

Faves and more...

@stop

@section('content')

<div class="container">
    
    <form class="form" method="POST" action="{{ action('UserController@storeUserFavorites') }}">

        {{ csrf_field() }}

        <div class="col-sm-4">

            <h3>R&B/Soul</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($soulBands as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Rock & Pop</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($rockPopBands as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Alt Rock</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($altRockBands as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Rap/Hip Hop</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($rapHipHop as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Country/Folk</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($countryFolk as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Jazz & Blues</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($jazzBlues as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Hard Rock/Metal</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($hardRockMetal as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Dance/Electronic</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($danceElectronic as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class="col-sm-4">

            <h3>Alternative/Indie</h3>

            <select class="selectpicker" multiple data-selected-text-format="count">

            @foreach($alternativeIndie as $band_id => $value)

                <option name="band_id" id="selectedPreferences"value="{{ $band_id }}">{{ $value->name }}</option>

            @endforeach
            
            </select>

        </div>

        <div class='button-holder'>
            
            <input type="submit" class="btn button-submit">

        </div>

    </form>

</div>

@stop