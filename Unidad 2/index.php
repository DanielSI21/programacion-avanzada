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
        var cv = document.getElementById('mycanvas');
        var ctx = cv.getContext('2d');

        //actividad 2
        // ctx.fillStyle = "rgb(0,0,200)";
        // ctx.fillRect(10,10,55,55);
        // ctx.fillStyle = "rgb(200,0,0)";
        // ctx.fillRect(40,40, 55,55);

        // ctx.fillStyle = "rgba(255,0,128,0.5)";
        // ctx.fillRect(70,70, 55,55);

        //actividad 3 - lineas y triangulo
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

        //actividad 4 - circulos
        // ctx.strokeStyle = "rgba(255,0,128,0.5)";
        // ctx.beginPath();
        // ctx.arc(300, 60, 50, 0, 2*Math.PI);
        // ctx.stroke();

        // //actividad 4 - circulos
        // ctx.fillStyle = "rgb(200,0,0)";
        // ctx.beginPath();
        // ctx.arc(420, 60, 50, 0, 2*Math.PI);
        // ctx.fill();

        //actividad 5 - texto
        // ctx.fillStyle = "rgb(255,0,0)";
        // ctx.strokeStyle = "rgb(255,0,0)";
        // ctx.font = "50px Arial";
        // ctx.fillText("Hola mundo", 10, 50);
        // ctx.strokeText("Texto 2", 10, 110);

        //actividad 5 -gradiantes
       
        // var grd = ctx.createLinearGradient(0, 0, 500,0);
        // grd.addColorStop(0, "orange");
        // grd.addColorStop(1, "purple");

        // ctx.fillStyle = grd;
        // ctx.fillRect(50,50, 400, 400);

        //actividad 7 - gradiantes
        // var grd = ctx.createRadialGradient(150, 70, 5, 150, 70, 100);
        // grd.addColorStop(0, "red");
        // grd.addColorStop(1, "white");

        // ctx.fillStyle = grd;
        // ctx.fillRect(55, 20, 200, 100);

        //actividad 9 - imagen
        // var img = document.getElementById('imagen');
        // ctx.drawImage(img, 150, 150, 200, 200);

        //actividad 10 circulos ??


        //actividad 12 circulos azules
        // cv.addEventListener('click', function(e){
        //     let x = e.offsetX;
        //     let y = e.offsetY;
        //     ctx.fillStyle = "rgba(0,0,200, 0.3)";
        //     ctx.beginPath();
        //     ctx.arc(x, y, 40, 0, 2*Math.PI);
        //     ctx.fill();
        //     ctx.strokeStyle = "rgb(0,0,0)";
        //     ctx.stroke();
        // });

        //actividad 13 circulos
        let r = 255;
        let g = 255;
        let b = 255;
        let color = "rgba(" + r + "," + g + "," + b + ", 0.3)";

        cv.addEventListener('click', function(e){
            let x = e.offsetX;
            let y = e.offsetY;
            ctx.beginPath();
            ctx.arc(x, y, 40, 0, 2*Math.PI);
            ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 0.3)";
            ctx.fill();
            ctx.strokeStyle = "rgb(0,0,0)";
            ctx.stroke();
        });

        cv.addEventListener('mouseover', function(e){
            r = Math.floor(Math.random() * (255 - 0) + 1);
            g = Math.floor(Math.random() * (255 - 0) + 1);
            b = Math.floor(Math.random() * (255 - 0) + 1);
        });

        
        // pruebas
        // cv.onmousemove = function(e){
        //     r = Math.floor(Math.random() * (255 - 0) + 1);
        //     g = Math.floor(Math.random() * (255 - 0) + 1);
        //     b = Math.floor(Math.random() * (255 - 0) + 1);
        // }

        // cv.onmousemove = function(e){
        //     x = e.pageX;
        //     y = e.pageY;
        //     let r = Math.floor(Math.random() * (255 - 0) + 1);
        //     let g = Math.floor(Math.random() * (255 - 0) + 1);
        //     let b = Math.floor(Math.random() * (255 - 0) + 1);
        //     ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 0.3)";
        //     ctx.beginPath();
        //     ctx.arc(x, y, 40, 0, 2*Math.PI);
        //     ctx.fill();
        //     ctx.strokeStyle = "rgb(0,0,0)";
        //     ctx.stroke();
        // }


    </script>
</body>
</html>
