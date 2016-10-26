@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-xs-6 col-xs-offset-3">
		<h4 class="modal-title">Log In</h4>
		<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" class="form-control" name="email" id="email" placeholder="email">

			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" id="password" placeholder="password">

			</div>
			<div class="form-group">
				<a href="#">reset password</a>
			</div>
			<button type="submit" class ="btn btn-primary pull-right">log in</button>
		</form>
	</div>
</div>
@stop
<html>
  <head>
    <link href="path/to/multiselect.css" media="screen" rel="stylesheet" type="text/css">
  </head>
  <body>
    <select multiple="multiple" id="my-select" name="my-select[]">
      <option value='elem_1'>elem 1</option>
      <option value='elem_2'>elem 2</option>
      <option value='elem_3'>elem 3</option>
      <option value='elem_4'>elem 4</option>
      ...
      <option value='elem_100'>elem 100</option>
    </select>
    <script src="path/to/jquery.multi-select.js" type="text/javascript"></script>
  </body>
</html>
