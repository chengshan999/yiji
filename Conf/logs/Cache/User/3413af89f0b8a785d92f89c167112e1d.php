<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php if($product == null): ?><h2 style='text-align:center;'>此订单暂无跨境产品！</h2>
<?php else: ?>
<form class="form" method="post" action="" target="_top" enctype="multipart/form-data">	 
		<table border="0" cellspacing="0" cellpadding="0" width="100%" class="platform_table">
			<tr>
			<td style='color:red;'>订购人信息</td>
			<td></td>
			</tr>
			<tr>
			<input type="hidden" name="orderid"  value="<?php echo ($order["orderid"]); ?>"/>
			<input type="hidden" name="id"  value="<?php echo ($order["id"]); ?>"/>
				<td>姓名: <input type="text" readonly="readonly" style="background:#ccc;" name="xingming" value="<?php echo ($user["xingming"]); ?>" id="" /></td>
				<td>身份证号: <input type="text" readonly="readonly" style="background:#ccc;" name="card_num" value="<?php echo ($user["card_num"]); ?>" id="" /></td>
			</tr>
			<tr>
				<td>电话: <input type="text" readonly="readonly" style="background:#ccc;" name="tel" value="<?php echo ($user["tel"]); ?>" id="" /></td>
				<td>注册账号: <input type="text" readonly="readonly" style="background:#ccc;" name="zhanghao" value="<?php echo ($user["zhanghao"]); ?>" id="" /></td>
			</tr>
			<tr>
			<td style='color:red;'>收获人信息</td>
			<td></td>
			</tr>
			<tr>
				<td>姓名: <input type="text" readonly="readonly" style="background:#ccc;" name="shouhuo_xingming" value="<?php echo ($shouhuo["xingming"]); ?>" id="" /></td>
				<td>省份: <input type="text" readonly="readonly" style="background:#ccc;" name="province" id="" value="<?php echo ($shouhuo["province"]); ?>" /></td>
			</tr>
			<tr>
				<td>城市: <input type="text" readonly="readonly" style="background:#ccc;" name="city" id="" value='<?php echo ($shouhuo["city"]); ?>' /></td>
				<td>区/县: <input type="text" readonly="readonly" style="background:#ccc;" name="area" id="" value='<?php echo ($shouhuo["area"]); ?>' /></td>
			</tr>
			<tr>
				<td>收获地址: <input type="text" readonly="readonly" style="background:#ccc;" name="addr" id="" value='<?php echo ($shouhuo["addr"]); ?>' /></td>
				<td>电话: <input type="text" readonly="readonly" style="background:#ccc;" name="shouhuo_tel" id="" value='<?php echo ($shouhuo["tel"]); ?>' /></td>
			</tr>
			<tr>
			<td style='color:red;'>订单信息</td>
			<td></td>
			</tr>
			<tr>
				<td>实际支付金额: <input type="text" name="total_price" readonly="readonly" style="background:#ccc;" value="<?php echo ($all_price); ?>"  id="" /></td>
				<td>主要货物信息: <input type="text"  name="productInfo" id="" value="真珠美学系列产品" /></td>
			</tr>
			<tr>
				<td>订单总金额: <input type="text" name="total_price" readonly="readonly" style="background:#ccc;" value="<?php echo ($all_price); ?>"   id="" /></td>
				<td>运费: <input type="text" name="" readonly="readonly" style="background:#ccc;" value="0" id="" /></td>
			</tr>
			<?php if(is_array($product)): foreach($product as $key=>$v): ?><tr>
			<td style='color:red;'>商品信息(填写条形码)</td>
			<td></td>
			</tr>
			<tr>
				<td>商品条形码: <input type="text" name="tiaoxingma[<?php echo ($key); ?>]" readonly="readonly" style="background:#ccc;" value="<?php echo ($v["tiaoxingma"]); ?>" id="" /></td>
				<td>商品名称: <input type="text" name="productName[<?php echo ($key); ?>]" readonly="readonly" style="background:#ccc;" value="<?php echo ($v["productName"]); ?>" id="" /></td>
			</tr>
			<tr>
				<td>商品数量: <input type="text" name="num[<?php echo ($key); ?>]" readonly="readonly" style="background:#ccc;" value="<?php echo ($v["number"]); ?>" id="" /></td>
				<td>商品单价: <input type="text" name="price[<?php echo ($key); ?>]" readonly="readonly" style="background:#ccc;" value="<?php echo ($v["zhiyou_price"]); ?>"   id="" /></td>
			</tr>
			<tr>
				<td>付款金额: <input type="text" name="product_total_price[<?php echo ($key); ?>]" readonly="readonly" style="background:#ccc;" value="<?php echo ($v["product_total_price"]); ?>" id="" /></td>
				<td></td>
			</tr><?php endforeach; endif; ?>
			<tr>
				<td style='color:red;'>调用ueq接口生成订单需要几秒钟的时间，确定后请勿关闭页面</td>
				<td><input type="submit" value="确定" class="btnGrayS" /></td>
			</tr>
		</table>
		
</form><?php endif; ?>
</body>
</html>