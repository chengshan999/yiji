<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>你问我答</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/style.css">

    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>
    <!--引入的jquery文件end-->
    <style>
        #form .problem-module .problem-module-1.hr{
            border-bottom: 1px solid #fff;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        .tw{
            width: 100%;
            display: block;
            height: 3rem;
            text-align: center;
            background: #fff;
            color: #157fad;
            line-height: 3rem;
            font-size: 1.2rem;
            border-radius: 5px;
            margin: 1rem 0 2rem;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="case_container" id="height">

        <h3>你问我答</h3>
        <a href="<?php echo U('Active/ys_wenda_ask');?>" class="tw">我要提问</a>
        	<?php if(is_array($zhiding)): foreach($zhiding as $key=>$v): ?><a href="<?php echo U('Active/ys_wenda_detail',array('id'=>$v[id]));?>">
                <div class="problem-module">
                    <div class="problem-module-1 hr">
                        <span>Q<?php echo ($key+1); ?></span>
                        <span><?php echo ($v["question"]); ?></span>
                    </div>
                </div>
            </a><?php endforeach; endif; ?>
        	<?php if(is_array($question)): foreach($question as $key=>$v): ?><a href="<?php echo U('Active/ys_wenda_detail',array('id'=>$v[id]));?>">
                <div class="problem-module">
                    <div class="problem-module-1 hr">
                        <span>Q<?php echo ($key+1); ?></span>
                        <span><?php echo ($v["question"]); ?></span>
                    </div>
                </div>
            </a><?php endforeach; endif; ?>
    </div>
</div>
<div class="footer-fixed">
    <div class="col-xs-4"><a href="<?php echo U('Active/ys_index');?>">波士名人堂</a></div>
    <div class="col-xs-4" id="nav-fixed"><a href="javascript:void (0);">空中教室</a></div>
    <div class="col-xs-4"><a href="<?php echo U('User/center');?>">个人中心</a></div>
</div>
<ul id="menu">
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'学习天地'));?>">学习天地</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'最新活动'));?>">最新活动</a></li>
    <li><a href="<?php echo U('Active/wenjuan');?>">调查问卷</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'解决方案'));?>">解决方案</a></li>
    <li><a href="<?php echo U('Active/ys_wenda');?>">你问我答</a></li>
</ul>
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
<script>
    $(function () {
        $('#form label').click(function () {
            var val=$(this).prev("input[type='radio']").prop('checked');
            $(this).prevAll().removeClass('active');
            $(this).nextAll().removeClass('active');
            if(!val) {
                $(this).addClass('active');
            }
        })
    })
</script>
</body>
</html>