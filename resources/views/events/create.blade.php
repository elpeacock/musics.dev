@extends('layouts.master')

@section('title', 'Create Event')

@section('content')
<div class="row">
	<div class="col-xs-6 col-xs-offset-3">
		<h4 class="modal-title">Create Event</h4>
		<form method="POST" action="#">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" class="form-control" name="band" id="band" placeholder="Band">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="venue" id="venue" placeholder="Venue">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="time" id="time" placeholder="Time">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="price" id="price" placeholder="price">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="venue" id="venue" placeholder="Venue">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="tickets" id="tickets" placeholder="Ticket Purchase Location">
			</div>

			<button type="submit" class ="btn btn-primary pull-right">Create</button>
		</form>
	</div>
</div>
@stop