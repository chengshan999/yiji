<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
﻿<head>       
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
 <title><?php echo C('site_title');?></title>        
 <meta name="Keywords" content="<?php echo C('site_name');?>" />       
  <link type="text/css" rel="stylesheet" href="<?php echo STATICS;?>/Home/summer/css/reset.css" />        
  <link type="text/css" rel="stylesheet" href="<?php echo STATICS;?>/Home/summer/css/style.css" />        
  <script src="<?php echo STATICS;?>/Home/summer/js/jquery-1.8.3.min.js"></script>       
   <script src="<?php echo STATICS;?>/Home/summer/js/common.js"></script>       
    <script src="<?php echo STATICS;?>/Home/summer/js/jquery.slider.js"></script>        
	<script src="<?php echo STATICS;?>/Home/summer/js/jquery-runbanner.js"></script>       
     <script src="<?php echo STATICS;?>/Home/summer/js/turn4.1.min.js"></script>     
        <!--        防止恶意点击 -->        
	<script type="text/javascript">            var _tsa = _tsa || [];            _tsa.id = 9434;            _tsa.protocol = document.location.protocol == "https:" ? "https://" : "http://";            (function() {                var obj = document.createElement('script');                obj.src = _tsa.protocol + 's.topsem.com/safe.js';                var s = document.getElementsByTagName('script')[0];                s.parentNode.insertBefore(obj, s);            })();        </script>
</head>
    <body>
        <!---header begin--->
        ﻿<div class="wrap_header">
    <div class="header">
        <div class="navigation">
            <div class="logo"> <a href="/"><img src="<?php echo C('site_logo');?>" alt=""  border="0" /></a>
            </div>
            <ul><li class="current"><a href="/">首页</a></li><li><a href="<?php echo U('Index/index');?>#func">功能</a></li>
          
            <li><a href="<?php echo U('Index/case');?>">案例</a></li><li><a href="<?php echo U('Index/agency');?>">代理</a></li><li><a href="<?php echo U('Index/reg');?>">入驻</a></li><li><a href="http://wm.b2ctui.com">论坛</a></li></ul>
            <div class="login">
                <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>
                  <a href="<?php echo U('Index/reg');?>" <?php if($curr == 'reg' ): ?>class="current"<?php endif; ?>>注册</a>
                <?php else: ?>
                  <a href="<?php echo U('System/Admin/logout');?>">注销</a><a href="<?php echo U('User/Index/index');?>"><?php echo $_SESSION['uname'] ?></a><?php endif; ?>
            </div>
          
        </div>
    </div>
</div>
<div class="header_login">
	<div class="header_login_main">
    	
  </div>
</div>

<div class="bg_login_main">
	<div class="login_main">
      <div class="img">
        <img src="<?php echo STATICS;?>/Home/summer/images/login/img.png" width="485" height="485"/>
      </div>
      <div class="img02">
        <img src="<?php echo STATICS;?>/Home/summer/images/login/img02.png" width="127" height="127"/>
      </div>
      
      <form action="<?php echo U('Users/checklogin');?>" method="post">
   	  <input name="username" type="text" class="txt_name" placeholder="平台账号" />
      <input name="password" type="password" class="txt_pwd" placeholder="密码" />
    
      	<div class="op">
        	<span><input name="" type="checkbox" value="" />下次自动登录</span>
            <a href="#">忘记密码？</a>
        </div>
      <input type="submit" class="btn_login" value="" />
      <a href="<?php echo U('Index/reg');?>" class="btn_reg">新用户注册</a>
      </form>
    </div>
</div>

<script type="text/javascript">
$(function(){
	$(".img").addClass("active");
	$(".btn_reg").animate({right:"22px"},"slow");

    //刷新验证码
    $('#J_captcha_img').click(function(){
        var timenow = new Date().getTime(),
            url = $(this).attr('data-url').replace(/js_rand/g,timenow);
        $(this).attr("src", url);
    });
    $('#J_captcha_change').click(function(){
        $('#J_captcha_img').trigger('click');
    }); 

})
</script>



         <!---底部 begin--->
<div class="joinLine">全国招商热线：0755-61910103</div>
<div class="footer">
    <div class="footer_con">
        <div class="logo">
            <a href="/" style="background:url(<?php echo ($f_logo); ?>) no-repeat"><?php echo C('site_title');?></a>
        </div>
        <div class="link">
            <p>
                
<a href="/">返回首页</a> | 
<a href="<?php echo U('Index/reg');?>">申请入驻</a> |
<a href="<?php echo U('Index/agency');?>"> 加盟代理</a> | 
<a href="<?php echo U('Index/case');?>">成功案例</a> | 
<a href="<?php echo U('Index/contact');?>">关于我们</a>
            </p>
            <p>
                客服专线：0755-61910103   QQ：<?php echo C('site_qq');?>   邮箱：<?php echo C('site_email');?>
            </p>
            <p>地址：<?php echo C('keyword');?></p>
        </div>
        <div class="code"><img src="<?php echo ($f_qrcode); ?>" width="124" height="124" /></div>
    </div>
</div>
<div class="copyright">
    Copyright © 2014 All Rights Reserved <?php echo C('site_name');?> 版权所有 
</div>
<!---底部 begin--->

<!--右侧悬浮 begin-->
<div class="consult" id="consult">

</div>
<!--右侧悬浮 end-->
<div style="display:none">

	<script type="text/javascript" src="http://tajs.qq.com/stats?sId=34654282888" charset="UTF-8"></script>
</div>


    </body>
</html>