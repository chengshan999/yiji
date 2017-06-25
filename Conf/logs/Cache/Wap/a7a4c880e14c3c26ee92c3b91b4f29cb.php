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
    <link rel="stylesheet" href="<?php echo RES;?>/css/style.css">

    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>
    <!--
       <script src=”http://leaverou.github.com/prefixfree/prefixfree.min.js”></script>
    -->
</head>
<body>
<div class="main">
<!--
    <img src="<?php echo RES;?>/images/wx.jpg" alt="" style="width: 100%">
-->
    <div class="slider" style="height: 228px">
        <ul>
            <li><a href="#"><img src="<?php echo RES;?>/images/wx.jpg"></a></li>
            <li><a href="#"><img src="<?php echo RES;?>/images/wx.jpg"></a></li>
            <li><a href="#"><img src="<?php echo RES;?>/images/wx.jpg"></a></li>
            <li><a href="#"><img src="<?php echo RES;?>/images/wx.jpg"></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row activity clearfix">
            <a href="zuixinhuodong.html">
                <div class="col-xs-4">
                    <img src="<?php echo RES;?>/images/zxhd.png" alt="">
                    <p>最新活动</p>
                    <img src="<?php echo RES;?>/images/border1.png" alt="" class="border1">


                </div>
            </a>

                <div class="col-xs-4 ">
                    <!--<img src="<?php echo RES;?>/images/index_icon_3.png" alt="">
                    <p>线上活动</p>-->
                </div>



                <div class="col-xs-4">
                    <!--<img src="<?php echo RES;?>/images/index_icon_5.png" alt="">
                    <p>你问我答</p>-->
                </div>

        </div>
        <div class="row activity clearfix">
            <div class="col-xs-4 ">
                <!--<img src="<?php echo RES;?>/images/index_icon_3.png" alt="">
                <p>线上活动</p>-->
            </div>

            <a href="zuixinliaofa.html">
                <div class="col-xs-4 ">
                    <img src="<?php echo RES;?>/images/zxlf.png" alt="">
                    <p>最新疗法</p>
                    <img src="<?php echo RES;?>/images/border1.png" alt="" class="border1">
<!--
                    <img src="<?php echo RES;?>/images/border1.png" alt="" class="border2">
-->
                </div>
            </a>

            <div class="col-xs-4">
                <!--<img src="<?php echo RES;?>/images/index_icon_5.png" alt="">
                <p>你问我答</p>-->
            </div>
        </div>
        <div class="row activity clearfix">
            <div class="col-xs-4 ">
                <!--<img src="<?php echo RES;?>/images/index_icon_3.png" alt="">
                <p>线上活动</p>-->
            </div>


            <div class="col-xs-4">
                <!--<img src="<?php echo RES;?>/images/index_icon_5.png" alt="">
                <p>你问我答</p>-->
            </div>

            <a href="wenjuandiaocha.html">
                <div class="col-xs-4 ">
                    <img src="<?php echo RES;?>/images/wjdc.png" alt="" >
                    <p>问卷调查</p>
<!--
                    <img src="<?php echo RES;?>/images/border1.png" alt="" class="border2">
-->
                </div>
            </a>
        </div>
    </div>
    <div class="footer"></div>
</div>

<div class="footer-fixed">
    <div class="col-xs-4"><a href="">顺易迹</a></div>
    <div class="col-xs-4"><a href="huodongxintiandi.html">活动天地</a></div>
    <div class="col-xs-4"><a href="center.html">个人中心</a></div>
</div>
<script src="<?php echo RES;?>/js/carousel.js"></script>
<script>
    $(".slider").yxMobileSlider({width:640,height:320,during:3000})
</script>
</body>
</html>