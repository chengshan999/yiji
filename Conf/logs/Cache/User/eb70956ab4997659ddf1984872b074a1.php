<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php if($diqu != null): ?><form action="" target="_parent" method="post">
<table>
	<tr>
		<td>所属地区</td>
		<td><select name="pid" id="">
		
			<?php if(is_array($diqu)): foreach($diqu as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
			
		</select></td>
	</tr>
	<tr>
		<td>名称：</td>
		<td><input type="text" name="name" id="" /></td>
	</tr>
	<tr>
		<td>地址：</td>
		<td><input type="text" name="addr" id="" /></td>
	</tr>
	<tr>
		<td>电话：</td>
		<td><input type="text" name="tel" id="" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="确定添加" /></td>
	</tr>
</table>
</form>
<?php else: ?>
<span>请先去设置地区！</span><?php endif; ?>
</body>
</html>