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
			<option value="0">主课程</option>
			<?php if(is_array($pinpai)): foreach($pinpai as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
		</select></td>
	</tr>
	<tr>
		<td>名称：</td>
		<td><input type="text" name="name" id="" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="确定添加" /></td>
	</tr>
</table>
</form>
</body>
</html>