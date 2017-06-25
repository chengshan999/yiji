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


</head>
<body>
<div class="main">
    <div class="case_container" id="height">

        <a href="javascript:history.go(-1)"><h3>最新活动</h3></a>
        <a href="__URL__/huodong_detail">
            <div class="case_module">
                <div class="case_module_img">
                    <img src="<?php echo RES;?>/images/bl_1.jpg" alt="">
                </div>
                <div class="case_module_dis">
                    <p>活动1</p>
                    <p class="color"><span>02-19</span> | <span>上海XXXXXXXX医院</span></p>
                </div>
                <div class="click_hand">
                    <img src="<?php echo RES;?>/images/click.png" alt="">
                </div>
            </div>
        </a>
        <a href="__URL__/huodong_detail">
            <div class="case_module">
                <div class="case_module_img">
                    <img src="<?php echo RES;?>/images/bl_1.jpg" alt="">
                </div>
                <div class="case_module_dis">
                    <p>活动2</p>
                    <p class="color"><span>02-19</span> | <span>上海XXXXXXXX医院</span></p>
                </div>
                <div class="click_hand">
                    <img src="<?php echo RES;?>/images/click.png" alt="">
                </div>
            </div>
        </a>
        <a href="__URL__/huodong_detail">
            <div class="case_module">
                <div class="case_module_img">
                    <img src="<?php echo RES;?>/images/bl_1.jpg" alt="">
                </div>
                <div class="case_module_dis">
                    <p>活动3</p>
                    <p class="color"><span>02-19</span> | <span>上海XXXXXXXX医院</span></p>
                </div>
                <div class="click_hand">
                    <img src="<?php echo RES;?>/images/click.png" alt="">
                </div>
            </div>

        </a>
        
    </div>
</div>
<div class="footer-fixed">
    <div class="col-xs-4"><a href="<?php echo U('Active/index');?>">顺易迹</a></div>
    <div class="col-xs-4" id="nav-fixed"><a href="javascript:void (0);">活动天地</a></div>
    <div class="col-xs-4"><a href="<?php echo U('User/center');?>">个人中心</a></div>
</div>
<ul id="menu">
    <li><a href="<?php echo U('Active/liaofa');?>">最新疗法</a></li>
    <li><a href="<?php echo U('Active/xinsheng');?>">患者心声</a></li>
    <li><a href="<?php echo U('User/ceshi');?>">哮喘自测</a></li>
    <li><a href="<?php echo U('Active/zixun');?>">在线咨询</a></li>
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

</body>
</html>