"use strict"

$(document).ready(function() {

    // js for favorites selection
    $('#getPreferences').click(function(e) {
        e.preventDefault();

        var soul = $('.soul').selectpicker('val');
        var rockpop = $('.rockpop').selectpicker('val');
        var altrock = $('.altrock').selectpicker('val');
        var rap = $('.rap').selectpicker('val');
        var country = $('.country').selectpicker('val');
        var jazz = $('.jazz').selectpicker('val');
        var metal = $('.metal').selectpicker('val');
        var dance = $('.dance').selectpicker('val');
        var indie = $('.indie').selectpicker('val'); 

        var userPrefs = soul.concat(rockpop, altrock, rap, country, jazz, metal, dance, indie);

        sendUserPrefs(userPrefs);

    });

    function sendUserPrefs() {
        $.ajax({
            url: 'UserController@storeUserFavorites', 
            type: 'POST', 
            data: {data : userPrefs}, 
            dataType: 'text', 
            success: function() {
                console.log('favorites sent');
            };
        });

    };

});