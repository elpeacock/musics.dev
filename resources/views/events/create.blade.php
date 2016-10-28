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
									@foreach ($bands as $band_id => $value)
								<option value="{{ $band_id }}">{{ $value->name }}</option>
									@endforeach
			</select>
							<input type="submit" value="Submit">
			</div>
			{{-- <div class="form-group">
									@foreach ($venue as $venue_id => $value)
								<option value="{{ $venue_id }}">{{ $value->name }}</option>
									@endforeach
			</select>
					<input type="submit" value="Submit">
			</div> --}}
			<div class="form-group">
				<input type="date" class="form-control" name="time" id="time" placeholder="Time">

			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="price" id="price" placeholder="price">

			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="tickets" id="tickets" placeholder="Ticket Purchase Location">

			</div>

			<button type="submit" class ="btn btn-primary pull-right">Create</button>
		</form>
	</div>
</div>
@stop
