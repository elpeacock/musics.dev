@extends('layouts.master')

@section('title')

Faves and more...

@stop

@section('content')
<div class="container">
    
    <form method="POST" action="{{ action('UserController@update', $user->id) }}" enctype="multipart/form-data">

        {{ csrf_field() }}
        {{ method_field('PUT') }}


        <div class="col-md-8 col-sm-8 col-xs-8 col-sm-offset-2 col-xs-offset-2">

        <div class="form-group">

            <label for="zip_code" class="form-control">Where do you show up?</label>

            <input
                
                type="text"
                class="form-control"
                name="zip_code"
                placeholder="Zip code"
                value="{{ $user->zip_code }}">

        </div>

        <div class="form-group">

            <label for="image_url" class="form-control">Add a picture</label>

            <input
                
                type="text"
                class="form-control"
                name="image_url"
                placeholder=".jpg, .jpeg, .png"
                value="{{ $user->image_url }}">

        </div>

        </div>
        
        </form>

</div>
