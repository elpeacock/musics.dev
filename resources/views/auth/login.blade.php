@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">

@if(count($errors))
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    </div>
@endif

</div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h1>Log In</h1>
            <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input 
                    type="text" 
                    class="form-control" 
                    name="email" 
                    id="email" 
                    placeholder="email">
                </div>
                <div class="form-group">
                    <input 
                    type="password" 
                    class="form-control" 
                    name="password" 
                    id="password" 
                    placeholder="password">
                </div>
                <div class="pull-left">
                    <a href="#">reset password</a>
                </div>
                <button type="submit" class ="btn btn-primary pull-right">log in</button>
            </form> {{-- close form --}}
        </div> {{-- close col-xs-8 col-xs-offset-2 --}}
    </div> {{-- close row --}}
</div> {{-- close container --}}
@stop
