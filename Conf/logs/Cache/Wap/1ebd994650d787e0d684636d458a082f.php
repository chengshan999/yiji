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
            background-position: left center;
            background-size: 8%;
            background-repeat: no-repeat;
        }
        .jifeng-content p.jfz{
            text-align: center;
            border: 1px solid #fff;
            padding: 0.5rem;
            font-size: 1.2rem;
            color:#fff;
        }
        .jifeng-content .jifeng-list{
            margin: 1rem 0;
            
        }
        .jifeng-content .jifeng-list .jifeng-module{
            width: 50%;
            float: left;
            box-sizing: border-box;
        }
        .border-right{
            border-right: 1px solid #ccc;
        }
        .border-bottom{
            border-bottom:1px solid #ccc;
        }
        .padding-left{
            padding-left:1px;
        }
        .jifeng-content .jifeng-list .jifeng-module img{
            width: 100%;
        }
        .jifeng-content .jifeng-list .jifeng-module p{
            padding: 0.5rem;
            color: #000;
            font-size: 1rem;
        }
        .jifeng-content .jifeng-list .jifeng-module p.gray{
            color: #ccc;
            padding: 0 0.5rem;
            font-size: 0.6rem;
        }
        .jifeng-content .jifeng-list .jifeng-module p.gray span{
            color: #00a8d5;
            padding-right: 0.5rem;
        }
        .jifeng-content .jifeng-list .jifeng-module{
	       background: #fff;  
        }
        
        
p.jfz a:first-child{
            width: 49%;
            float: left;
            color: #fff;

        }
        p.jfz a:last-child{
            width: 49%;
            float: right;
            color: #fff;

        }
        .jifeng-select{
            width: 100%;
            margin: 1rem 0;
            border-bottom: 1px solid #fff;
        }
        .jifeng-select select{
            width: 100%;
            height: 3rem;
            line-height: 3rem;
            color: #fff;
            background: transparent;
            background-image: url("<?php echo RES;?>/images/sj.png");
            background-repeat: no-repeat;
            background-position: right 2% center;
            background-size: 8%;
            border: 0;
            outline: none;
            padding-left: 2%;
            appearance:none;
            -moz-appearance:none;
            -webkit-appearance:none;
        }
        .jifeng-select select option{
	        color: #fff;
            background: #00a8d5;
        }
    </style>

</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main" >

    <div class="jifeng-content">
        <h3>积分商城</h3>
        <p class="jfz"><a href="">荣誉值:<?php echo ($rongyu); ?></a> | <a href="<?php echo U('User/order');?>">兑换记录</a></p>

        <div class="jifeng-select">
            	<?php if($shouhuo != null): ?><select name="shouhuo_id" id="">
                <?php if(is_array($shouhuo)): foreach($shouhuo as $key=>$v): if(session('shouhuo_id')==$v['id']) {?>
				 <option value="<?php echo ($v["id"]); ?>" selected ><?php echo ($v["province"]); ?> <?php echo ($v["city"]); ?> <?php echo ($v["area"]); ?> <?php echo ($v["addr"]); ?></option>
				<?php } ?>
                <option value="<?php echo ($v["id"]); ?>"><?php echo ($v["province"]); ?> <?php echo ($v["city"]); ?> <?php echo ($v["area"]); ?> <?php echo ($v["addr"]); ?></option><?php endforeach; endif; ?>
            </select>
                <?php else: ?>
                	<div><a style="text-decoration:none;color:white;" href="<?php echo U('User/dizhi');?>">暂无收货地址，请在个人中心添加！点击添加</a></div><?php endif; ?>
        </div>
        <div class="jifeng-list clearfix">
        	<?php if(is_array($data)): foreach($data as $key=>$v): ?><a href="<?php echo U('User/jifen_detail',array('id'=>$v[id]));?>">
                <div class="jifeng-module border-bottom border-right">
                    <p><?php echo ($v["productName"]); ?></p>
                    <p class="gray"><span><?php echo ($v["rongyu"]); ?></span>荣誉值</p>
                    <img src="<?php echo ($v["pic"]); ?>" alt="">
                </div>
            </a><?php endforeach; endif; ?>
        </div>
    </div>

</div>


</body>
</html>
<script>
$("select").change(function(){
	var shouhuo_id = $("select").val();
 $.ajax({
	url:'<?php echo U("User/change_dizhi");?>',
	data:{shouhuo_id:shouhuo_id},
	type:"POST",
	success:function(){
		
	}
 })
})
</script>