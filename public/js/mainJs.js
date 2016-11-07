"use strict"

$(document).ready(function() {

	//toggles the navbar
    $("#toggler").click(function() {
        if($(".nav-top:first").is(":hidden")) {
            $(".nav-top").slideDown();  
        } else {
            $(".nav-top").hide();
        }
    });
    
});