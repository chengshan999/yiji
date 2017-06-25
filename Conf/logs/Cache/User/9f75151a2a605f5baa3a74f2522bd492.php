<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
    <script src="/tpl/Pc/default/common/js/jquery-1.12.3.js"></script>
</head>
<body>
<form action="" target="_parent" method="post">
<table>
	<tr>
		<td>选择分类</td>
		<td>
		<select name="pid" id="">
		<option value="0">主类</option>
		<?php if(is_array($fenlei)): foreach($fenlei as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
		</select>
		</td>
	</tr>
	<tr>
		<td style="width:120px;">资讯分类名称：</td>
		<td><input type="text" name="name"  /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="确定" /></td>
	</tr>
</table>
</form>
</body>
</html>