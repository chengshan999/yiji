<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="" target="_parent" method="post">
<table>
	<tr>
		<td>所属课程类别</td>
		<td><select name="pid" id="">
			<?php if($data["pid"] == 0): ?><option value="0" selected="selected">主课程</option>
			<?php else: ?>
			<option value="0" >主课程</option><?php endif; ?>
			<?php if(is_array($pinpai)): foreach($pinpai as $key=>$v): if($data[pid] == $v[id]): ?><option value="<?php echo ($v["id"]); ?>" selected="selected"><?php echo ($v["name"]); ?></option>
			<?php else: ?>
			<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endif; endforeach; endif; ?>
		</select></td>
	</tr>
	<tr>
		<td>名称：</td>
		<td><input type="text" name="name" value="<?php echo ($data["name"]); ?>" id="" /></td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" /></td>
		<td><input type="submit" value="确定添加" /></td>
	</tr>
</table>
</form>
</body>
</html>