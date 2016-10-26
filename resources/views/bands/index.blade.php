@extends('layouts.master')

@section('title', 'Bands')

@section('content')

<div class="container">
<h2>All Bands</h2>
<div class="container">
@for($i=0; $i < 9; $i++)
      <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="box thumbnail animated">

          <img class="imgSize" src="http://placekitten.com/200/200" alt="">

          <div class="caption">
            <h4>Band Name</h4>
            <p><p>
          </div>

        </div> <!-- /.box thumbnail -->
      </div> <!-- /.col-sm-4 col-lg-4 col-md-4 -->
@endfor
</div>
@stop