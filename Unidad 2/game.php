<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Canvas
    </title>
    <style type="text/css">
        canvas{
            background-color: rgb(200, 200, 200);
        }
    </style>
    <img id="imagen" src="icon-game.png" style="display:none">
</head>
<body>
    <canvas id="mycanvas" width="500" height="500">
        Mensajeeee
    </canvas>

    <script type="text/javascript">
        //actividad 21
        var cv = null;
        var ctx = null;
        var press = false;

        var super_x = 0, super_y = 200;
        
        function run()
        {
            cv = document.getElementById('mycanvas');
            ctx = cv.getContext('2d');
            paint();
        }

        function paint(){

            window.requestAnimationFrame(paint);

            ctx.fillStyle = "rgb(55, 55, 55)";
            ctx.fillRect(0,0, 500, 500);
            ctx.fillStyle = "red";
            ctx.fillRect(super_x, super_y, 40, 40);
            // ctx.strokeRect(super_x, super_y, 40, 40);

            super_x+=5;

            if (super_x>500){
                super_x = 0;
            }
        }
        
        window.requestAnimationFrame = (function () {
            return window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function (callback) {
                window.setTimeout(callback, 17);
        };

        }());

        window.addEventListener('load',run,false);

    </script>
</body>
</html>
