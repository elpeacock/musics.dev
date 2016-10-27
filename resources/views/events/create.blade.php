@extends('layouts.master')

@section('title', 'Create Event')

@section('content')
<div class="row">
	<div class="col-xs-6 col-xs-offset-3">
		<h4 class="modal-title">Create Event</h4>
		<form method="POST" action="{{ action('EventsController@store') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<select>
					@foreach ($variable as $key => $value)
						<option></option>

					@endforeach
				</select>
				//include('forms.error', ['field' => 'band'])
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="venue" id="venue" placeholder="Venue">
				//include('forms.error', ['field' => 'venue'])
			</div>
			<div class="form-group">
				<input type="date" class="form-control" name="time" id="time" placeholder="Time">
				//include('forms.error', ['field' => 'time'])
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="price" id="price" placeholder="price">
				//include('forms.error', ['field' => 'price'])
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="tickets" id="tickets" placeholder="Ticket Purchase Location">
				//include('forms.error', ['field' => 'tickets'])
			</div>

			<button type="submit" class ="btn btn-primary pull-right">Create</button>
		</form>
	</div>
</div>
@stop
