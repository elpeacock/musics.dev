@extends('layouts.master')

@section('title', 'Show')

@section('content')
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife" alt="Profile image example"/>
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
@stop