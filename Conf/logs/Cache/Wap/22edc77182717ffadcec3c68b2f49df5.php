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
        .jifeng-content {
            padding: 1rem;
        }

        .jifeng-content h3 {
            font-size: 1.8rem;
            margin: 1rem 0 10%;
            color: #fff;
            text-align: center;
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

        .address-module .add-module-1 p span {
            padding-right: 10%;
        }

        .address-module .add-module-2 {
            width: 10%;
            float: right;
            position: absolute;
            right: 0;
            bottom: 0;

        }

        .address-module .add-module-2 img {
            vertical-align: middle;
        }

        .address-module {
            overflow: hidden;
            margin-bottom: 1rem;
            margin-top: 1rem;
            position: relative;
        }

        div.address-module + div.address-module {
            border-top: 1px solid #fff;
        }

        .add-btn {

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

        p.lj {
            margin-top: 10%;
        }

        p.lj a {
            color: red;
        }

        form#add p {
            padding: 0 0;
            border-bottom: 1px solid #fff;
            margin-bottom: 1rem;
            color: #fff;

        }

        form#add p span {
            width: 15%;
            float: left;
            font-size: 1rem;
            height: 3rem;
            line-height: 3rem;
            padding-left: 0.5rem;
            box-sizing: border-box;
        }

        form#add p input {
            width: 85%;
            float: left;
            height: 3rem;
            line-height: 3rem;
            background: transparent;
            font-size: 1rem;
            color: #fff;
        }

        form#add input[type=button]{
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

        form#add .add-1 {
            width: 27%;
            float: left;
            border: 1px solid #fff;
            box-sizing: border-box;
            text-align: center;
            margin-right: 1%;
            background-image: url("<?php echo RES;?>/images/sanjiao.png");
            background-repeat: no-repeat;
            background-position: right center;
            background-size: 20%;
        }
        form#add span{
            width: 15%;
            float: left;
            color: #fff;
            padding-left: 0.5rem;
            box-sizing: border-box;
            line-height: 3rem;
        }
        form#add .add-2{
            width: 100%;
            overflow: hidden;
            color: #fff;
            padding: 0.5rem 0;
            border-bottom: 1px solid #fff;


        }
        form#add  .add-1 select{
            height: 3rem;
            color: #fff;
            width: 100%;
        	color:#00a8d5;
        background:#fff;

        }
        input::-webkit-input-placeholder,input:focus::-webkit-input-placeholder,select::-webkit-input-placeholder,select:focus::-webkit-input-placeholder{
            color: #fff;
        }
    </style>

</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main">

    <div class="jifeng-content">
        <h3>收货地址</h3>


        <form action="" id="add" method="post">
            <p class="clearfix"><span>姓名</span><input type="text" name="xingming" placeholder="请输入.."></p>
            <p class="clearfix"><span>电话</span><input type="text" name="tel" placeholder="请输入.."></p>


            <div data-toggle="distpicker" class="province-box add-2" >
            <span>地址</span>
                <div class="add-1">
                    <!--<label class="sr-only" for="province2">Province</label>-->
                    <select class="form provincechoose" name="province" id="province2" data-province="---- 选择省 ----">
                        <option value="">---- 选择省 ----</option>
                    </select>
                </div>
                <div class="add-1">
                    <!--<label class="sr-only" for="city2">City</label>-->
                    <select class="form provincechoose" name="city" id="city2" data-city="---- 选择市 ----">
                        <option value="">---- 选择市 ----</option>
                    </select>
                </div>
                <div class="add-1">
                    <!--<label class="sr-only" for="district2">District</label>-->
                    <select class="form provincechoose" name="area" id="district2" data-district="---- 选择区 ----">
                        <option value="">---- 选择区 ----</option>
                    </select>
                </div>
                <div style="clear:both;"></div>
            </div>
           <div style="margin-top:1rem;border-bottom: 1px solid #fff;padding-left: 0.5rem"><input type="text" name="addr" style="width:100%;height: 3rem;background: transparent;color: #fff" placeholder="请输入详细地址"/></div>
            <input type="button"  onclick="queren();" value="确认" />
        </form>


    </div>


</div>

<script src="<?php echo RES;?>/js/distpicker.data.js"></script>
<script src="<?php echo RES;?>/js/distpicker.js"></script>
<script src="<?php echo RES;?>/js/maindis.js"></script>
</body>
</html>
<script>
function queren(){
	var addr=$("input[name='addr']").val();
	var tel=$("input[name='tel']").val();
	var xingming=$("input[name='xingming']").val();
	if(!addr || !tel ||!xingming){
		alert("请填写完整信息");
		return false;
	}else{
		//$("form").submit();
	}
}
</script>