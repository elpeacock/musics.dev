"use strict"

$(document).ready(function() {

    $("#toggler").click(function() {

        if($(".nav-top:first").is(":hidden")) {

            $(".nav-top").slideDown();

        } else if($(".nav-top:visible")) {

            $("#toggler").hide();
            
        } else {

            $(".nav-top").hide();
        }

    });



    
});