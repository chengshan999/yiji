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
    <form action="__URL__/page3/id/<?php echo ($id); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo ($id); ?>" />
        <div class="box2-bg">
            <img src="/tpl/Pc/default/common/wenjuan/question-box.png">
            <div class="box2-q">
                <h3>Q1 <span>您的职业</span></h3>
                <div class="input"><input type="radio" name="question" value="民营企业" id="1"/><label for="1">&nbsp;民营企业</label></div>
                <div class="input"><input type="radio" name="question" value="外资企业" id="2"/><label for="2">&nbsp;外资企业 </label></div>
                <div class="input"><input type="radio" name="question" value="国有企业" id="3"/><label for="3">&nbsp;国有企业 </label></div>
                <div class="input"><input type="radio" name="question" value="事业单位" id="4"/><label for="4">&nbsp;事业单位 </label></div>
                <div class="input"><input type="radio" name="question" value="政府机构" id="5"/><label for="5">&nbsp;政府机构 </label></div>
                <div class="input"><input type="radio" name="question" value="私营业主" id="6"/><label for="6">&nbsp;私营业主 </label></div>
            </div>
            <div class="box2-btn t-c"><img onclick="javascript:submit()" src="/tpl/Pc/default/common/wenjuan/next.png" ></div>
        </div>
        </form>
    </div>
</body>
</html>
<!--<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="<?php echo RES;?>/js/js/query_fenxiang.js"></script>-->