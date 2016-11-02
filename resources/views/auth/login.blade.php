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
    
    <div class="col-xs-6 col-xs-offset-3">

        <h1 class="modal-title">Log In</h1>

        <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
            {{ csrf_field() }}

            <div class="form-group">

                <input type="text" class="form-control" name="email" id="email" placeholder="email">
                {{-- @include('forms.error', ['field' => 'email']) --}}

            </div>

            <div class="form-group">

                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                {{-- @include('forms.error', ['field' => 'password']) --}}

            </div>

            <div class="form-group">

                <a href="#">reset password</a>

            </div>

            <button type="submit" class ="btn btn-primary pull-right">log in</button>

        </form>

    </div>
    
</div>
@stop
