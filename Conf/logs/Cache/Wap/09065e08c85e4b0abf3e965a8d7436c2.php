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
    <script src="<?php echo RES;?>/libs/ckplayer.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>

    <style>
        .chapter_container p,.chapter_container h1{
            text-align: left;
        }
        ul li{
           line-height: 2.5rem;;
        }
        iframe{
            width: 310px;
            margin-left: -155px;
            position: relative;
            left: 50%;
        }
    </style>

</head>
<body>
<div class="main">

    <div class="chapter_container">
        <h1><?php echo ($data["title"]); ?></h1>
        <p class="time"><span><?php echo (date('Y-m-d H:i:s',$data["createtime"])); ?> </span><span><?php echo ($data["writer"]); ?></span></p>
        <?php echo ($data["info"]); ?>
    </div>


</div>

<script src="<?php echo RES;?>/libs/video.js"></script>
<script>
    /*window.onload = window.onresize = function () {
        resizeIframe();
    }
    var resizeIframe=function(){
        var bodyw=document.body.clientWidth;
        for(var ilength=0;ilength<=document.getElementsByTagName("iframe").length;ilength++){

            document.getElementsByTagName("iframe")[ilength].height = bodyw*9/16;//设定高度

        }
    }*/

/*
    function defaulIframePageWidth() {
        var ifm = document.getElementById("iframe");
        var subWeb = document.frames ? document.frames["iframe"].document : ifm.contentDocument;
        if (ifm != null && subWeb != null) {
            ifm.width = subWeb.body.scrollWidth;
        }
    }*/
    /*$(function () {
        $("#main").load(function () {
            /!* var mainheight = $(this).contents().find("body").width();
            $(this).height(mainheight);*!/
            $(this).find('#mod_player').width('100%');
            $(this).find('#mod_tenvideo_video_player_0').width('100%');
        })
    })*/
/*$(function () {
    $("#main").load(function() {
        //var mainheight = $(this).contents().find("body").height();
       // $(this).height(mainheight);
        $(this).contents().find('#mod_player').width('100%');
        $(this).contents().find('#mod_tenvideo_video_player_0').width('100%');
    })



})*/
    window.onload = function () {
        document.getElementById('main').contentWindow.document.getElementById('mod_player').style.width='100%';
        document.getElementById('main').contentWindow.document.getElementById('mod_tenvideo_video_player_0').style.width='100%';
    }
    /*function defaulIframePageWidth() {
        var ifm = document.getElementById("defaulIframePage");
        var subWeb = document.frames ? document.frames["defaulIframePage"].document : ifm.contentDocument;
        if (ifm != null && subWeb != null) {
            ifm.width = subWeb.body.scrollWidth;
        }

    }*/
</script>
</body>
</html>