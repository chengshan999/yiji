<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>详细信息</title>
</head>
<body>
<form class="form" method="post" action="" target="_top" enctype="multipart/form-data">	 
		<table border="0" cellspacing="0" cellpadding="0" width="100%" class="platform_table">
		
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td><?php echo ($v["context"]); ?></td>
				<td><?php echo ($v["time"]); ?></td>
			</tr><?php endforeach; endif; ?>
		
		</table>
		
</form>
</body>
</html>