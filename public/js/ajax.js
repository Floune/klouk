$(document).ready(function() {

    $(".defav").on("click", function() {
        let payload = {
            va: $(".av").val(),
            type: "defav",
        };
        $.post("fav", payload);
        $(".debut").text('');
        $(".milieu").text('');
        $(".fin").text('');
        $(".popup").show();
    });

    $(".fav").on("click", function() {
        let payload = {
            va: $(".va").val(),
            type: "fav",
        };
        $.post("fav", payload);
        $(".debut").text('');
        $(".milieu").text('');
        $(".fin").text('');
        $(".popup").show();
    });

    $(".sendaiku").on("click", function() {
        let payload = {
            debut: $(".input1").val(),
            milieu: $(".input2").val(),
            fin: $(".input3").val(),
        };
        $.post("haiku", payload);
        $(".input1").val('');
        $(".input2").val('');
        $(".input3").val('');
        $(".popup").show();
    })

    $(".send-chat").on("click", function() {
        let payload = {
          text: $(".text").val(),
        };
        $.post("message", payload).done(function(data) {
            updateUI(data);
        });
        $(".text").val('');

    });

    function updateUI(data) {
        let html;
        $.each(data, function(d, cle) {
            html += "<p>"+cle.text+"</p>"
        });
        $(".msg").html(html);
    }

});
