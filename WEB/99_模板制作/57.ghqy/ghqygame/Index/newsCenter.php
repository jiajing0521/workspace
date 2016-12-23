<?
    header("Content-type:text/html;charset=utf8");
    $pdo = new PDO("mysql:host=localhost;dbname=ghqy","root","");
    $pdo->exec("set names utf8");
    $result = $pdo->query('SELECT * FROM ghqygame ORDER BY id DESC LIMIT 4');
    $arr = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>北京光合起源网络科技有限公司</title>
    <link rel="stylesheet" href="../Public/css/newsCenter/newsCenter.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        a{
            text-decoration: none;
        }

        ol,ul{
            list-style: none;
        }
        .d_header{
            top: 0;
            z-index: 1000;
            width: 100%;
            height: 76px;
            background: url('http://www.ghqygame.com/Public/ghpc/images/header.png') top left repeat-x;
            position: fixed;
        }
        .d_header_bottom{
            width: 100%;
            height: 9px;
            background: url('../Public/img/liu_img/header_bottom.png') top center no-repeat;
            position: absolute;
            top: 70px;
        }
        .d_w1000{
            width: 1000px;
            margin: 0 auto;
        }
        .d_logo{
            width: 156px;
            height: 56px;
            margin-top: 10px;
            float: left;
        }
        .nav{
            position: relative;
            float: right;
        }
        .nav a{
            width: 86px;
            height: 76px;
            line-height: 76px;
            text-align: center;
            float: left;
            font-size: 14px;
            color: #b3b3b3;
        }
        .nav a:hover{
            background-color: #000000;
        }
    </style>
</head>
<body>
    <!--头部-->
    <div class="d_header">
        <span class="d_header_bottom"></span>
        <div class="d_w1000">
            <a href="" class="d_logo">
                <img src="../Public/img/liu_img/logo.png" alt="">
            </a>
            <span class="nav">
                <a href="./index.html">首页</a>
                <a href="./about_us.html">关于我们</a>
                <a href="./newsCenter.php">新闻中心</a>
                <a href="./gameCenter.html">游戏中心</a>
                <a href="./joinUs.html">加入我们</a>
                <a href="./lastPage.html">联系我们</a>
            </span>
        </div>
    </div>
    <!--新闻中心-->
    <div class="d_news_number">
        <div class="d_w1000">
            <h2>新闻中心</h2>
        </div>
    </div>
    <!--轮播图-->
    <div class="d_w1200xw d_pt20">
        <div class="d_film_focus">
            <div class="d_film_focus_desc">
                <h3>周年庆！ 女主播与玩家迪士尼甜蜜互动</h3>
                <ul class="d-film_focus_nav">
                    <li class="d_cur">
                        <b>
                            <img src="../Public/img/newsCenter/5779d3a698c37%20(1).jpg" alt="">
                        </b>
                        <span>周年庆！ 女主播与玩家迪士尼甜蜜互动</span>
                    </li>
                    <li class="">
                        <b>
                            <img src="../Public/img/newsCenter/574ec1b1cc032.jpg" alt="">
                        </b>
                        <span>光合起源儿童节特别活动</span>
                    </li>
                    <li class="">
                        <b>
                            <img src="../Public/img/newsCenter/574c2a48e95e5.png" alt="">
                        </b>
                        <span>复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化</span>
                    </li>
                    <li class="">
                        <b>
                            <img src="../Public/img/newsCenter/574be8a6d4e5f.JPG" alt="">
                        </b>
                        <span>会当凌绝顶，一览众山小</span>
                    </li>
                    <li class="">
                        <b>
                            <img src="../Public/img/newsCenter/57205a3831cec.jpg" alt="">
                        </b>
                        <span>史上最傲娇小红帽！《有杀气童话》专属冷兔表情</span>
                    </li>
                </ul>
            </div>
            <div class="d_film_focus_imgs_wrap">
                <ul class="d_film_focus_imgs">
                    <li>
                        <a target="_blank" href="http://www.ghqygame.com/Index/news_show/id/40">
                            <img src="../Public/img/newsCenter/5779d3a698c37%20(1).jpg" alt="周年庆！ 女主播与玩家迪士尼甜蜜互动">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.ghqygame.com/Index/news_show/id/39">
                            <img src="../Public/img/newsCenter/574ec1b1cc032.jpg" alt="光合起源儿童节特别活动">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.ghqygame.com/Index/news_show/id/38">
                            <img src="../Public/img/newsCenter/574c2a48e95e5.png" alt="复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.ghqygame.com/Index/news_show/id/37">
                            <img src="../Public/img/newsCenter/574be8a6d4e5f.JPG" alt="会当凌绝顶，一览众山小">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.ghqygame.com/Index/news_show/id/36">
                            <img src="../Public/img/newsCenter/57205a3831cec.jpg" alt="史上最傲娇小红帽！《有杀气童话》专属冷兔表情">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d_w1200xw d_pt20">
        <div class="d_new_title">
            <a href="javascript:void(0)" class="d_active">所有新闻<span class="d_line"></span></a>
            <a href="javascript:void(0)" class="">公司新闻<span class="d_line"></span></a>
            <a href="javascript:void(0)" class="">行业新闻<span class="d_line"></span></a>
        </div>
        <div class="d_news_left d_new_list">
            <ul>
                <? for($i=0;$i<count($arr);$i++): ?>
                <li>
                    <a href="">
                        <img src="<? echo $arr[$i]["imgUrl"] ?>" width="185" height="114" alt="">
                    </a>
                    <span>
                        <h2>
                            <a href="">
                                <strong><? echo $arr[$i]["title"] ?></strong>
                            </a>
                        </h2>
                        <h2>
                            <a href="">
                                <? echo $arr[$i]["content"] ?>
                            </a>
                        </h2>
                        <h3><? echo $arr[$i]["date"] ?></h3>
                    </span>
                </li>
                <? endfor; ?>
            </ul>
            <div class="d_pages">
                <div>
                    <a class="d_next d_display" href="javascript:void(0)">上一页</a>
                    <a class="d_current" href="javascript:void(0)">1</a>
                    <a class='d_num' href="javascript:void(0)">2</a>
                    <a class='d_num' href="javascript:void(0)">3</a>
                    <a class='d_num' href="javascript:void(0)">4</a>
                    <a class='d_num' href="javascript:void(0)">5</a>
                    <a class='d_num' href="javascript:void(0)">6</a>
                    <a class="d_next" href="javascript:void(0)">下一页</a>
                </div>
            </div>
        </div>
        <!--热门资讯-->
        <div class="d_box d_fr">
            <p class="d_tit">
                <span class="d_mark">热门资讯</span>
                <a class="d_remark" href="" target="_blank">/更多</a>
            </p>
            <ul class="d_side-list">
                <li>
                    <span class="d_kind">公司</span>
                    <a href="http://www.ghqygame.com/Index/news_show/id/40" target="_blank">周年庆！ 女主播与玩家迪士尼甜蜜互动</a>
                </li>
                <li>
                    <span class="d_kind">公司</span>
                    <a href="http://www.ghqygame.com/Index/news_show/id/39" target="_blank">光合起源儿童节特别活动</a>
                </li>
                <li>
                    <span class="d_kind">行业</span>
                    <a href="http://www.ghqygame.com/Index/news_show/id/38" target="_blank">复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化</a>
                </li>
                <li>
                    <span class="d_kind">公司</span>
                    <a href="http://www.ghqygame.com/Index/news_show/id/37" target="_blank">会当凌绝顶，一览众山小</a>
                </li>
                <li>
                    <span class="d_kind">公司</span>
                    <a href="http://www.ghqygame.com/Index/news_show/id/36" target="_blank">史上最傲娇小红帽！《有杀气童话》专属冷兔表情</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="d_clear"></div>
    <!--底部-->
    <?
        require_once './footer.html';
    ?>
<script src='../Public/js/jquery-2.2.3.min.js' type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        var d_index = -1;
        var d_timer = null;
        var d_titleArr = ['周年庆！ 女主播与玩家迪士尼甜蜜互动','光合起源儿童节特别活动','复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化','会当凌绝顶，一览众山小','史上最傲娇小红帽！《有杀气童话》专属冷兔表情'];
        function timer() {
            clearInterval(d_timer);
            d_timer = setInterval(function () {
                d_index++;
                $('.d-film_focus_nav li').eq(d_index).attr('class','d_cur');
                $('.d-film_focus_nav li').eq(d_index-1).attr('class','');
                $('.d_film_focus_imgs').animate({
                    top:-350*d_index
                },500);
                $('.d_film_focus_desc h3').html(d_titleArr[d_index]);
                $('.d_film_focus_desc h3').animate({
                    height:0
                },800).animate({
                    height:45
                });
                if(d_index==4){
                    d_index=-1;
                }
            },3000);
        }
        timer();
        $('.d-film_focus_nav li').mouseover(function () {
            clearInterval(d_timer);
            $('.d-film_focus_nav li').attr('class','');
            $(this).attr('class','d_cur');
            $('.d_film_focus_desc h3').html(d_titleArr[$(this).index()]);
            $('.d_film_focus_imgs').animate({
                top:-350*$(this).index()
            },500);
        });
        $('.d-film_focus_nav li').mouseout(function () {
            $(this).attr('class','');
            $('.d-film_focus_nav li').eq(0).attr('class','d_cur');
            $('.d_film_focus_desc h3').eq(0).html('周年庆！ 女主播与玩家迪士尼甜蜜互动');
            timer();
        })
    })
</script>
<script type="text/javascript">
    $(function () {
        $('.d_new_title a').click(function () {
            $('.d_new_title a').attr('class','');
            $(this).attr('class','d_active');
        });
    })
</script>
<script type="text/javascript">
    $(function () {
        $(document).on('click',".d_pages div a",function () {
            if($(this).index()!=7 && $(this).index()!=0){
                $('.d_pages div a').attr('class','d_num');
                $(this).attr('class','d_current');
            }
            if($(this).index()==1){
               $('.d_pages div a') .eq(0).attr('class','d_next d_display')
            }
            if($(this).index()==6){
                $('.d_pages div a') .eq(7).attr('class','d_next d_display')
            }
            $.ajax({
                url:'newsCenterApi.php',
                type:'POST',
                data:{
                    index : $(this).index()
                },
                success:function (object) {
                    var obj = JSON.parse(object);
                    if(obj.err==0){
                        $('.d_new_list ul').html('');
                        for(var items in obj.data){
                            var eve = obj.data[items];
                            var li = $("<li><a href='javascript:void(0)'><img src='"+eve.imgUrl+"' width='185' height='114' alt=''></a><span><h2><a href='javascript:void(0)'><strong>"+eve.title+"</strong></a></h2><h2><a href='javascript:void(0)'>"+eve.content+"</a></h2><h3>"+eve.date+"</h3></span></li>");
                            $('.d_new_list ul').append(li);
                        }

                    }
                }
            })
        });

        //点击行业新闻
        $('.d_new_title a').eq(2).click(function () {
            $('.d_new_list ul').html('');
            $('.d_pages').empty();
            var li = $("" +
                "<li>" +
                "<a href='javascript:void(0)'><img src='http://www.ghqygame.com/Public/ghimg/574c2a48e95e5.png' width='185' height='114' alt=''></a>" +
                "<span>" +
                "<h2><a href='javascript:void(0)'><strong>复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化</strong></a></h2>" +
                "<h2><a href='javascript:void(0)'>复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化2016-05-27  |&...</a></h2>" +
                "<h3>2016/05/30</h3>" +
                "</span>" +
                "</li>" +
                "<li>" +
                "<a href='javascript:void(0)'><img src='http://www.ghqygame.com/Public/ghimg/55d14713ef7bf.jpg' width='185' height='114' alt=''></a>" +
                "<span>" +
                "<h2><a href='javascript:void(0)'><strong>《有杀气童话》表现强劲9月将迎重大更新</strong></a></h2>" +
                "<h2><a href='javascript:void(0)'>8月13日，网易公布了2015年第二季度财报。在游戏业务全面推进的第二季度，一串数字拼凑出了一份亮点...</a></h2>" +
                "<h3>2015/08/15</h3>" +
                "</span>" +
                "</li>" +
                "<li>" +
                "<a href='javascript:void(0)'><img src='http://www.ghqygame.com/Public/ghimg/55d13eaa0e551.jpg' width='185' height='114' alt=''></a>" +
                "<span>" +
                "<h2><a href='javascript:void(0)'><strong>《有杀气童话》获苹果推荐 人气火爆连开五服</strong></a></h2>" +
                "<h2><a href='javascript:void(0)'>GameRes报道 / 网易首款3D童话RPG手游《有杀气童话》于7月3日正式开启iOS公测。上线后...</a></h2>" +
                "<h3>2015/08/06</h3>" +
                "</span>" +
                "</li>" +
                "");
            $('.d_new_list ul').append(li);
        });

        //点击所有新闻
        $('.d_new_title a').eq(0).click(function () {
            $.ajax({
                url:'newsCenterApi.php',
                type:'POST',
                data:{
                    index : $(this).index()
                },
                success:function (object) {
                    var obj = JSON.parse(object);
                    if(obj.err==0){
                        $('.d_new_list ul').html('');
                        for(var items in obj.data){
                            var eve = obj.data[items];
                            var li = $("<li><a href='javascript:void(0)'><img src='"+eve.imgUrl+"' width='185' height='114' alt=''></a><span><h2><a href='javascript:void(0)'><strong>"+eve.title+"</strong></a></h2><h2><a href='javascript:void(0)'>"+eve.content+"</a></h2><h3>"+eve.date+"</h3></span></li>");
                            $('.d_new_list ul').append(li);
                        }
                    }
                }
            });
            $('.d_pages').html('');
            var btns = $("<div><a class='d_next d_display' href='javascript:void(0)'>上一页</a><a class='d_current' href='javascript:void(0)'>1</a><a class='d_num' href='javascript:void(0)'>2</a><a class='d_num' href='javascript:void(0)'>3</a><a class='d_num' href='javascript:void(0)'>4</a><a class='d_num' href='javascript:void(0)'>5</a><a class='d_num' href='javascript:void(0)'>6</a><a class='d_next' href='javascript:void(0)'>下一页</a></div>");
            $('.d_pages').append(btns);
        });

        //点击公司新闻
        $('.d_new_title a').eq(1).click(function () {
            $.ajax({
                url:'newsCenterApi.php',
                type:'POST',
                data:{
                    index : $(this).index()
                },
                success:function (object) {
                    var obj = JSON.parse(object);
                    if(obj.err==0){
                        $('.d_new_list ul').html('');
                        for(var items in obj.data){
                            var eve = obj.data[items];
                            var li = $("<li><a href='javascript:void(0)'><img src='"+eve.imgUrl+"' width='185' height='114' alt=''></a><span><h2><a href='javascript:void(0)'><strong>"+eve.title+"</strong></a></h2><h2><a href='javascript:void(0)'>"+eve.content+"</a></h2><h3>"+eve.date+"</h3></span></li>");
                            $('.d_new_list ul').append(li);
                        }
                    }
                }
            });
            $('.d_pages').html('');
            var btns = $("<div><a class='d_next d_display' href='javascript:void(0)'>上一页</a><a class='d_current' href='javascript:void(0)'>1</a><a class='d_num' href='javascript:void(0)'>2</a><a class='d_num' href='javascript:void(0)'>3</a><a class='d_num' href='javascript:void(0)'>4</a><a class='d_num' href='javascript:void(0)'>5</a><a class='d_num' href='javascript:void(0)'>6</a><a class='d_next' href='javascript:void(0)'>下一页</a></div>");
            $('.d_pages').append(btns);
        });


//    $(function)的回括号
    })
</script>
</body>
</html>