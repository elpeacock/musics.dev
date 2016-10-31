@extends('layouts.master')

@section('content')


<div class="container">
@if(count($errors))
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        </div>
@endif

    <div class="col-xs-8 col-xs-offset-2">

        <h2>Create a new account</h2>

        <form method="POST" action="/auth/register">

            {{ csrf_field() }}

            <div class="form-group">

                <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Name">
                {{-- @include('forms.error', ['field' => 'name']) --}}

            </div>

            <div class="form-group">

                <input
                type="text"
                class="form-control"
                name="email"
                id="email"
                placeholder="Email">
                {{-- @include('forms.error', ['field' => 'email']) --}}

            </div>

            <div class="form-group">

                <input
                type="text"
                class="form-control"
                name="zip_code"
                id="zip_code"
                placeholder="Zip">
                {{-- @include('forms.error', ['field' => 'email']) --}}

            </div>

            <div class="form-group">

                <input
                type="password"
                class="form-control"
                name="password"
                id="password"
                placeholder="Password">
                {{-- @include('forms.error', ['field' => 'password']) --}}
                <small>Password has to be between 6-60 characters</small>

            </div>

            <div class="form-group">
                <input
                type="password"
                class="form-control"
                name="password_confirmation"
                id="password_confirmation"
                placeholder="Verify password">
                {{-- @include('forms.error', ['field' => 'password_confirmation']) --}}

            </div>
            <!-- add remember me button -->
            <div class="pull-left">
                Already a member? <a href="{{ action('Auth\AuthController@getLogin') }}">Log In Here</a>
            </div>

            <button type="submit" class="btn btn-primary pull-right">Sign up</button>

        </form>

    </div>

</div>
@stop
