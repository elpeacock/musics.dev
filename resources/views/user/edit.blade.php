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
        {{-- <dl class="dropdown">
            <dt>
            <a href="#">
              <span class="hida">Select</span>
              <p class="multiSel"></p>
            </a>
            </dt>
            <dd>
                <div class="mutliSelect">
                    <ul>
                        <li>
                            <input type="checkbox" value="Rock" />Rock</li>
                        <li>
                            <input type="checkbox" value="Jazz" />Jazz</li>
                        <li>
                            <input type="checkbox" value="Blues" />Blues</li>
                        <li>
                            <input type="checkbox" value="Pop" />Pop</li>
                        <li>
                            <input type="checkbox" value="Punk" />Punk</li>
                        <li>
                            <input type="checkbox" value="" /></li>
                    </ul>
                </div>
            </dd>
          <button>Filter</button>
        </dl> --}}
    <div class="col-xs-8 col-xs-offset-2">
        <h4 class="modal-title">Change your account info</h4>
        <form class="form" method="POST" action="{{ action('UserController@update', $user->id) }}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            <div class="form-group">
                <input
                        type="text"
                        class="form-control"
                        name="zip_code"
                        id="zip_code"
                        placeholder="Zip Code"
                        value="{{ old('zip_code')==null ? $user->zip_code : old('zip_code') }}">
                        {{-- @include('forms.error', ['field' => 'HomeBase']) --}}

            </div>
            <div class="form-group">
                <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="First name"
                        value="{{ old('name')==null ? $user->name : old('name') }}">
                        {{-- @include('forms.error', ['field' => 'name']) --}}

            </div>
            <div class="form-group">
                <input
                        type="text"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Email"
                        value="{{ old('email')==null ? $user->email : old('email') }}">
                        {{-- @include('forms.error', ['field' => 'user']) --}}

            </div>
            <div class="form-group">
                <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password"
                        placeholder="Password"
                        {{-- value="{{ $user->password }}" --}}>
                        {{-- @include('forms.error', ['field' => 'user']) --}}

            </div>
            <div class="form-group">
                <input
                        type="password"
                        class="form-control"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Retype Password"
                        {{-- value="{{ $user->password }}" --}}>
                        {{-- @include('forms.error', ['field' => 'user']) --}}

            </div>
            <div class="form-group">
                <label for="image">Add a Profile Picture</label>
                <input type="file" id="image" name="image" placeholder="Image">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Update Info</button>
        </form>
    </div>
</div>
@stop
