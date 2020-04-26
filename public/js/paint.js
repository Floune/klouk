$(document).ready(function() {
    var canvas = document.getElementById('paint');
    if (canvas.getContext) {
        var ctx = canvas.getContext('2d');
    }

    let mouseClicked = false;
    let mouseReleased = true;

    document.addEventListener("click", onMouseClick, false)
    document.addEventListener("mousemove", onMouseMove, false)

    function onMouseClick(e) {
        mouseClicked = !mouseClicked;
    }

    function onMouseMove(e) {
        if (mouseClicked) {
            ctx.beginPath();
            let x = e.pageX - $('.paint').offset().left - 10;
            let y = e.pageY - $('.paint').offset().top - 30;
            ctx.arc(x, y, 7.5, 0, Math.PI * 2, false);
            ctx.lineWidth = 5;
            ctx.strokeStyle = "blue";
            ctx.stroke()
        }
    }
});
