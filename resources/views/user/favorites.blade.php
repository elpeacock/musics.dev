@extends('layouts.master')

@section('title')

Faves and more...

@stop

@section('content')
<div class="container">
    
    <form method="POST" action="{{ action('UserController@update', $user->id) }}" enctype="multipart/form-data">

        {{ csrf_field() }}
        {{ method_field('PUT') }}


        <div class="col-sm-8 col-sm-offset-2">

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

        <div class="col-sm-4">

            <div class="dropdown">

                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                    R&B/Urban Soul

                    <span class="caret"></span>

                </button>

                <select class="dropdown-menu" aria-labelledby="dropdownMenu1">

                    @foreach($soulBands as $soulBand)

                    <option>{{ $soulBand->name }}</option>

                    @endforeach

                </select>

            </div>
            
        </div>
        
        </form>

</div>
