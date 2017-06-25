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
    <!--引入的jquery文件end-->
    <style>
        .textarea{
            width: 100%;
            height: 12rem;
            margin-top: 10%;
            padding: 0.5rem 1rem;
            box-sizing: border-box;
            font-size: 1rem;
            color: #3f3f3f;
        }
      
        .problem-module-3 .hd{
            overflow: hidden;
            margin: 1rem 0;
        }
        .problem-module-3 .hd.right span{
            width: 15%;
            height: auto;
            float: right;
            box-sizing: border-box;
            padding-left: 1rem;
            padding-right: 0;

        }
        .problem-module .problem-module-3 .hd.right span img{
            width: 100%;
            border-radius: 50%;

        }
        .problem-module-3 .hd.right .wdms{
            width: 80%;
            box-sizing: border-box;
            float: right;
            padding: 0.5rem;
            background: #fff;
            border-radius: 5px;
            color: #000;
        }
        .problem-module-3 .hd.right p{
            text-align: right;
            padding-right: 20%;
        }
        .problem-module-3 .hd p{
            padding-left: 20%;
        }
        .wd-p{
            font-size: 1.3rem;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="case_container" id="height">
        <h3>提出问题</h3>
        <form action="" id="form" method="post">
            <textarea class="textarea" name="question" placeholder="请输入需要咨询的问题?"></textarea>
            <input type="button" onclick="tijiao();" class="button" value="提交">
        </form>
    </div>
</div>

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
    function tijiao(){
    	var question=$("textarea").val();
    	if(!question){
    		alert("请输入问题");
    		$("textarea").focus();
    		return false;
    	}else{
    		$("form").submit();
    	}
    }
</script>
</body>
</html>