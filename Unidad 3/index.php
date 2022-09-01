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
        // var cv = document.getElementById('mycanvas');
        // var ctx = cv.getContext('2d');

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
        // let r = 255;
        // let g = 255;
        // let b = 255;
        // let color = "rgba(" + r + "," + g + "," + b + ", 0.3)";

        // cv.addEventListener('click', function(e){
        //     let x = e.offsetX;
        //     let y = e.offsetY;
        //     ctx.beginPath();
        //     ctx.arc(x, y, 40, 0, 2*Math.PI);
        //     ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 0.3)";
        //     ctx.fill();
        //     ctx.strokeStyle = "rgb(0,0,0)";
        //     ctx.stroke();
        // });

        // cv.addEventListener('mouseover', function(e){
        //     r = Math.floor(Math.random() * (255 - 0) + 1);
        //     g = Math.floor(Math.random() * (255 - 0) + 1);
        //     b = Math.floor(Math.random() * (255 - 0) + 1);
        // });

        //actividad 14

        // let r = 255;
        // let g = 255;
        // let b = 255;
        // var fig = 'arc';
        // let color = "rgba(" + r + "," + g + "," + b + ", 0.3)";

        // cv.addEventListener('click', function(e){
        //     let x = e.offsetX;
        //     let y = e.offsetY;
        //     ctx.beginPath();
        //     ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 0.3)";
        //     ctx.strokeStyle = "rgb(0,0,0)";

        //     if (fig == 'arc'){
        //         ctx.arc(x, y, 40, 0, 2*Math.PI);
        //         ctx.fill();
        //         ctx.stroke();
        //     }else{
        //         ctx.fillRect(x, y, 80, 80);
        //         ctx.strokeRect(x, y, 80, 80);
        //     }
        //     console.log(fig);
        // });

        // cv.addEventListener('mouseover', function(e){
        //     r = Math.floor(Math.random() * (255 - 0) + 1);
        //     g = Math.floor(Math.random() * (255 - 0) + 1);
        //     b = Math.floor(Math.random() * (255 - 0) + 1);
        // });

        // cv.addEventListener('mouseout', function(e){
        //     fig = (fig=='arc') ? 'rec': 'arc';
        // });

        //pruebas
        // // cv.onmousemove = function(e){
        // //     r = Math.floor(Math.random() * (255 - 0) + 1);
        // //     g = Math.floor(Math.random() * (255 - 0) + 1);
        // //     b = Math.floor(Math.random() * (255 - 0) + 1);
        // // }

        //actividad 15
        // let r = 255;
        // let g = 255;
        // let b = 255;
        // var fig = 'arc';
        // let color = "rgba(" + r + "," + g + "," + b + ", 0.3)";

        // cv.addEventListener('click', function(e){
        //     let x = e.offsetX;
        //     let y = e.offsetY;
        //     ctx.beginPath();
        //     ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 0.3)";

        //     if (fig == 'arc'){
        //         ctx.arc(x, y, 40, 0, 2*Math.PI);
        //         ctx.fill();
        //         ctx.stroke();
        //     }else{
        //         ctx.strokeRect(x-40, y-40, 80, 80);
        //         ctx.fillRect(x-40, y-40, 80, 80);
        //     }
        // });

        // cv.onmousemove = function(e){
        //     r = Math.floor(Math.random() * (255 - 0) + 1);
        //     g = Math.floor(Math.random() * (255 - 0) + 1);
        //     b = Math.floor(Math.random() * (255 - 0) + 1);
        //     fig = (fig=='arc') ? 'rec': 'arc';
        //     x = e.pageX;
        //     y = e.pageY;
        //     ctx.fillStyle = "black";
        //     ctx.beginPath();
        //     ctx.fillRect(x, y, 5, 5);
        //     ctx.stroke();
        //     ctx.fill();
        // }

        //actividad 16
        // let r = 255;
        // let g = 255;
        // let b = 255;
        // var fig = 'arc';
        // var press = false;
        // let color = "rgba(" + r + "," + g + "," + b + ", 0.3)";

        // cv.addEventListener('click', function(e){
        //     let x = e.offsetX;
        //     let y = e.offsetY;
        //     ctx.beginPath();
        //     ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 0.3)";

        //     if (fig == 'arc'){
        //         ctx.arc(x, y, 40, 0, 2*Math.PI);
        //         ctx.fill();
        //         ctx.stroke();
        //     }else{
        //         ctx.strokeRect(x-40, y-40, 80, 80);
        //         ctx.fillRect(x-40, y-40, 80, 80);
        //     }
        // });

        // cv.onmousemove = function(e){
        //     r = Math.floor(Math.random() * (255 - 0) + 1);
        //     g = Math.floor(Math.random() * (255 - 0) + 1);
        //     b = Math.floor(Math.random() * (255 - 0) + 1);
        //     fig = (fig=='arc') ? 'rec': 'arc';
        //     x = e.pageX;
        //     y = e.pageY;
        //     if (press){
        //         ctx.fillStyle = "black";
        //         ctx.fillRect(x, y, 5, 5);
        //     }
        // }

        // cv.addEventListener('mousedown', function(e){
        //     press = true;
        // });

        // cv.addEventListener('mouseup', function(e){
        //     press = false;
        // });

        //actividad 17
        // var super_x = 0, super_y = 0;
        
        // document.addEventListener('keydown', function(e){
        //     console.log(e);
        //     if (e.key == "ArrowUp" || e.key == "w"){
        //         super_y-=7;
        //     }
        //     if (e.key == "ArrowDown" || e.key == "s"){
        //         super_y+=7;
        //     }
        //     if (e.key == "ArrowLeft" || e.key == "a"){
        //         super_x-=7;
        //     }
        //     if (e.key == "ArrowRight" || e.key == "d"){
        //         super_x+=7;
        //     }       
        //     paint();          
        // });

        // function paint(){
        //     ctx.fillStyle = "rgb(55, 55, 55)";
        //     ctx.fillRect(0,0, 500, 500);
        //     ctx.fillStyle = "red";
        //     ctx.fillRect(super_x, super_y, 40, 40);
        //     ctx.strokeRect(super_x, super_y, 40, 40);
        //     // var img = document.getElementById('imagen');
        //     // ctx.drawImage(img, super_x, super_y, 100, 100);
        // }

        //actividad 18
        // cv.addEventListener('click', function(e){
        //     let x = e.offsetX;
        //     let y = e.offsetY;
        //     let texto = x + "," + y;
        //     ctx.fillStyle = "rgb(0,0,0)";
        //     ctx.font = "10px Arial";
        //     ctx.fillText(texto, x, y);
        // });

        //actividad 18 y 19
        // var super_x = 200, super_y = 110;
        // var super_color = "rgb(243, 207, 187)";
        // var super_size = 30;
        
        // document.addEventListener('keydown', function(e){
        //     console.log(e);
        //     if (e.key == "ArrowUp"){
        //         super_y-=7;
        //     }
        //     if (e.key == "ArrowDown"){
        //         super_y+=7;
        //     }
        //     if (e.key == "ArrowLeft"){
        //         super_x-=7;
        //     }
        //     if (e.key == "ArrowRight"){
        //         super_x+=7;
        //     }
        //     if (e.key == "a"){
        //         super_color = "rgb(135, 206, 235)";
        //     } 
        //     if (e.key == "c"){
        //         super_color = "rgb(165, 126, 110)";
        //     } 
        //     if (e.key == "n"){
        //         super_color = "rgb(231, 215, 190)";
        //     }
        //     if (e.key == "v"){
        //         super_color = "rgb(141, 182, 0)";
        //     }  
        //     if (e.key == "y"){
        //         super_color = "rgb(255, 255, 0)";
        //     }  
        //     if (e.key == "m"){
        //         super_color = "rgb(14, 77, 146)";
        //     }
        //     if (e.key == "b"){
        //         super_color = "rgb(255, 255, 255)";
        //     }    
        //     if (e.key == "t"){
        //         super_size = 7;
        //     }
        //     if (e.key == "y"){
        //         super_size = 10;
        //     }
        //     if (e.key == "u"){
        //         super_size = 20;
        //     }  
        //     if (e.key == "i"){
        //         super_size = 30;
        //     }
        //     if (e.key == "o"){
        //         super_size = 50;
        //     }      
        //     if (e.key == "g"){
        //         super_color = "rgb(50, 50, 50)";
        //     }                   
        //     paint();          
        // });

        // function paint(){
        //     ctx.fillStyle = "rgb(55, 55, 55)";
        //     // ctx.fillRect(0,0, 500, 500);
        //     ctx.fillStyle = super_color;
        //     ctx.fillRect(super_x, super_y, super_size, super_size);
        //     // ctx.strokeRect(super_x, super_y, 40, 40);
        //     // var img = document.getElementById('imagen');
        //     // ctx.drawImage(img, super_x, super_y, 100, 100);
        // }

        // cv.addEventListener('click', function(e){
        //     let x = e.offsetX;
        //     let y = e.offsetY;
        //     ctx.beginPath();
        //     ctx.fillStyle = "red";
        //     ctx.fillRect(super_x, super_y, 40, 40);
        // });

        //actividad 20
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
