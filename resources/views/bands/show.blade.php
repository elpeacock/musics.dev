@extends('layouts.master')

@section('title', 'Band')

@section('content')
<div class="container">
    <div class="fb-profile">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img align="left" class="fb-image-lg" src="http://placekitten.com/450/280" alt="Profile image example"/>
    </div>
    <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
        <div class="fb-profile-text">
            <h1>{{$bands->name}}</h1>
            <h4>Description</h4>
            <p>{{$bands->description}}</p>
            <h4>Genre ID</h4>
            <p>{{$bands->genre_id}}</p>
        </div>
    </div>
    </div>
</div> <!-- /container -->  
@stop
