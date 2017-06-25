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
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/diyUpload.css">
    <script type="text/javascript" src="<?php echo RES;?>/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/diyUpload.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>

    <style>
        /*--------3-17-------*/


        .consult_center_container {
            padding: 1rem;
            margin-bottom: 4rem; }
        .consult_center_container input[type=button] {
            width: 100%;
            text-align: center;
            height: 3rem;
            color: #157fad;
            font-size: 1.2rem;
            margin-bottom: 5%;
            margin-top: 5%;
            border-radius: 5px;
            background: #fff;
        }
        .consult_center_container h3 {
            font-size: 1.8rem;
            margin: 1rem 0 10%;
            color: #fff;
            text-align: center;
            background-position: left center;
            background-size: 8%;
            background-repeat: no-repeat; }
        .consult_center_container .consult_module {
            width: 100%;
            overflow: hidden;
            margin: 1rem 0;
            border-bottom: 1px solid #fff;
            box-sizing: border-box;
        }
        .consult_center_container .consult_module span {
            display: inline-block;
            width: 30%;
            float: left;
            height: 3rem;
            line-height: 3rem;
            text-align: center;
            color: #fff;
            font-size: 1.2rem;
            box-sizing: border-box;
            background: transparent;
        }
        .consult_center_container .consult_module input {
            display: inline-block;
            width: 70%;
            float: left;
            height: 3rem;
            box-sizing: border-box;
            padding-left: 19px;
            font-size: 1.2rem;
            background-color: transparent;
            color: #fff; }
        .consult_center_container .consult_module input::-webkit-input-placeholder {
            color: #fff; }
        .consult_center_container .consult_module input:focus::-webkit-input-placeholder {
            color: #fff; }
        .consult_center_container .consult_module select {
            display: inline-block;
            width: 70%;
            float: left;
            height: 3rem;
            box-sizing: border-box;
            padding-left: 15px;
            font-size: 1.2rem;
            background-color: transparent;
            color: #fff;
            border-radius: 0px;
            border: 0px;
            background-image: url("<?php echo RES;?>/images/sj.png");
            background-position: right 2% center;
            background-repeat: no-repeat;
            background-size: 10%;
            outline: none;
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none; 
            color:#00a8d5;   }
        .consult_center_container .consult_module p {
            width: 100%;
            float: left;
            height: 3rem;
            line-height: 3rem;
            text-align: center;
            color: #fff;
            font-size: 1.2rem;
            box-sizing: border-box; }
        .consult_center_container .consult_module textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 15px;
            font-size: 1.2rem;
            outline: none;
            color: #fff;
            border: 0;
            background: transparent;

        }
        .consult_center_container .consult_module textarea::-webkit-input-placeholder {
            color: #fff; }
        .consult_center_container .consult_module textarea:focus::-webkit-input-placeholder {
            color: #fff; }
        .border-textarea{
            border: 0 !important;
        }
        .consult_center_container .consult_module select.select{
	           color:#fff;
        }
        .consult_center_container .consult_module select.select optgroup{
	    color:#00a8d5;
        background:#fff;
        }
        /*-------------------*/


        .border-textarea{
            border-radius: 5px;
            border: 1px solid #fff !important;
            padding-bottom: 1rem;
        }
        .webuploader-pick-hover{
            background: #fff;
            color: #00a8d5;
        }
        .webuploader-pick{
            background: #fff;
            color: #00a8d5;
        }
        .parentFileBox>.diyButton>a{
            color: #00a8d5;
            background: #fff;
        }

    </style>


</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main">

    <div class="consult_center_container">
        <h3>咨询中心</h3>

        <form action="" method="post">
            <div class="consult_module">
                <span class="box-shadow">姓 名</span>
                <input type="text" value="<?php echo ($user["xingming"]); ?>" name="xingming" placeholder="请输入姓名..">
            </div>
            <div class="consult_module">
                <span class="box-shadow">年 龄</span>
                <input type="text" name="age"  placeholder="请输入年龄..">
            </div>
            <div class="consult_module">
                <span class="box-shadow">电 话</span>
                <input type="text" name="tel" value="<?php echo ($user["tel"]); ?>" placeholder="请输入电话..">
            </div>
            <div class="consult_module">
                <span class="box-shadow">现居地</span>
                <input type="text" name="home" placeholder="请输入地址..">
            </div>
            <div class="consult_module">
                <span class="box-shadow">就诊医院</span>
                <select name="yiyuan_id" class='select'>
                     <?php if(is_array($diqu)): foreach($diqu as $key=>$v): ?><optgroup label="<?php echo ($v["name"]); ?>">
						<?php if(is_array($v[yiyuan])): foreach($v[yiyuan] as $key=>$val): ?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; ?>
						</optgroup><?php endforeach; endif; ?>
                     
                </select>
            </div>
            <div class="consult_module">
                <span class="box-shadow">咨询标题</span>
                <input type="text" name="title" placeholder="请输入咨询标题..">
            </div>
            <div class="consult_module border-textarea">
                <textarea name="question" id="" cols="30" rows="2" placeholder="请输入病例详情..."></textarea>
                <div id="localImag">
					   		<img id="preview" src="" width="150" height="180" style="display: none; width: 150px; height: 1100px;">
					   	</div>
					   	<div style="text-align:center;">( <o style="color:red;">图片说明</o>：现病史或者出院小结，肺功能报告单，胸片/CT )</div>
					   	<div id="box">
								<div id="test" ></div>
							</div>
							<div id="input"></div>
						<div class="field submit-field col-md-12 clearfix"></div>
            </div>
            <input type="button" onclick="tijiao();" value="提交">
        </form>
    </div>
</div>
</body>
</html>
<script>
function tijiao(){
	var content=$("textarea").val();
	var tel=$("input[name=tel]").val();
	var xingming=$("input[name=xingming]").val();
	var age=$("input[name=age]").val();
	var title=$("input[name=title]").val();
	if(!content || !tel || !title || !xingming || !age){
		alert("请填写完整信息！");
		return false;
	}else{
		$("input[type=button]").removeAttr('onclick');
		var img=$(".parentFileBox").find(".diyFileName").text();
		if(img){
			$(".diyStart").click();
		}else{
			$("form").submit();
		}
	}
};


$('#test').diyUpload({
    url:'server/fileupload.php',
    dataType:'json',
    success:function( json ) {
        var a=json._raw;
        $("#input").append("<input type='hidden' name='pic[]' value="+a+" />");
        console.info( json['_raw'] );
    },
    error:function( err ) {
        console.info( err );
    }
});
</script>