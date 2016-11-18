<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>旋风赛车</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        html,body,#allGame{
            width: 100%;
            height:100%;
        }
        .timerClock{
            width:36%;
            height:12%;
            position: absolute;
            left: 2%;
            top:1%;


            text-align: right;
            background: url("img/timerClock.png") no-repeat;
            background-size: 100% 100%;
            z-index: 99;
        }
        .timerClockP{
            width: 100%;
            height:30%;
            color: white;
            font-size: 1em;
            position: absolute;
            top:52%;
            left:-12%;
        }
        .starting_line{
            width:83.333333%;
            height:8%;
            position: absolute;
            left: 9.16666%;
            top:52.52173%;
            z-index: 99;
        }
        .light{
            width:20%;
            height:28.17391%;
            position: absolute;
            left: 40.277777%;
            top:11.47826%;
            z-index: 99;
        }
        .ready{
            width:33.88888%;
            height:4.86956%;
            position: absolute;
            left: 33.61111%;
            top:42.43478%;
            z-index: 99;
        }

    </style>
</head>
<body>
<div id="allGame">
    <canvas id="canvas" width="" height="">
        低版本浏览器不支持
    </canvas>

    <!--计时器-->
    <div class="timerClock">
        <p class="timerClockP">
        <span class="score1">0</span>:<span class="score2">0</span>:<span class="score3">30</span>
        </p>
    </div>
    <!--起跑线-->
    <img src="img/starting_line.png" alt="" class="starting_line">
    <img src="" alt="" class="light">
    <img src="img/READY.png" alt="" class="ready">

    <img src="img/timerClock.png" alt="" >

</div>
<!--游戏开始-->
<script src="js/loading.js" type="text/javascript"></script>
<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");

    canvas.width = document.documentElement.clientWidth;
    canvas.height = document.documentElement.clientHeight;

    //调用，传入图片对象参数，图片处理函数
    loading({"racing":"img/racing.png","speedBtn0":"img/speedBtn0.png","speedBtn1":"img/speedBtn1.png","speedBtn2":"img/speedBtn2.png",
        "btn_right":"img/btn_right.png","btn_left":"img/btn_left.png","car0":"img/car0.png","car1":"img/car1.png",
        "light0":"img/light0.png","light1":"img/light1.png","light2":"img/light2.png","timerClock":"img/timerClock.png",
        "starting_line":"img/starting_line.png","roadblock":"img/roadblock.png","roadcar0":"img/roadcar0.png","roadcar1":"img/roadcar1.png",
        "roadcar2":"img/roadcar2.png"},
        function(a) {
            //图片加载的进度
//            console.log(a);
        },main
    );

    function main(imgobj) {

        /************主角车*************/
        var car = {
            img: imgobj.car0,
            w: canvas.width*0.1416666,
            h: canvas.height*0.1721739,
            x: canvas.width*0.430555,
            y: canvas.height*0.607

        };
        car.draw = function () {
            ctx.drawImage(this.img,this.x,this.y,this.w,this.h);
        };

        /************加速器*************/
        var speedBtn = {
            img: imgobj.speedBtn0,
            w: canvas.width*0.175,
            h: canvas.height*0.1617391,
            x: canvas.width*0.8138888,
            y: canvas.height*0.7495652

        };
        speedBtn.draw = function () {
            ctx.drawImage(this.img,this.x,this.y,this.w,this.h);
        };

        /************障碍物*************/
        var roadblock = {
            img: imgobj.speedBtn0,
            w: canvas.width*0.175,
            h: canvas.height*0.1617391,
            x: canvas.width*0.8138888,
            y: canvas.height*0.7495652
        };


        /************画布运动*************/

        //背景向下偏移量Y
        var moveY = 0;
        var lightCount = 0;
        var timerClocks = 30;

        //倒计时红绿灯
        function timerLight() {
            if (lightCount < 3){
                setTimeout(timerLight,1000);
                $(".light").attr("src","img/light"+lightCount+".png");
                lightCount++;

            }else {
                $(".light").css({display:"none"});
                $(".starting_line").css({display:"none"});
                $(".ready").css({display:"none"});
                timerClock();
            }
        }
        timerLight();

        //计时器
        function timerClock() {
            $(".score3").html(timerClocks);
            if (timerClocks > 0){
                setTimeout(timerClock,1000);
            }
            timerClocks--;
        }

        function run() {
            //清空画布
            ctx.clearRect(0,0,canvas.width,canvas.height);

            //1.背景图运动
            if (moveY == canvas.height){
                moveY=0;
            }
            moveY++;
            ctx.drawImage(imgobj.racing,0,-canvas.height+moveY,canvas.width,canvas.height);
            ctx.drawImage(imgobj.racing,0,moveY,canvas.width,canvas.height);

            //2.左右控制按钮
            ctx.drawImage(imgobj.btn_left,canvas.width*0.2152777,canvas.height*0.777391,canvas.width*0.2152777,canvas.height*0.1347826);
            ctx.drawImage(imgobj.btn_right,canvas.width*0.5722222,canvas.height*0.777391,canvas.width*0.2152777,canvas.height*0.1347826);

            //3.加速器
            speedBtn.draw();


            //3.主角车
            car.draw();

            setTimeout(run,10);
        }
        run();
    }

    //阻止手机的touchmove默认事件，防止页面可以拖动
    document.addEventListener("touchmove",function (e) {
        var e = e || window.event;
        e.preventDefault();
    },false);



</script>
</body>
</html>