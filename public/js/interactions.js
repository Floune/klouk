$(document).ready(function() {
    $(".haiku2000").hide();
    $(".processus-creatif").hide();
    $(".hof").hide();
    $(".hos").hide();
    $(".popup").hide();
    $(".paint").hide();

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

    $("#icon-paint").dblclick(function() {
        $('.paint').css({top:'50%',left:'50%',margin:'-'+($('#myDiv').height() / 2)+'px 0 0 -'+($('#myDiv').width() / 2)+'px'});
        $(".paint").show();

    });
    $(".close-paint").on("click", function() {
        $(".paint").hide();
    });

    $(".close-popup").on("click", function() {
        $(".popup").hide();
    });
});
