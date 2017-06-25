<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
</head>
<body style="background:none">
<div class="content">
<div class="box">
	<h3><?php echo C('site_name');?>更新消息</h3>
    <div class="con dcon">
    <div class="update">
    <p>服务器环境：[<?php echo PHP_OS; ?>]<?php echo $_SERVER[SERVER_SOFTWARE];?> MySql:<?php echo mysql_get_server_info(); ?> php:<?php echo PHP_VERSION; ?></p>
    <p>服务器IP：<?php echo $_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT']; ?></p>
    <p>当前网站语言：<?php echo getenv("HTTP_ACCEPT_LANGUAGE"); ?></p>
	<p>被屏蔽的函数：<?php echo get_cfg_var("disable_functions")?get_cfg_var("disable_functions"):"无" ; ?></p>
    <p>官方网站：<a href="http://wm.b2ctui.com" class="blue"><?php echo C('site_name');?></a></p>
	<p>系统版本：<?php echo ($ver); ?> <a href="./index.php?g=System&m=Update" class="isub">检查更新</a></p>
    </div>
    <ul class="myinfo">
   <li><p class="red">您的程序版本为：<?php echo C('site_name');?>微信微信营销系统 <?php  $version = CONF_PATH . 'version.php'; $ver = include $version; $ver = $ver['ver']; echo $ver; ?></p>	
   </li>
  <!--li><p><?php echo ($domain_time); ?></p></li-->
	</ul>
    </div>
</div>
<!--/box-->
<div class="box">
	<h3><?php echo C('site_name');?>说明</h3>
    <div class="con dcon">
    <div class="kjnav" style="display:none">
    <a >使用帮助</a><a >技术售后</a><a >安装指导</a><a >联系我们</a>
    </div>
    <ul class="myinfo kjinfo">
 <li class="title">最新更新动态：</li>
    <script type="text/javascript" src="http://wm.b2ctui.com/api.php?mod=js&bid=9"></script>
	</ul>
    </div>
</div>

<!--/box-->
</div>
<script>
function systemupdatecheck(){
	$.ajax({
		type: "GET",
		url: "Services/EFService.svc/Members",
		data: "{}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			if (data.success == true) {
				setTimeout("window.location.href = location.href",2000);
			} else {
				alert(data.msg);
			}
		},
		error: function (msg) {
			alert(msg);
		}
	});
}
</script>
</body>
</html>