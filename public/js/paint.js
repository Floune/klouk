$(document).ready(function() {
    var canvas = document.getElementById('paint');
    if (canvas.getContext) {
        var ctx = canvas.getContext('2d');
    }
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    let color = "black";
    let mouseClicked = false;
    let mouseReleased = true;

    $("#paint").on("click", function() {
        mouseClicked = !mouseClicked;
    });

    $("#paint").on("mousemove", function(e) {
        if (mouseClicked) {
            ctx.beginPath();
            let x = e.pageX - $('.paint').offset().left;
            let y = e.pageY - $('.paint').offset().top;
            ctx.arc(x, y, 7.5, 0, Math.PI * 2, false);
            ctx.lineWidth = $("#grosseur").val();
            if (color === "random"){
                ctx.strokeStyle = megaColor();
            } else {
                ctx.strokeStyle = color;
            }
            ctx.stroke()
        }
    });

    function megaColor() {
        let chars = "0123456789ABCDEF";
        let cbow = '#';
        for (let i = 0; i < 6; i++){
            cbow += chars[Math.floor(Math.random() * 16)]
        }
        return cbow;
    }

    $(".erase").on("click", function () {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "white";
        ctx.fillRect(0, 0, canvas.width, canvas.height);
    });

    $(".red").on("click", function() {
        color = "red";
        clearButtons();
        $(".red").css("background-color", "red");
    });
    $(".blue").on("click", function() {
        color = "blue";
        clearButtons()
        $(".blue").css("background-color", "blue");
    });
    $(".green").on("click", function() {
        color = "green"
        clearButtons()
        $(".green").css("background-color", "green");
    });
    $(".yellow").on("click", function() {
        color = "yellow"
        clearButtons()
        $(".yellow").css("background-color", "yellow");
    });
    $(".random").on("click", function() {
        color = "random";
        clearButtons()
        $(".random").css("background-color", megaColor());
    });

    function clearButtons() {
        $(".couleur").css("background-color", "#C0C0C0");
    }
});
