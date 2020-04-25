$(document).ready(function() {

    $(".haiku").on("click", function() {
       $.get('haiku', function(response) {
           $(".debut").text(response[0]);
           $(".milieu").text(response[1]);
           $(".fin").text(response[2]);

           $(".va").val(response[0] + ',' + response[1] + ',' + response[2]);
           $(".va").val(response[0] + ',' + response[1] + ',' + response[2]);
       });
    });

    $('.hof').on("click", function() {
        $.get('fav', function(response) {
            console.log(response);
        });
    });

});
