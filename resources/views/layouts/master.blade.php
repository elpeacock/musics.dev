<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/mainCss.css">
</head>
<body>
	@include('layouts.partials.navbar')


    	@yield('content')

    @include('layouts.partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--   <script>  $(window).scroll(function() {
if ($(document).scrollTop() > 150) {
    alert('hi');
$('.logo').height(200);

}
else {
$('.logo').height(100);
}
});
</script> --}}
</body>
</html>
