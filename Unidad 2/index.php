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
</head>
<body>
    <canvas id="mycanvas" width="500" height="500">
        Mensajeeee
    </canvas>

    <script type="text/javascript">
        var cv = document.getElementById('mycanvas');
        var ctx = cv.getContext('2d');

        //actividad 1
        ctx.fillStyle = "rgb(0,0,200)";
        ctx.fillRect(10,10,55,55);
        ctx.fillStyle = "rgb(200,0,0)";
        ctx.fillRect(40,40, 55,55);

        ctx.fillStyle = "rgba(255,0,128,0.5)";
        ctx.fillRect(70,70, 55,55);

        //actividad 2 - lineas y triangulo
        // ctx.moveTo(250,180);
        // ctx.lineTo(350,230)
        // ctx.stroke();
        // //figura
        // ctx.fillStyle = "rgba(255,0,128,0.5)";
        // ctx.moveTo(240,240);
        // ctx.lineTo(350,350)
        // ctx.lineTo(260,350)
        // ctx.lineTo(240,240)
        // ctx.stroke();
        // ctx.fill();

        //actividad 3 - circulos
        ctx.strokeStyle = "rgba(255,0,128,0.5)";
        ctx.beginPath();
        ctx.arc(300, 60, 50, 0, 2*Math.PI);
        ctx.stroke();

        //actividad 3 - circulos
        ctx.fillStyle = "rgb(200,0,0)";
        ctx.beginPath();
        ctx.arc(420, 60, 50, 0, 2*Math.PI);
        ctx.fill();


    </script>
</body>
</html>
