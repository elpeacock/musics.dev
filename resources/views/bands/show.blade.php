@extends('layouts.master')

@section('title', 'Band')

@section('content')
<div class="container">
    <div class="fb-profile">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="bandContainer"><div class="bandImg" id="image"></div>
    </div>
    <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
        <div class="fb-profile-text">
            <h1>{{$bands->name}}</h1>
            <h4>Description</h4>
            <p>{{$bands->description}}</p>
            <h4>Genre ID</h4>
            <p>{{$bands->genre_id}}</p>
        </div>
    </div>
    </div>
</div> <!-- /container -->  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</script>

    <script type="text/javascript">
    $(function() {
        var params = {
            // Request parameters
        };
      
        $.ajax({
            url: "https://api.cognitive.microsoft.com/bing/v5.0/images/search?q={{$bands->name}}" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","multipart/form-data");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","230e87a2adcf434ba83a30ea5b633f2f");
            },
            type: "POST",
            // Request body
            data: "{body}",
        })
        .done(function(data) {
          console.log(data);
          console.log(data.value[0].webSearchUrl);
          $img = data.value[0].contentUrl
          var imageSpace = "" 
           imageSpace += "<img src=" + $img +">"
        $(".bandImg").html(imageSpace);

            // alert("success");
        })
        .fail(function() {
            // alert("error");
        });
    });
</script>
@stop
