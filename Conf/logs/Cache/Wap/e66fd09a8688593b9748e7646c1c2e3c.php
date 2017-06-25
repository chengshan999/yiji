<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>易迹</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/style.css">
    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>

    <style>
        .jifeng-content{
            padding: 1rem;
        }
        .jifeng-content ul{
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 1.2rem;
        }
        .jifeng-content ul li{
            display: inline-block;
            padding: 0.5rem 1rem;
            color: #fff;
            font-size: 1.2rem;
        }

        .jifeng-content ul li.on a{
            font-size: 1.2rem;
            color: #000;
        }
        .jifeng-content ul li a{
            font-size: 1.2rem;
            color: #fff;
        }

        .fahuo-module{
          padding: 0.5rem;
            border: 1px solid #fff;
            margin: 1rem 0;
            position: relative;
            color: #fff;
        }
        .fahuo-module .fahuo-module-1{
            width: 30%;
            float: left;
        }
        .fahuo-module .fahuo-module-2{
            width: 70%;
            float: left;
            padding-left: 0.5rem;
            box-sizing: border-box;
        }
        .fahuo-btn {
            width: 100%;
            margin: 0.5rem 0;
            text-align: right;
        }
        .fahuo-btn-1 {
            width: 100%;
            margin: 0.5rem 0;
            text-align: right;
        }
        .fahuo-btn a:first-child{
            padding: 0.5rem 1rem;
            border: 1px solid #fff;
            margin-right: 0.5rem;
            border-radius: 3px;
            background: #fff;
            color: #00a8d5;
        }
        .fahuo-btn a:last-child{
            padding: 0.5rem 1rem;
            border: 1px solid #fff;
            margin-right: 0.5rem;
            border-radius: 3px;
            background: transparent;
            color: #fff;
        }
        .fahuo-btn-1 a{
            padding: 0.5rem 1rem;
            border: 1px solid #fff;
            margin-right: 0.5rem;
            border-radius: 3px;
            background: transparent;
            color: #fff;
        }
        .ryz-fh{
            position: absolute;
            right: 0.5rem;
            top:0.5rem;
        }
    </style>

</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main" >

    <div class="jifeng-content" >
        <ul id="ul-btn">
            <li class="on"><a href="#">待发货</a></li>|
            <li><a href="#">待收货</a></li>|
            <li><a href="#">已完成</a></li>
        </ul>

        <div class="fahuo-module clearfix" style="display: block">
            <div class="fahuo-module-1">
                <img src="<?php echo RES;?>/images/jifeng-1.jpg" alt="">
            </div>
            <div class="fahuo-module-2">
                <p><span>小礼品</span><span class="ryz-fh">荣誉值:300</span></p>
                <p>数量 <span>1</span></p>
            </div>
            <div style="clear: both"></div>
            <div class="fahuo-btn-1">
                <a href="#">提醒发货</a>
            </div>
        </div>
        <div class="fahuo-module clearfix" style="display: none">
            <div class="fahuo-module-1">
                <img src="<?php echo RES;?>/images/jifeng-1.jpg" alt="">
            </div>
            <div class="fahuo-module-2">
                <p><span>小礼品</span><span class="ryz-fh">荣誉值:300</span></p>
                <p>数量 <span>1</span></p>
            </div>
            <div style="clear: both"></div>
            <div class="fahuo-btn">
                <a href="#">查看物流</a><a href="#">确认发货</a>
            </div>
        </div>
        <div class="fahuo-module clearfix" style="display: none">
            已完成
        </div>
    </div>




</div>

<script>
    $(function () {
        $('#ul-btn li a').click(function () {
            $('.fahuo-module').css('display','none');
            $('#ul-btn li').removeClass('on');
            $(this).parent('li').addClass('on');
            var _index = $(this).parent('li').index();
            $('.fahuo-module').eq(_index).css('display','block');

        })
    })
</script>
</body>
</html>