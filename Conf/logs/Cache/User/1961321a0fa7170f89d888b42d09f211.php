<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>详细信息</title>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
 <link rel="stylesheet" href="<?php echo RES;?>/css/diymen/tipswindown.css" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/css/diymen/tipswindown.js"></script> 
</head>

<body>
<form class="form" method="post" action="<?php echo U('Dingdan/save_kuaidi',array('id'=>$id));?>" target="_top" enctype="multipart/form-data">	 
		<table border="0" cellspacing="0" cellpadding="0" width="100%" class="platform_table">
			<tr>
				<td>请选择快递名称:</td>
				<td><select name="kuaidi_name" >
				<?php if(is_array($kuaidi)): foreach($kuaidi as $key=>$v): if($v[code] == $data[kuaidi_name]): ?><option selected value="<?php echo ($v["code"]); ?>"><?php echo ($v["name"]); ?></option>
				<?php else: ?>
				<option value="<?php echo ($v["code"]); ?>"><?php echo ($v["name"]); ?></option><?php endif; endforeach; endif; ?>
				</select></td>
			</tr>
			<tr>
				<td>请输入快递单号:</td>
				<td><input type="text" style="    width: 95px;" value="<?php echo ($data["kuaidi_id"]); ?>" name="kuaidi_id" class="px" /></td>
			
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
<?php if($data['status'] > 1): ?>您已成功发货！<?php endif; ?>
</div>
</body>
</html>