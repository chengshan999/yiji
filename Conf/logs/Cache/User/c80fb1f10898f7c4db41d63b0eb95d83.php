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
	<input type="hidden" name="id" value="<?php echo ($type["id"]); ?>" />
		<td>问题名称：</td>
		<td><input type="text" name="name" value="<?php echo ($type["name"]); ?>" style="width:300px;" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="确认修改" /></td>
	</tr>
</table>
</form>
</body>
</html>