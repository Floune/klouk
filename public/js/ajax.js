$(document).ready(function() {


    $(".defav").on("click", function() {
        let payload = {
            va: $(".av").val(),
            type: "defav",
        };
        $.post("fav", payload);
    });

    $(".fav").on("click", function() {
        let payload = {
            va: $(".va").val(),
            type: "fav",
        };
        $.post("fav", payload);
    });

    $(".sendaiku").on("click", function() {
        let payload = {
            debut: $(".input1").val(),
            milieu: $(".input2").val(),
            fin: $(".input3").val(),
        };
        $.post("haiku", payload)
    })

});
