@extends('layouts.master')

@section('title', 'Bands')

@section('content')

<div class="container">

<h2>All Bands</h2>

<div class="container">

@foreach($bands as $band)
    <div class="col-sm-4 col-lg-4 col-md-4">

        <div class="box thumbnail animated">

          {{-- <img class="imgSize" src="http://placekitten.com/200/200" alt=""> --}}

          <div class="caption">

            <h4><a href="{{action('BandsController@show', $band->id)}}">{{ $band->name }}</a></h4>

          </div>

        </div> <!-- /.box thumbnail -->

    </div> <!-- /.col-sm-4 col-lg-4 col-md-4 -->
@endforeach
</div>

    <div class="text-center">

        {!! $bands->render() !!}
        
    </div>

</div>
@stop