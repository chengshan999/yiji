<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>积分商城</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/style.css">
    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>

    <style>
        .jifeng-content{
            padding: 1rem;
        }
        .jifeng-content h3{
            font-size: 1.8rem;
            margin: 1rem 0 10%;
            color: #fff;
            text-align: center;
            /*background-image: url("images/jt.png");
            background-position: left center;
            background-size: 8%;
            background-repeat: no-repeat;*/
        }

        .jifeng-content .jianjie-content h4{
            font-size: 1.3rem;
            padding: 1rem 0;
            border-bottom: 1px solid #fff;
            color: #fff;
            margin-bottom: 1rem;
        }
        .jifeng-content .jianjie-content{
            margin-bottom: 4rem;
        }
        .jifeng-content .jianjie-content h4 span{
            font-size: 1rem;

        }
        .jifeng-content .jianjie-content p{
            color: #fff;
            font-size: 1rem;

        }
        .jifeng-content .jianjie-content h5{
            margin-bottom: 0.5rem;
            font-size: 1rem;
            color: #fff;
        }
        a.ljdh{
            display: block;
            width: 100%;
            margin-top: 10%;
            background: #fff;
            padding: 0.5rem;
            text-align: center;
            color: #00a8d5;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 1rem;

        }
    </style>

</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main" >

    <div class="jifeng-content">
        <h3>礼品简介</h3>
        <div class="jianjie-content">
            <h4><?php echo ($data["productName"]); ?> <span>（<?php echo ($data["rongyu"]); ?>荣誉值）</span></h4>
            <h5>商品简介:</h5>
            <p>
                <?php echo ($data["info"]); ?>
            </p>
        </div>
        <a href="javascript:void(0);" onclick="duihuan();" class="ljdh">立即兑换</a>
    </div>
</div>

</body>
</html>
<script>
function duihuan(){
	var jifen="<?php echo ($jifen); ?>";
	var rongyu="<?php echo ($data["rongyu"]); ?>";
	if(parseInt(jifen)<parseInt(rongyu)){
		alert('您的荣誉值不够！无法兑换');
		return false;
	}
	$(".ljdh").attr('onclick','');
	var product_id="<?php echo ($data["id"]); ?>";
	$.ajax({
 		url:"<?php echo U('User/create_order');?>",
 		data:{product_id,product_id},
		type:"POST",
		success:function(data){
			if(data!='false'){

			alert('兑换成功，请耐心等待发货！');
			window.location.href="<?php echo U('User/jifen');?>";
			}else{
				alert('兑换失败，请稍后重试！');
				return false;
			}
		}
 	})
}
</script>