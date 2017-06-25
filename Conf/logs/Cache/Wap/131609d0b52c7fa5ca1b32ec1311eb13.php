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
<!--
   <script src=”http://leaverou.github.com/prefixfree/prefixfree.min.js”></script>
-->
</head>
<body>
<div class="main">
    <div class="slider" style="height: 228px">
        <ul>
           <?php if(is_array($banner)): foreach($banner as $key=>$v): ?><li><?php if($v["url"] != null): ?><a href="<?php echo ($v["url"]); ?>"><?php else: ?><a href="javascript:void(0);"><?php endif; ?>
                <img src="<?php echo ($v["img"]); ?>">
            	</a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="container bg">
        <div class="row row1">
            <a href="<?php echo U('Active/zixun_list',array('name'=>'学习天地'));?>">
                <div class="col-xs-6 border">
                    <img src="<?php echo RES;?>/images/xxtd-icon.png" alt="">
                    <p>学习天地</p>
                </div>
            </a>
            <a href="<?php echo U('Active/zixun_list',array('name'=>'最新活动'));?>">
                <div class="col-xs-6">
                    <img src="<?php echo RES;?>/images/zxhd-icon.png" alt="">
                    <p>最新活动</p>
                </div>
            </a>
        </div>
        <div class="row row2 margin-top">

            <a href="<?php echo U('Active/ys_huicui');?>">
                <div class="col-xs-4 border">
                    <img src="<?php echo RES;?>/images/wjdc-icon.png" alt="">
                    <p>精品荟萃</p>
                </div>
            </a>
            <a href="<?php echo U('Active/zixun_list',array('name'=>'解决方案'));?>">
                <div class="col-xs-4 border">
                    <img src="<?php echo RES;?>/images/index_icon_2.png" alt="">
                    <p>解决方案</p>
                </div>
            </a>
            <a href="<?php echo U('Active/ys_wenda');?>">
                <div class="col-xs-4">
                    <img src="<?php echo RES;?>/images/index_icon_5.png" alt="">
                    <p>你问我答</p>
                </div>
            </a>
        </div>
        <?php if(is_array($boshidun)): foreach($boshidun as $key=>$v): if($v["url"] != null): ?><a href="<?php echo ($v["url"]); ?>">
        <?php else: ?>
        <a href="<?php echo U('Active/zixun_detail',array('id'=>$v.id));?>"><?php endif; ?>
        <div class="row padding" >
            <div class="col-xs-3">
                <img src="<?php echo ($v["pic"]); ?>" alt="">
            </div>
            <div class="col-xs-9">
                <h5><?php echo ($v["title"]); ?></h5>
                <p><?php echo ($v["text"]); ?></p>
            </div>
        </div>
        </a><?php endforeach; endif; ?>
    </div>
    <div class="footer margin-top"></div>
</div>

<div class="footer-fixed">
    <div class="col-xs-4"><a href="<?php echo U('Active/ys_index');?>">波士名人堂</a></div>
    <div class="col-xs-4" id="nav-fixed"><a href="javascript:void (0);">空中教室</a></div>
    <div class="col-xs-4"><a href="<?php echo U('User/center');?>">个人中心</a></div>
</div>
<ul id="menu">
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'学习天地'));?>">学习天地</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'最新活动'));?>">最新活动</a></li>
    <li><a href="<?php echo U('Active/ys_huicui');?>">精品荟萃</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'解决方案'));?>">解决方案</a></li>
    <li><a href="<?php echo U('Active/ys_wenda');?>">你问我答</a></li>
</ul>
<script src="<?php echo RES;?>/js/carousel.js"></script>
<script>
    $(".slider").yxMobileSlider({width:640,height:320,during:3000})
</script>
</body>
</html>