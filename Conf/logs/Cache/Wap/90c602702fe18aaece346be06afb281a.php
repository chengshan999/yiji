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
</head>
<body>
<div class="main">
    <div class="header">
        <h3><span></span>个人中心</h3>
    </div>
    <img src="<?php echo RES;?>/images/rongyu.jpg" alt="" >
    <div class="center_container border3">
        <h4>全部明细</h4>
        <?php if(is_array($rongyu)): foreach($rongyu as $key=>$v): ?><p><span><?php echo ($v["content"]); ?> <o style='color:#ccc'>(<?php echo (date('Y-m-d',$v["createtime"])); ?>)</o></span><span>+<?php echo ($v["rongyu"]); ?>荣誉值 </span></p><?php endforeach; endif; ?>
    </div>
    <div class="blue-kb"></div>
</div>

</body>
</html>