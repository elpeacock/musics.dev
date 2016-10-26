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
            <h1>Band Name</h1>
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
    </div>
</div> <!-- /container -->  
@stop
