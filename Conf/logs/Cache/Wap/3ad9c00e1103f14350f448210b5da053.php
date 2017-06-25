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
        .list-name{
            font-size: 1.2rem;
        }
        .list-jieshao{
            font-size: 1rem;
            overflow: hidden;
            white-space:nowrap;
            text-overflow:ellipsis;
        }
        .case_module_dis p{
            margin-top: 5px;
        }
        .case_module_dis{

        }
        .list-bottom{
            margin-bottom: 0rem !important;
        }
        .list-bottom-1{
            margin-bottom: 2rem !important;
            background: #fff;
            padding: 0.5rem;
            color: #000;
            margin-top: -3%;
        }
        .list-bottom-1 .list-jieshao,.list-bottom-1 .color{
            color: #707070;
        }
    </style>

</head>
<body>
<div class="main">
    <div class="case_container" id="height">
        <h3><?php echo ($name); ?></h3>
        <?php if(is_array($data)): foreach($data as $key=>$v): if($v["url"] != null): ?><a href="<?php echo ($v["url"]); ?>">
        <?php elseif($v["type"] == 'wenjuan'): ?>
        <a href="<?php echo U('Active/wenjuan_detail',array('id'=>$v[id]));?>">
        <?php else: ?>
        <a href="<?php echo U('Active/zixun_detail',array('id'=>$v[id]));?>"><?php endif; ?>
            <div class="case_module list-bottom">
                <div class="case_module_img">
                    <img src="<?php echo ($v["pic"]); ?>" alt="">
                </div>
                <div class="click_hand">
                    <img src="<?php echo RES;?>/images/click.png" alt="">
                </div>
            </div>
            <div class="case_module_dis list-bottom-1 ">
                <p class="list-name"><?php echo ($v["title"]); ?></p>
                <p class="list-jieshao"><?php echo ($v["text"]); ?></p>
                <p class="color"><?php echo (date('Y-m-d',$v["createtime"])); ?> &nbsp;&nbsp;&nbsp; <?php if($v["type"] == 'wenjuan'): ?>（问卷调查）<?php elseif($v["type"] != null): ?> （<?php echo ($v["type"]); ?>）<?php endif; ?></p>
            </div>
        </a><?php endforeach; endif; ?>
    </div>
</div>
<?php if($user[g_id] == 100): ?><div class="footer-fixed">
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