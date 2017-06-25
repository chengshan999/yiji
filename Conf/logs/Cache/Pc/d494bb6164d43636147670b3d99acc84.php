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
<form action="__URL__/page4/id/<?php echo ($id); ?>" method="post">
    <div class="box2-bg">
        <img src="/tpl/Pc/default/common/wenjuan/question-box.png">
    <div class="box2-q">
        <h3>Q2 <span>您的居住区域</span></h3>
        <div class="select">
            <select name="question">
                <option >请选择</option>
                <option value="黄浦区">黄浦区</option>
                <option value="徐汇区">徐汇区</option>
                <option value="长宁区">长宁区</option>
                <option value="静安区">静安区</option>
                <option value="普陀区">普陀区</option>
                <option value="虹口区">虹口区</option>
                <option value="杨浦区">杨浦区</option>
                <option value="闵行区">闵行区</option>
                <option value="宝山区">宝山区</option>
                <option value="嘉定区">嘉定区</option>
                <option value="浦东新区">浦东新区</option>
                <option value="金山区">金山区</option>
                <option value="松江区">松江区</option>
                <option value="青浦区">青浦区</option>
                <option value="奉贤区">奉贤区</option>
                <option value="崇明区">崇明区</option>
            </select>
        </div>
    </div>
    <div class="box2-btn t-c">
        <a href="javascript:history.go(-1);"><img src="/tpl/Pc/default/common/wenjuan/prev.png"></a>
        <img onclick="javascript:submit()" src="/tpl/Pc/default/common/wenjuan/next.png" >
    </div>
    </div>
    </form>
</div>
</body>
</html>
<!--<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="<?php echo RES;?>/js/js/query_fenxiang.js"></script>-->