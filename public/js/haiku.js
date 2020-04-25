$(document).ready(function() {

    $(".haiku").on("click", function() {
       $.get('haiku', function(response) {
           $(".debut").text(response[0][0]);
           $(".milieu").text(response[1][0]);
           $(".fin").text(response[2][0]);

           //remplis les valeurs des inputs de favoris au cas où c'est bien ou pas
           $(".va").val(response[0][0] + ', ' + response[1][0] + ', ' + response[2][0]);
           $(".av").val(response[0][1] + '' + response[1][1] + '' + response[2][1]);
           $(".av-txt").val(response[0][0] + ', ' + response[1][0] + ', ' + response[2][0]);
       });
    });

});
