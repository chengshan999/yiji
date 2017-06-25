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

    <!--<script>
        function stop(){ return false; }
        document.oncontextmenu=stop;
    </script>-->

<!--
    <script src=”http://leaverou.github.com/prefixfree/prefixfree.min.js”></script>
-->
</head>
<body>
<div class="main">
    <div class="header">
        <h3><span></span>个人中心</h3>

        <div class="head_appear_box"><img style="border-radius:50%;" src="<?php echo ($data["headimgurl"]); ?>" alt=""></div>
        <p><?php echo ($data["nickname"]); ?></p>
    </div>
    <div class="center_nav">
        <div class="row">
            <a href="<?php echo U('User/get_rongyu');?>">
                <div class="col-xs-6 border">
                    <div class="col-xs-4">
                        <img src="<?php echo RES;?>/images/center_1.png" alt="">
                    </div>
                    <div class="col-xs-8">
                        <p>荣誉 <?php echo ($data["rongyu"]); ?> <br/><span>如何获取荣誉?</span></p>
                    </div>

                </div>
            </a>
            <a href="<?php echo U('User/rongyu');?>">
                <div class="col-xs-6">
                    <div class="col-xs-4">
                        <img src="<?php echo RES;?>/images/center_2.png" alt="">
                    </div>
                    <div class="col-xs-8">
                        <p>查看荣誉<br/>获取记录</p>
                    </div>
                </div>

            </a>
        </div>
    </div>
    <div class="center_container">
    	<?php if($data[g_id] != 100): ?><a href="<?php echo U('User/ceshi');?>"><h4>哮喘自测</h4></a><?php endif; ?>
    	<a href="<?php echo U('User/jifen');?>"><h4>积分商城</h4></a>
    	<a href="<?php echo U('User/dizhi');?>"><h4>我的地址</h4></a>
        <a href="<?php echo U('User/center_edit');?>"><h4>个人资料</h4></a>
        <p><span>姓名</span><span><?php echo ($data["xingming"]); ?></span></p>
        <p><span>手机</span><span><?php echo ($data["tel"]); ?></span></p>
        <p><span>邮箱</span><span><?php echo ($data["email"]); ?></span></p>
        <p><span>省份</span><span><?php echo ($data["province"]); ?></span></p>
        <?php if($data[g_id] == 100): ?><p><span>医院信息</span><span style="font-size: 1.18rem;"><?php if($data["yiyuan"] != null): echo ($data["yiyuan"]["name"]); ?> | <?php echo ($data["yiyuan"]["keshi"]); ?> | <?php echo ($data["yiyuan"]["zhuanye"]); ?> | <?php echo ($data["yiyuan"]["zhicheng"]); else: endif; ?></span></p>
        <?php else: ?>
        <p><span>我的病史：</span><span><?php echo ($data["bingshi"]); ?></span></p><?php endif; ?>
    </div>
    <div class="center_footer">

    </div>
</div>
<?php if($data[g_id] == 100): ?><div class="footer-fixed">
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
<?php else: ?>
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
</ul><?php endif; ?>
</body>
</html>