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
		<td>地区</td>
		<td><select name="pid" id="">
			<?php if(is_array($diqu)): foreach($diqu as $key=>$v): if($yiyuan[pid] == $v[id]): ?><option value="<?php echo ($v["id"]); ?>" selected="selected"><?php echo ($v["name"]); ?></option>
			<?php else: ?>
			<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endif; endforeach; endif; ?>
		</select></td>
	</tr>
	<tr>
		<td>名称：</td>
		<td><input type="text" name="name" value="<?php echo ($yiyuan["name"]); ?>" id="" /></td>
	</tr>
	<tr>
		<td>地址：</td>
		<td><input type="text" name="addr" value="<?php echo ($yiyuan["addr"]); ?>" id="" /></td>
	</tr>
	<tr>
		<td>电话：</td>
		<td><input type="text" name="tel" value="<?php echo ($yiyuan["tel"]); ?>" id="" /></td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo ($yiyuan["id"]); ?>" /></td>
		<td><input type="submit" value="确定添加" /></td>
	</tr>
</table>
</form>
</body>
</html>