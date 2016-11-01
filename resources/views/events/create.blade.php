@extends('layouts.master')

@section('title', 'Create Event')

@section('content')
<div class="row">
	<div class="col-xs-3">
		{{-- <img class="img img-thumbnail" src="{{ $user-> }}" height="150" width="150"> --}}
	</div>
		<div class="container">
		<h2>Create Event</h2>
		<form method="POST" action="{{ action('EventsController@store') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<h4 class="modal-title">Add band/bands</h4>
				<select class="selectpicker" name="band">
							@foreach ($bands as $band)
								<option value="{{ $band->id }}">{{ $band->name }}</option>
							@endforeach
			</select>
			</div>

			<div class="form-group">
					<h4 class="modal-title">Add a venue</h4>
					<select class="selectpicker" name="venue">
							@foreach ($venues as $venue)
								<option value="{{ $venue->id }}">{{ $venue->name }}</option>
							@endforeach
					</select>
			</div>

			<div class="form-group">
				<h4 class="modal-title">Add a event time</h4>
				<input type="datetime-local" class="form-control" name="time" id="time" placeholder="Time">
			</div>

			<div class="form-group">
				<h4 class="modal-title">Add a price</h4>
				<input type="text" class="form-control" name="price" id="price" placeholder="price">
			</div>

			<div class="form-group">
				<h4 class="modal-title">Ticket URL</h4>
				<input type="text" class="form-control" name="buy_tickets" id="tickets" placeholder="ticket URL">
			</div>

			<button type="submit" class ="btn btn-primary pull-right">Create</button>
		</form>
		</div>
</div>
@stop
