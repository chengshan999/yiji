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
		<td>活动名称</td>
		<td><select name="type_name" id="">
        	<option value="澳洲游学">澳洲游学</option>
        	<option value="韩国游">韩国游</option>
        	<option value="开业典礼">开业典礼</option>
        	<option value="发布会场景">发布会场景</option>
        	<option value="发布会新闻">发布会新闻</option>
        </select></td>
	</tr>
	<tr>
		<td>时间：</td>
		<td><input type="text" name="time" value="<?php echo ($time["aozhou"]); ?>" id="" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="确定" /></td>
	</tr>
</table>
</form>
</body>
</html>
<script>
$('select').change(function(){
	var val=$(this).val();
	if(val=='澳洲游学'){
		$('input[name=time]').val('<?php echo ($time["aozhou"]); ?>');
	}else if(val=='韩国游'){
		$('input[name=time]').val('<?php echo ($time["hanguo"]); ?>');
	}else if(val=='开业典礼'){
		$('input[name=time]').val('<?php echo ($time["kaiye"]); ?>');
	}else if(val=='发布会场景'){
		$('input[name=time]').val('<?php echo ($time["changjing"]); ?>');
	}else if(val=='发布会新闻'){
		$('input[name=time]').val('<?php echo ($time["xinwen"]); ?>');
	}
})
</script>