@extends('layouts.master')

@section('title')

Faves and more...

@stop

@section('content')

<div class="container">

    
    <div class="col-sm-4">

        <form method="POST" action="{{ action('UserController@storeUserFavorites') }}">

        {{ csrf_field() }}

            <select name="band_id" multiple>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
            <button>submit</button>
        </form>

        {{-- <div class="dropdown">

            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                R&B/Urban Soul

                <span class="caret"></span>

            </button>

            <select class="dropdown-menu" aria-labelledby="dropdownMenu1">

                @foreach($soulBands as $soulBand)

                <option>{{ $soulBand->name }}</option>

<<<<<<< HEAD
                @endforeach
=======
    </form>
    
        <div class="col-sm-4">
>>>>>>> d0d5a09513521d12845c0606ebfa82646182edb1

            </select>

        </div> --}}
        
        
    </form>
    </div>

</div>
    {{-- <form method="POST" action="{{ action('UserController@update', $user->id) }}" enctype="multipart/form-data">

        {{ csrf_field() }}
        {{ method_field('PUT') }}


        <div class="col-sm-8 col-sm-offset-2">

        <div class="form-group">

            <label for="image_url" class="form-control">Add a picture</label>

            <input
                
                type="text"
                enctype="multipart/form-data"
                class="form-control"
                name="image_url"
                placeholder=".jpg, .jpeg, .png"
                value="{{ $user->image_url }}">

        </div>

        </div>

    </form> --}}
