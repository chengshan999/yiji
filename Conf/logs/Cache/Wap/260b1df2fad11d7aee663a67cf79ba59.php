<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>易迹</title>

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
            background-image: url("<?php echo RES;?>/images/jt.png");
            background-position: left center;
            background-size: 8%;
            background-repeat: no-repeat;
        }
        .address-module .add-module-1 {
            width: 90%;
            float: left;
        }
        .address-module .add-module-1 p {
            font-size: 1.1rem;
            color: #fff;
            padding: 0.5rem 0;
        }
        .address-module .add-module-1 p span{
            padding-right: 10%;
        }
        .address-module .add-module-2 {
            width: 10%;
            float: right;
            position: absolute;
            right: 0;
            bottom: 0;

        }
        .address-module .add-module-2 img{
            vertical-align: middle;
        }
        .address-module{
            overflow: hidden;
            margin-bottom: 1rem;
            margin-top: 1rem;
            position: relative;
        }
        div.address-module+div.address-module{
            border-top: 1px solid #fff;
        }
        .add-btn{

            width: 100%;
            display: block;
            height: 3rem;
            background: #fff;
            text-align: center;
            font-size: 1.2rem;
            line-height: 3rem;
            border-radius: 3px;
            color: #00a8d5;
            margin-top: 30%;
        }
        p.lj{
            margin-top: 10%;
        }
        p.lj a{
            color: red;
        }
    </style>

</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main" >

    <div class="jifeng-content">
        <a href="<?php echo U('User/center');?>"><h3>收货地址</h3></a>
		<?php if(is_array($shouhuo)): foreach($shouhuo as $key=>$v): ?><div class="address-module">
            <div class="add-module-1">
                <p><span><?php echo ($v["xingming"]); ?></span><span><?php echo ($v["tel"]); ?></span></p>
                <p><?php echo ($v["province"]); ?> <?php echo ($v["city"]); ?> <?php echo ($v["area"]); ?> <?php echo ($v["addr"]); ?></p>
            </div>
            <div class="add-module-2">
                <a href="<?php echo U('User/dizhi_edit',array('id'=>$v[id]));?>"><img src="<?php echo RES;?>/images/xiugai.png" alt=""></a>
            </div>
        </div><?php endforeach; endif; ?>




        <a href="<?php echo U('User/dizhi_add');?>" class="add-btn">新增地址</a>


    </div>




</div>


</body>
</html>