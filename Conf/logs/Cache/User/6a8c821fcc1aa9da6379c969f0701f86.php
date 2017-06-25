<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>详细信息</title>
</head>
<body>
<form class="form" method="post" action="" target="_top" enctype="multipart/form-data">	 
		<table border="0" cellspacing="0" cellpadding="0" width="100%" class="platform_table">
			<tr>
				<td style="background:#eee;">收货人姓名:</td>
				<td><?php echo ($shouhuo['xingming']); ?></td>
				<td style="background:#eee;">省:</td>
				<td><?php echo ($shouhuo['province']); ?></td>
				<td style="background:#eee;">市:</td>
				<td><?php echo ($shouhuo['city']); ?></td>
			</tr>
			<tr>
				<td style="background:#eee;">区/县:</td>
				<td><?php echo ($shouhuo['area']); ?></td>
				<td style="background:#eee;">联系电话:</td>
				<td><?php echo ($shouhuo['tel']); ?></td>
				<td style="background:#eee;">收货地址:</td>
				<td><?php echo ($shouhuo['addr']); ?></td>
			</tr>
			
			<tr style="background:#aaa;">
				<td>图片</td>
				<td>产品名称</td>
				<td>数量</td>
				<td>属性</td>
				<td>单价</td>
				<td>运费</td>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td><img src="<?php echo ($v["pic"]); ?>" style="width:35px;" alt="" /></td>
				<td><?php echo ($v["productName"]); ?> <?php if($v[is_kuajing] == 1): ?><span style="color:red;">(跨境产品)</span><?php endif; ?></td>
				<td><?php echo ($v["number"]); ?></td>
				<td><?php echo ($v["color"]); ?> &nbsp;<?php echo ($v["guige"]); ?></td>
				<td><?php echo ($v["price"]); ?></td>
				<td><?php echo ($v["kuaidi_price"]); ?>.00</td>
			</tr><?php endforeach; endif; ?>
		</table>
		
</form>
</body>
</html>