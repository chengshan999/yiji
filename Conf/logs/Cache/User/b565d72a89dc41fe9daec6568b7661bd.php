<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微信公众平台源码,微信机器人源码,微信自动回复源码 weimicms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<script src="/tpl/static/upyun.js?2013"></script>
 <script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style>
body{line-height:180%;}
ul.modules li{padding:4px 10px;margin:4px;background:#efefef;float:left;width:27%;}
ul.modules li div.mleft{float:left;width:40%}
ul.modules li div.mright{float:right;width:55%;text-align:right;}
</style>
</head>
<body style="background:#fff;padding:20px 20px;">
<div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-bottom:5px;font-size:12px;">使用方法：点击“选中”直接选中对应分类，或者点击“详细”进入对应分类的子分类，如果分类下有子分类请慎用“选中”，选中后子分类以及子分类下的内容将不能被显示</div>
<h4>请选择分类：</h4>



<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
<th>标题</th>
<th style=" width:80px;">操作</th>
</tr>
</thead>
<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($c["name"]); ?></td><td class="norightborder"><?php if($c['sub'] == NULL): ?><a href="###" onclick="returnHomepage(<?php echo ($c["id"]); ?>,'<?php echo ($c["name"]); ?>')">选中</a><?php else: ?><a href="###" onclick="returnHomepage(<?php echo ($c["id"]); ?>,'<?php echo ($c["name"]); ?>')">选中</a> &nbsp; <a href="?g=User&m=Img&a=editClass&id=<?php echo ($c["id"]); ?>">详情</a><?php endif; ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>


<script>
var domid=art.dialog.data('domid');
var domid2=art.dialog.data('domid2');
// 返回数据到主页面
function returnHomepage(url,n){
	var origin = artDialog.open.origin;
	var dom = origin.document.getElementById(domid);
	var dom2 = origin.document.getElementById(domid2);
	dom.value=url+','+n;
	dom2.innerHTML=n;
	setTimeout("art.dialog.close()", 100 )
}
</script>

</body>

</html>