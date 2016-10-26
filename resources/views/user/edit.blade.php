@extends('layouts.master')

@section('content')


        <dl class="dropdown">

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
        </dl>

    <div class="col-xs-8 col-xs-offset-2">
        <h4 class="modal-title">Change your account info</h4>
        <form method="POST" action="{{ action('UserController@update', $user->id) }}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <input
                        type="text"
                        class="form-control"
                        name="HomeBase"
                        id="home_base"
                        placeholder="HomeBase"
                        value="{{ $user->home_base }}">
                        @include('forms.error', ['field' => 'HomeBase'])

            </div>
            <div class="form-group">
                <input
                        type="text"
                        class="form-control"
                        name="first_name"
                        id="first_name"
                        placeholder="First name"
                        value="{{ $user->user_name }}">
                        @include('forms.error', ['field' => 'name'])

            </div>
            <div class="form-group">
                <input
                        type="text"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Email"
                        value="{{ $user->email }}">
                        @include('forms.error', ['field' => 'user'])

            </div>
          </div>
            <div class="form-group">
                <label for="image">Add a Profile Picture</label>
                <input type="file" id="image" name="image" placeholder="Image">
            </div>
            <h3><a href="{{ action('UserController@editPassword', $user->id) }}">Change your password</a> </h3>
            <button type="submit" class="btn btn-primary pull-right">Update Info</button>
        </form>
    </div>
@stop
