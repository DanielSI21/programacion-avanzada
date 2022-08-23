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
        // var cv = null;
        // var ctx = null;
        // var press = false;

        // var super_x = 0, super_y = 200;
        
        // function run()
        // {
        //     cv = document.getElementById('mycanvas');
        //     ctx = cv.getContext('2d');
        //     paint();
        // }

        // function paint(){

        //     window.requestAnimationFrame(paint);

        //     ctx.fillStyle = "rgb(55, 55, 55)";
        //     ctx.fillRect(0,0, 500, 500);
        //     ctx.fillStyle = "red";
        //     ctx.fillRect(super_x, super_y, 40, 40);
        //     // ctx.strokeRect(super_x, super_y, 40, 40);

        //     super_x+=5;

        //     if (super_x>500){
        //         super_x = 0;
        //     }
        // }
        
        // window.requestAnimationFrame = (function () {
        //     return window.requestAnimationFrame ||
        //     window.webkitRequestAnimationFrame ||
        //     window.mozRequestAnimationFrame ||
        //     function (callback) {
        //         window.setTimeout(callback, 17);
        // };

        // }());

        // window.addEventListener('load',run,false);

        //actividad 22
        var cv = null;
        var ctx = null;
        var press = false;
        var player_1 = null;
        var player_2 = null;
        var direction = 'right';
        var score = 0;
        var speed = 10;

        var super_x = 0, super_y = 200;
        
        function run()
        {
            cv = document.getElementById('mycanvas');
            ctx = cv.getContext('2d');

            player_1 = new Cuadro(super_x, super_y, 40, 40, "red");
            player_2 = new Cuadro(super_x, super_y+100, 40, 40, "blue");

            paint();
        }

        function paint(){

            window.requestAnimationFrame(paint);

            ctx.fillStyle = "rgb(55, 55, 55)";
            ctx.fillRect(0,0, 500, 500);

            ctx.font = "20px Arial";
            ctx.fillStyle = "black";
            ctx.fillText("Score: " + score, 20, 20);

            //player 1
            player_1.pintar(ctx);

            //player 2
            player_2.pintar(ctx);

            update();

        }

        function update()
        {
            if (direction == 'up'){
                player_2.y-=speed;
                if (player_2.y<0){
                    player_2.y = 500;
                }
            }
            if (direction == 'down'){
                player_2.y+=speed;
                if (player_2.y>500){
                    player_2.y = 0;
                }
            }
            if (direction == 'left'){
                player_2.x-=speed;
                if (player_2.x<0){
                    player_2.x = 500;
                }
            }
            if (direction == 'right'){
                player_2.x+=speed;
                if (player_2.x>500){
                    player_2.x = 0;
                }
            }    

            if (player_1.se_tocan(player_2)){
                score += 10;
                speed ++;
                player_1.borrar();
            }
        }
        
        function Cuadro(x,y,w,h,c)
        {
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;

            this.pintar = function(ctx){
                ctx.fillStyle = this.c;
                ctx.fillRect(this.x, this.y, this.w, this.h);
                ctx.strokeRect(this.x, this.y, this.w, this.h);
            }

            this.se_tocan = function (target) { 
                if(this.x < target.x + target.w && this.x + this.w > target.x && 
                   this.y < target.y + target.h && this.y + this.h > target.y){
                    return true;	
                }else{
                    return false;
                }
            };

            this.borrar = function (){
                this.x = Math.floor(Math.random() * (500 - 0) + 1);
                this.y = Math.floor(Math.random() * (500 - 0) + 1);
            };
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

        document.addEventListener('keydown', function(e){
            console.log(e);
            if (e.key == "ArrowUp"){
                // player_2.y-=7;
                direction = 'up';
            }
            if (e.key == "ArrowDown"){
                // player_2.y+=7;
                direction = 'down';
            }
            if (e.key == "ArrowLeft"){
                // player_2.x-=7;
                direction = 'left';
            }
            if (e.key == "ArrowRight"){
                // player_2.x+=7;
                direction = 'right';
            }               
        });

    </script>
</body>
</html>
