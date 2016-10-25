@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<img class="img img-thumbnail" src="{{ $user->avatar }}" height="150" width="150">
			<h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
		</div>
	</div>
</div>
@stop
