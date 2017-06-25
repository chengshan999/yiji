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
		<td>所属医院</td>
		<td><select name="yiyuan_id" id="">
			<?php if(is_array($diqu)): foreach($diqu as $key=>$v): ?><optgroup label="<?php echo ($v["name"]); ?>">
				<?php if(is_array($v[yiyuan])): foreach($v[yiyuan] as $key=>$val): ?><option <?php if($val[id]==$data[id]){echo 'selected';} ?>  value="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; ?>
				</optgroup><?php endforeach; endif; ?>
		</select></td>
	</tr>
	<tr>
		<td>姓名：</td>
		<td><input type="text" name="xingming" value="<?php echo ($data["xingming"]); ?>" id="" /></td>
	</tr>
	<tr>
		<td>手机号</td>
		<td><input type="text" name="tel" value="<?php echo ($data["tel"]); ?>" id="" /></td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" /></td>
		<td><input type="submit" value="确定添加" /></td>
	</tr>
</table>
</form>
</body>
</html>