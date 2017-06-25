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

    <style>
        .jifeng-content {
            padding: 1rem;
        }

        .jifeng-content h3 {
            font-size: 1.8rem;
            margin: 1rem 0 10%;
            color: #fff;
            text-align: center;
            background-image: url("<?php echo RES;?>/images/jt.png");
            background-position: left center;
            background-size: 8%;
            background-repeat: no-repeat;
        }

        .fahuo-module {
            padding: 0.5rem;
            border: 1px solid #fff;
            margin: 1rem 0;
            position: relative;
            color: #fff;
        }

        .fahuo-module .fahuo-module-1 {
            width: 30%;
            float: left;
        }

        .fahuo-module .fahuo-module-2 {
            width: 70%;
            float: left;
            padding-left: 0.5rem;
            box-sizing: border-box;
        }

        #wlcx {
            border: 0;
            border-bottom: 1px solid #fff;
        }

        #wlcx .fahuo-module-2 p {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            padding-left: 5%;
        }
        .wuliu-content{
            color: #fff;
        }
        .wuliu-content h4{
            font-size: 1.2rem;
            margin: 1rem 0;
        }
        .information-wlxx .left{
            width: 15%;
            float: left;
            position: relative;

        }
        .information-wlxx{
         position: relative;
        }
        .information-wlxx .left .yuan{
            width: 1rem;
            height: 1rem;
            background: #fff;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            top:0;
            margin-left: -0.5rem;
        }
        .information-wlxx .left .yuan.on{
            width: 1rem;
            height: 1rem;
            background: #fff;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            top:0.2rem;
            margin-left: -0.5rem;
            box-shadow: 0px 0px 5px #9dcadd,0px 0px 5px #fff;
        }
        .information-wlxx .left .xian{
            width: 0.2rem;
            height: 16rem;
            background: #fff;
            position: absolute;
            left: 50%;
            top:1rem;
            margin-left: -0.1rem;
        }
        .information-wlxx .right{
            width: 85%;
            float: right;
            padding: 0 0 1rem;

        }
    </style>

</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main">

    <div class="jifeng-content">
        <h3>物流查询</h3>

        <div class="fahuo-module clearfix" id="wlcx">
            <div class="fahuo-module-1">
                <img src="<?php echo RES;?>/images/jifeng-1.jpg" alt="">
            </div>
            <div class="fahuo-module-2">
                <p>物流状态:运输中</p>
                <p>承运公司:</p>
                <p>快递单号:</p>
            </div>
            <div style="clear: both"></div>
        </div>

        <div class="wuliu-content">
            <h4>本数据由菜鸟裹裹提供</h4>
            <div class="information-wlxx">

                <div class="left">
                    <div class="yuan on"></div>
                    <div class="xian"></div>
                </div>
                <div class="right">
                    <p>
                        <span>[南通市]</span>宅急送 江苏-配送区部-南通分拨站-通州市二部 加盟商收件人 已揽件
                    </p>
                    <p>2016-11-10 05:41:32</p>
                </div>
                <div style="clear:both;"></div>

            </div>
            <div class="information-wlxx">

                <div class="left">
                    <div class="yuan"></div>
                    <div class="xian"></div>
                </div>
                <div class="right">
                    <p>
                        <span>[南通市]</span>宅急送 江苏-配送区部-南通分拨站-通州市二部 加盟商收件人 已揽件
                    </p>
                    <p>2016-11-10 05:41:32</p>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="information-wlxx">

                <div class="left">
                    <div class="yuan"></div>
                    <div class="xian"></div>
                </div>
                <div class="right">
                    <p>
                        <span>[南通市]</span>宅急送 江苏-配送区部-南通分拨站-通州市二部 加盟商收件人 已揽件
                    </p>
                    <p>2016-11-10 05:41:32</p>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>


    </div>


</div>
</body>
</html>