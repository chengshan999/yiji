<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <title>领军体育调查问卷</title>
    <link  href="/tpl/Pc/default/common/wenjuan/bootstrap.min.css"  rel="stylesheet">
    <script src="/tpl/Pc/default/common/wenjuan/jquery-1.12.3.js"></script>
    <script src="/tpl/Pc/default/common/wenjuan/bootstrap.min.js"></script>
    <link  href="/tpl/Pc/default/common/wenjuan/query.css"  rel="stylesheet">
</head>
<body>
<div class="main-box main-box2">
<form action="__URL__/wancheng/id/<?php echo ($id); ?>" method="post">
<input type="hidden" name="id" value="<?php echo ($id); ?>" />
    <div class="box2-bg">
        <img src="/tpl/Pc/default/common/wenjuan/question-box.png">
    <div class="box2-q">
        <h3>Q8 <span>您的电话（必填）</span></h3>
        <div class="input"><input type="text" name="tel" ></div>
    </div>
    <div class="box2-btn t-c">
        <a href="javascript:history.go(-1);"><img src="/tpl/Pc/default/common/wenjuan/prev.png"></a>
        <img onclick="javascript:submit()" src="/tpl/Pc/default/common/wenjuan/button.png" >
    </div>
</div>
</form>
</div>
</body>
</html>
<!--<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="<?php echo RES;?>/js/js/query_fenxiang.js"></script>-->