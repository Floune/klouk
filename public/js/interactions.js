$(document).ready(function() {
    $(".haiku2000").hide();
    $(".processus-creatif").hide();
    $(".hof").hide();
    $(".hos").hide();


    $("#icon-haiku").dblclick(function() {
        $(".haiku2000").show();
    });
    $(".close-haiku").on("click", function() {
        $(".haiku2000").hide();
    });

    $("#icon-idea").dblclick(function() {
        $(".processus-creatif").show();
    });
    $(".close-processus").on("click", function() {
        $(".processus-creatif").hide();
    });

    $("#icon-fame").dblclick(function() {
        $(".hof").show();
    });
    $(".close-hof").on("click", function() {
        $(".hof").hide();
    });

    $("#icon-shame").dblclick(function() {
        $(".hos").show();
    });
    $(".close-hos").on("click", function() {
        $(".hos").hide();
    });


});
