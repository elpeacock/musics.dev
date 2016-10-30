@extends('layouts.master')

@section('title', 'Create')

@section('content')

<div class="row">
	<div class="col-xs-6 col-xs-offset-3">
		<h4 class="modal-title">Create Event</h4>
		<form method="POST" action="{{ action('EventsController@store') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" class="form-control" name="bandName" id="bandName" placeholder="Band Name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="description" id="description" placeholder="Description">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="image" id="image" placeholder="Image">
			</div>

			<button type="submit" class ="btn btn-primary pull-right">Create</button>
		</form>
	</div>
</div>

@stop
