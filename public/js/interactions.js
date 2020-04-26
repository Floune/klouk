$(document).ready(function() {
    $(".haiku2000").hide();
    $(".processus-creatif").hide();
    $(".hof").hide();
    $(".hos").hide();
    $(".popup").hide();
    $(".paint").hide();

    $("#icon-haiku").dblclick(function() {
        $(".haiku2000").show();
        $(".haiku2000").center();
    });
    $(".close-haiku").on("click", function() {
        $(".haiku2000").hide();
    });

    $("#icon-idea").dblclick(function() {
        $(".processus-creatif").show();
        $(".processus-creatif").center();
    });
    $(".close-processus").on("click", function() {
        $(".processus-creatif").hide();
    });

    $("#icon-fame").dblclick(function() {
        $(".hof").show();
        $(".hof").center();
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
        $(".paint").show();
        $('.paint').center();

    });
    $(".close-paint").on("click", function() {
        $(".paint").hide();
    });

    $(".close-popup").on("click", function() {
        $(".popup").hide();
    });
});
jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
        $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
        $(window).scrollLeft()) + "px");
    return this;
}
