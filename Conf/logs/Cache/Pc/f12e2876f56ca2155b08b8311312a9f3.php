<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>统计结果</title>
</head>
<body>
<table>
	<tr>
		<th>1.您的职业</th>
		<th>2.您的居住区域</th>
		<th>3.小孩是否在8-16岁</th>
		<th>4.小孩是否喜欢篮球</th>
		<th>5.您是否知道教育部最新发布的校园篮球政策</th>
		<th>6.您是否愿意小孩接受专业的篮球培训</th>
		<th>7.您是否愿意小孩参加CBA/NBA球星举办的训练营</th>
		<th>8.您的电话（必填）</th>
	</tr>
	<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
		<td><?php echo ($v["q1"]); ?></td>
		<td><?php echo ($v["q2"]); ?></td>
		<td><?php echo ($v["q3"]); ?></td>
		<td><?php echo ($v["q4"]); ?></td>
		<td><?php echo ($v["q5"]); ?></td>
		<td><?php echo ($v["q6"]); ?></td>
		<td><?php echo ($v["q7"]); ?></td>
		<td><?php echo ($v["tel"]); ?></td>
	</tr><?php endforeach; endif; ?>
</table>
</body>
</html>