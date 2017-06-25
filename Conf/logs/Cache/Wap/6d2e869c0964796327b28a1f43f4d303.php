<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>问卷评测</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/style.css">
    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    
    <style>
        .csjg-content{

            padding: 1rem;
            color: #fff;
        }
        .csjg-content h3{
            text-align: center;
            font-size: 1.8rem;
        }
        .csjg-content .content{
            margin-top: 30%;

        }
        .csjg-content .content p{
            margin: 1rem 0;
            font-size: 1.1rem;
        }
        .csjg-content .content a{
            width: 100%;
            display: inline-block;
            height: 3rem;
            background: #fff;
            color: #00a8d5;
            border-radius: 3px;
            text-align: center;
            line-height: 3rem;
            font-size: 1.2rem;
            margin-top: 30%;
        }
    </style>



</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main" >

  <div class="csjg-content">
      <h3>问卷结果分析</h3>
      <div class="content">
        <p>此次问卷得分:<?php echo ($score); ?>分</p>
        <p><?php echo ($info); ?></p>
        <a href="<?php echo U('Active/wenjuan');?>">确认</a>
      </div>
  </div>




</div>


</body>
</html>