<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>Boston Scientific</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/ys_style.css">
    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>


</head>
<body>
<div class="main">
    <div class="case_container" id="height">

        <a href="javascript:history.go(-1)"> <h3>线上活动</h3></a>
        <a href="chapter.html">
            <div class="case_module">
                <div class="case_module_img">
                    <img src="<?php echo RES;?>/images/bl_1.jpg" alt="">
                </div>
                <div class="case_module_dis">
                    <p>活动1 </p>
                    <p class="color"><span>02-19</span> | <span>上海XXXXXXXX医院</span></p>
                </div>
                <div class="click_hand">
                    <img src="<?php echo RES;?>/images/click.png" alt="">
                </div>
            </div>
        </a>
        <a href="#">
            <div class="case_module">
                <div class="case_module_img">
                    <img src="<?php echo RES;?>/images/bl_1.jpg" alt="">
                </div>
                <div class="case_module_dis">
                    <p>活动2</p>
                    <p class="color"><span>02-19</span> | <span>上海XXXXXXXX医院</span></p>
                </div>
                <div class="click_hand">
                    <img src="<?php echo RES;?>/images/click.png" alt="">
                </div>
            </div>
        </a>
        <a href="#">
            <div class="case_module">
                <div class="case_module_img">
                    <img src="<?php echo RES;?>/images/bl_1.jpg" alt="">
                </div>
                <div class="case_module_dis">
                    <p>活动3</p>
                    <p class="color"><span>02-19</span> | <span>上海XXXXXXXX医院</span></p>
                </div>
                <div class="click_hand">
                    <img src="<?php echo RES;?>/images/click.png" alt="">
                </div>
            </div>
        </a>

    </div>
</div>

<div class="footer-fixed">
    <div class="col-xs-4"><a href="">波士名人堂</a></div>
    <div class="col-xs-4"><a href="index.html">空中教室</a></div>
    <div class="col-xs-4"><a href="center.html">个人中心</a></div>
</div>
<script>
    window.onload = function () {
        gaoDu();
    }

    function gaoDu() {
        var _height1 = document.body.clientHeight;
        var _height2 = document.body.scrollHeight;
        var _case = document.getElementById('height');
        if(_height1 > _height2){
            _case.style.height = _height1 + 'px';
        }else{
            _case.style.height = _height2 + 'px';
        }
    }
</script>

</body>
</html>