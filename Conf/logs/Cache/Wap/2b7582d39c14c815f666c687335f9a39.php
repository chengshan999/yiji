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
            <a href="<?php echo U('Active/zixun_list',array('name'=>'治疗原理'));?>">
                <div class="col-xs-6 border">
                    <img src="<?php echo RES;?>/images/zxlf.png" alt="">
                    <p>治疗原理</p>
                </div>
            </a>
            <a href="<?php echo U('Active/zixun_list',array('name'=>'疾病介绍'));?>">
                <div class="col-xs-6 ">
                    <img src="<?php echo RES;?>/images/index_icon_4.png" alt="">
                    <p>疾病介绍</p>
                </div>
            </a>
        </div>
        <div class="row row2 margin-top">
        	<a href="<?php echo U('Active/zixun_list',array('name'=>'最新活动患者端'));?>">
                <div class="col-xs-4 border">
                    <img src="<?php echo RES;?>/images/zxhd-icon.png" alt="">
                    <p>最新活动</p>
                </div>
            </a>
            <a href="<?php echo U('User/ceshi');?>">
                <div class="col-xs-4 border">
                    <img src="<?php echo RES;?>/images/index_icon_2.png" alt="">
                    <p>患者自测</p>
                </div>
            </a>
            <a href="<?php echo U('Active/zixun');?>">
                <div class="col-xs-4">
                    <img src="<?php echo RES;?>/images/zxzx-icon.png" alt="">
                    <p>名医名院</p>
                </div>
            </a>
        </div>
		<?php if(is_array($huxi)): foreach($huxi as $key=>$v): if($v["url"] != null): ?><a href="<?php echo ($v["url"]); ?>">
        <?php else: ?>
        <a href="<?php echo U('Active/zixun_detail',array('id'=>$v[id]));?>"><?php endif; ?>
        <div class="row padding">
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
    <div class="col-xs-4"><a href="<?php echo U('Active/index');?>">顺易迹</a></div>
    <div class="col-xs-4" id="nav-fixed"><a href="javascript:void (0);">关爱空间</a></div>
    <div class="col-xs-4"><a href="<?php echo U('User/center');?>">个人中心</a></div>
</div>
<ul id="menu">
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'治疗原理'));?>">治疗原理</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'疾病介绍'));?>">疾病介绍</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'最新活动患者端'));?>">最新活动</a></li>
    <li><a href="<?php echo U('User/ceshi');?>">患者自测</a></li>
    <li><a href="<?php echo U('Active/zixun');?>">名医名院</a></li>
</ul>
<script src="<?php echo RES;?>/js/carousel.js"></script>
<script>
    $(".slider").yxMobileSlider({width:640,height:320,during:3000})
</script>
</body>
</html>