<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>
    <title>home</title>
</head>
<body>
<div class="wrap">
    <img src="img/img1/挑战.png" alt="" class="text1">
    <img src="img/img1/数钱速度.png" alt="" class="text2">
    <img src="img/img1/开始游戏.png" alt="" class="startBtn">
    <img src="img/img1/小手.png" alt="" class="startPoint">
    <div class="btnBg">
        <img src="img/img1/数钱榜.png" alt="" class="btn1 btn0"><img class="btn2 btn0" src="img/img1/活动规则.png" alt=""><img class="btn3 btn0" src="img/img1/活动奖品.png" alt=""><img class="btn4 btn0" src="img/img1/奖券使用说明.png" alt="">
    </div>
    <div class="userInfo">
        <img src="img/img1/资料关闭btn.png" class="close" alt="">
        <div class="fillInfo">
            <input type="text" placeholder="姓名" name="username" id="username">
            <input type="text" placeholder="电话" name="tel" id="tel">
            <button id="sbm"></button>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {

        //小手的动画
        setInterval(function () {
            $(".startPoint").animate({
                opacity: 1
            },1000,function () {
                $(this).css({
                    opacity: 0
                })
            });
        },1000);
//        function startPointMove() {
//            $(".startPoint").animate({
//                opacity: 1
//            },1000,function () {
//                $(this).css({
//                    opacity: 0
//                })
//            });
//            setTimeout(startPointMove(),2000);
//        }
//        startPointMove();

        //点击游戏开始
        $(".startBtn").on("click",function () {

            $(".userInfo").css({
                display : "block"
            })

        })






    })
</script>
</body>
</html>
