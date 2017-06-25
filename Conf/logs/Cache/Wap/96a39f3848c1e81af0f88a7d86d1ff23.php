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
        .csjg-content{

            padding: 1rem;
            color: #fff;
        }
        .csjg-content h3{
            text-align: center;
            font-size: 1.8rem;
        }
        .csjg-content .content{
            margin-top: 10%;

        }
        .csjg-content .content p{
            margin: 1rem 0;
            font-size: 1.1rem;
        }
        .csjg-content .content a{
            width: 100%;
            display: inline-block;
            height: 3rem;
            background: #fff;
            color: #00a8d5;
            border-radius: 3px;
            text-align: center;
            line-height: 3rem;
            font-size: 1.2rem;
            margin-top: 10%;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="case_container" id="height">
        <h3><?php echo ($title); ?></h3>
        <form action="<?php echo U('Active/save_wenjuan',array('id'=>$id));?>" method="post" id="form">
        	<?php if($record != 1): if(is_array($q)): foreach($q as $k=>$v): ?><div class="problem-module">

                <div class="problem-module-1">
                    <span>Q<?php echo ($k+1); ?></span>
                    <span><?php echo ($v["name"]); ?></span>
                </div>
                <div class="problem-module-2">
                	<?php if(is_array($v[answer])): foreach($v[answer] as $key=>$val): ?><input type="radio" name="<?php echo ($k); ?>" value="<?php echo ($val["id"]); ?>_<?php echo ($val["name"]); ?>_<?php echo ($val["point"]); ?>" id="<?php echo ($k); ?>-<?php echo ($key); ?>">
                    <label for="<?php echo ($k); ?>-<?php echo ($key); ?>" ><span></span><?php echo ($val["name"]); ?></label><?php endforeach; endif; ?>
                </div>
            </div>
            <input  type="submit" value="提交"><?php endforeach; endif; ?>
            <?php else: ?>
            <?php if(is_array($q)): foreach($q as $k=>$v): ?><div class="problem-module">

                <div class="problem-module-1">
                    <span>Q<?php echo ($k+1); ?></span>
                    <span><?php echo ($v["name"]); ?></span>
                </div>
                <div class="problem-module-2">
                	<?php if(is_array($v[answer])): foreach($v[answer] as $key=>$val): ?><input type="radio" <?php if($val['name']==$answer[$k][huida]){echo 'checked="checked"';} ?> name="<?php echo ($k); ?>" value="<?php echo ($val["id"]); ?>_<?php echo ($val["name"]); ?>_<?php echo ($val["point"]); ?>" id="<?php echo ($k); ?>-<?php echo ($key); ?>">
                    <label for="<?php echo ($k); ?>-<?php echo ($key); ?>" ><span></span><?php echo ($val["name"]); ?></label><?php endforeach; endif; ?>
                </div>
            </div><?php endforeach; endif; ?>
			
			  <div class="csjg-content">
			      <div class="content">
			      	<p>您已回答过此问卷！</p>
			        <p>此次问卷得分:<?php echo ($score); ?>分</p>
			        <p><?php echo ($info); ?></p>
			        <a href="<?php echo U('Active/wenjuan');?>">确认</a>
			      </div>
			  </div><?php endif; ?>
            
        </form>

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
    <li><a href="<?php echo U('Active/ys_huicui');?>">精品荟萃</a></li>
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
        $("input[type=radio]:checked").next().addClass("active");
    })
</script>
</body>
</html>