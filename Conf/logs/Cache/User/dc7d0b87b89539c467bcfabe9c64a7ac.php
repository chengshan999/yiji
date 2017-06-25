<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>详细信息</title>
</head>
<body>
<form class="form" method="post" action="" target="_top" enctype="multipart/form-data">	 
		<table border="0" style="    line-height: 2.4em;
    font-size: 16px;" cellspacing="0" cellpadding="0" width="100%" class="platform_table">
			<tr>
				<td>姓名:</td>
				<td><?php echo ($user['xingming']); ?></td>
			</tr>
			<tr>
				<td>电话:</td>
				<td><?php echo ($user['tel']); ?></td>
			</tr>
			<tr>
				<td>省:</td>
				<td><?php echo ($user['province']); ?></td>
			</tr>
			<tr>
				<td>市:</td>
				<td><?php echo ($user['city']); ?></td>
			</tr>
			<tr>
				<td>邮箱:</td>
				<td><?php echo ($user['email']); ?></td>
			</tr>
			<?php if($user['g_id'] == 100): ?><tr>
				<td>医院:</td>
				<td><?php echo ($user['yiyuan']); ?></td>
			</tr>
			<?php else: ?>
			<tr>
				<td>病史:</td>
				<td><?php echo ($user['bingshi']); ?></td>
			</tr>
			<tr>
				<td>病史图片：</td>
				<td>
				<?php if(is_array($user[bingshi_pic])): foreach($user[bingshi_pic] as $key=>$v): ?><a target="_blank" href="<?php echo ($v); ?>"><img src="<?php echo ($v); ?>" style="width:50px" alt="" /></a> &nbsp;<?php endforeach; endif; ?>
				</td>
			</tr><?php endif; ?>
		</table>
</form>
</body>
</html>