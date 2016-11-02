<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')</title>
    {{-- fontawesome --}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- bootstrap --}}
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- bootstrap select plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
    {{-- custom css --}}
    <link rel="stylesheet" type="text/css" href="/css/mainCss.css">
    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Caudex:400,400i|Federo" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
  	@include('layouts.partials.navbar')
    <div class="container">


    	@yield('content')
      </div>
  </div>
  <div id="push"></div>

    @include('layouts.partials.footer')

    {{-- bootstrap jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    {{-- bootstrap js --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- bootstrap select plug-in JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
    {{-- custom JS --}}
    <script src="/js/mainJs.js" type="text/javascript"></script>

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
