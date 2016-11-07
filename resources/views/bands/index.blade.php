@extends('layouts.master')

@section('title', 'Bands')

@section('content')

<div class="container">
    <form class="form-inline" method="GET" name="search" action="{{ action('BandsController@index') }}">
        <div class="input-group">
            <input 
            type="text" 
            class="form-control" 
            placeholder="Search" 
            name="search" 
            value="{{ isset($searchTerm) ? $searchTerm : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <h1>All Bands</h1>
<div class="row">

@foreach($bands as $band)     
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="box thumbnail animated">
            <div class="caption">
                <h4><a href="{{action('BandsController@show', $band->id)}}">{{ str_limit($band->name, 17) }}</a></h4>
            </div>
        </div> <!-- /.box thumbnail -->
    </div> <!-- /.col-sm-4 col-lg-4 col-md-4 -->       
@endforeach

</div> <!-- /.row -->
    <div class="text-center">
        {!! $bands->render() !!}
    </div>
</div> <!-- /.container -->
@stop