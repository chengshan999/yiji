<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>详细信息</title>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
 <link rel="stylesheet" href="<?php echo RES;?>/css/diymen/tipswindown.css" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/css/diymen/tipswindown.js"></script> 
</head>
<script type="text/javascript">
 $(document).ready(function() {
	$("#iframe1").click(function(){
		tipsWindown("生成ueq订单","iframe:<?php echo U('Dingdan/create_ueq',array('id'=>$id,'name'=>'Dingdan'));?>","400","530","true","","true","leotheme");
	});
 });
 </script>  
<body>
<form class="form" method="post" action="<?php echo U('Dingdan/save_kuaidi',array('id'=>$id));?>" target="_top" enctype="multipart/form-data">	 
		<table border="0" cellspacing="0" cellpadding="0" width="100%" class="platform_table">
			<tr>
				<td>请选择快递名称:</td>
				<td><select  >
				<option value="ueq">UEQ</option>
				</select></td>
			</tr>
			<tr>
				<td>请输入快递单号:</td>
				<td><input type="text" style="    width: 95px;" value="<?php echo ($data["ueq_id"]); ?>" name="ueq_id" class="px" /></td>
			
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" value="发货" class="btnGrayS" /></td>
			</tr>
		</table>
		
</form>
<br />
<br />
<br />
<br />
<div style="text-align:center">
<?php if(($data[ueq] == 1) AND ($data[ueq_id] != null) AND ($data['status'] == 1)): ?>您已成功生成ueq订单，订单号为：<span style="color:red;"><?php echo ($data["ueq_id"]); ?></span>,请点击发货确认发货
<?php elseif($data['status'] > 1): ?>
您已成功发货！
<?php else: ?>
<span style="color:red;">注意：</span>只有跨境产品的订单才点击此处生成
<a href="javascript:;" title="添加" id="iframe1" class="btnGrayS vm bigbtn" >生成ueq订单</a><?php endif; ?>
</div>
</body>
</html>