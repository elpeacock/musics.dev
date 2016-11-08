@extends('layouts.master')

@section('title', 'Create')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h1 class="modal-title">Add A Band</h1>
            <form method="POST" action="{{ action('BandsController@store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input 
                    type="text" 
                    class="form-control" 
                    name="bandName" 
                    id="bandName" 
                    placeholder="Band Name">
                </div>
                <div class="form-group">
                    <select class="selectpicker" name="genre">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input 
                    type="hidden" 
                    id="ownerID" 
                    name="ownerID" 
                    value="{{Auth::user()->id}}">
                </div>
                <div class="form-group">
                    <textarea 
                    type="text" 
                    rows="5" 
                    class="form-control" 
                    name="description" 
                    id="description" 
                    placeholder="Description"></textarea>
                </div>
                <button type="submit" class ="btn btn-primary pull-right">Create</button>
            </form>
        </div> {{-- close col-xs-8 col-xs-offset-2 --}}
    </div> {{-- close row --}}
</div> {{-- close container --}}

@stop
