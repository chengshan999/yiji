<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="" target="_parent" method="post" enctype="multipart/form-data">
<table>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
	<tr>
		<td>商品名称：</td>
		<td><input type="text" name="productName" value="<?php echo ($data["productName"]); ?>" /></td>
	</tr>
	<tr>
		<td>图片：</td>
		<td><input type="file" name="pic"  /><img src="<?php echo ($data["pic"]); ?>" style="width:50px;" alt="" /></td>
	</tr>
	<tr>
		<td>所需积分：</td>
		<td><input type="text" name="rongyu" value="<?php echo ($data["point"]); ?>" /></td>
	</tr>
	<tr>
		<td>库存：</td>
		<td><input type="text" name="kucun" value="<?php echo ($data["kucun"]); ?>" /></td>
	</tr>
	<tr>
		<td>描述：</td>
		<td><textarea name="info" id="" cols="30" rows="10"><?php echo ($data["info"]); ?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="确定添加" /></td>
	</tr>
</table>
</form>
</body>
</html>