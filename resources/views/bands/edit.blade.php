@extends('layouts.master')

@section('title', 'Edit Band')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<h4 class="modal-title">Create Event</h4>
			<form method="POST" action="#">
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
					<select>
					  <option value="genre">Genre</option>
					  <option value="genre">Genre</option>
					  <option value="genre">Genre</option>
					  <option value="genre">Genre</option>
					</select>
				</div>
				<div class="form-group">
					<input 
					type="text" 
					class="form-control" 
					name="description" 
					id="description" 
					placeholder="Description">
				</div>
				<div class="form-group">
					<input 
					type="text" 
					class="form-control" 
					name="image" 
					id="image" 
					placeholder="Image">
				</div>
				<button type="submit" class ="btn btn-primary pull-right">Create</button>
			</form>
		</div> {{-- close col-xs-8 col-xs-offset-2 --}}
	</div> {{-- close row --}}
</div> {{-- close container --}}

@stop