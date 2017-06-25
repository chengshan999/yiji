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
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/diyUpload.css">
    <script type="text/javascript" src="<?php echo RES;?>/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/diyUpload.js"></script>
    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/boston.js"></script>
       <style>

        /*-----3-17--------*/
        textarea.text1 {
            width: 75%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 15px;
            height: 10rem;
            font-size: 1rem;
        }

        .margin-span {
            height: 10rem;
            box-sizing: border-box;
            float: left;
        }

        /*------3-20--------*/

        #modal{
            width: 100%;
            padding: 1rem;
            position: fixed;
            top: 0;
            left: 0;
            background:#00a8d5;
            box-sizing: border-box;
            z-index: 999;
            box-shadow: 2px 2px 2px #fff;
            display: none;

        }
        #modal .xg-p{
            color: #000;
        }


        #modal select{
            width: 75%;
            box-sizing: border-box;
            height: 3rem;
            padding-left: 15px;
            line-height: 3rem;
            display: inline-block;
            float: right;
            border-radius: 0;
            background: #fff;
            outline: none;
            border: 0;
        }

        .xg-p{
            overflow: hidden;
            font-size: 1.2rem;
            padding: 0.5rem 0;
            margin: 0.5rem 0;
            color: #4d4d4d;

        }
        .btn-xg{
            width: 100%;
            margin-top: 2rem;
            padding: 1rem;
            box-sizing: border-box;
        }

        .btn-xg a{
            padding: 0.5rem 1rem;
            background: #fff;
            border-radius: 3px;
            color: #000;
        }
        .btn-xg a:first-child{
            float: left;
        }
        .btn-xg a:last-child{

            float: right;
        }

       #end-img span{
	       width: 50%;
       	   float:left;
       	   box-sizing: border-box;
       	   padding:0.5rem;
       }
        .name-yy{
            width: 75%;
            box-sizing: border-box;
            height: 3rem;
            padding-left: 15px;
            line-height: 3rem;
            display: inline-block;
            float: right;
            border-radius: 0;
            background: #fff;
            outline: none;
            border: 0;
        }
        #modal input::-webkit-input-placeholder {
            color: #000; }
        #modal input:focus::-webkit-input-placeholder {
            color: #000; }
    </style>
</head>
<body>
<div class="main">
    <div class="header">
        <h3><span></span>修改个人资料</h3>
    </div>
    <div class="center_container">
        <form action="" enctype="multipart/form-data" method="post" id="form">
            <p><span>姓名</span><input type="text" name="xingming" readonly="readonly" value="<?php echo ($data["xingming"]); ?>"></p>
            <p><span>手机</span><input type="text" name="tel" readonly="readonly" value="<?php echo ($data["tel"]); ?>"></p>
            <p><span>邮箱</span><input type="text" name="email" value="<?php echo ($data["email"]); ?>"></p>
            <p><span>省份</span><input type="text" name="province" value="<?php echo ($data["province"]); ?>"></p>
            <?php if($user[g_id] == 100): ?><p><span>医院信息</span><input type="text" name="yiyuan" id="btn-xg-ys" <?php if($data[yiyuan]){echo "value='{$data[yiyuan][name]} | {$data[yiyuan][keshi]} | {$data[yiyuan][zhuanye]} | {$data[yiyuan][zhicheng]}'";} ?>  readonly="readonly" ></p>
            <?php else: ?>
            <p><span>病史</span><textarea name="bingshi" id="" cols="30" rows="10"><?php echo ($data["bingshi"]); ?></textarea></p>
            <!--上传图片start-->
					   	<div id="localImag">
					   		<img id="preview" src="" width="150" height="180" style="display: none; width: 150px; height: 1100px;">
					   	</div>
					   	<div style="text-align:center;">( <span style="color:red;">图片说明</span>：现病史或者出院小结，肺功能报告单，胸片/CT )</div>
					   	<div id="box">
								<div id="test" ></div>
							</div>
							<div id="input"></div>
						<div class="field submit-field col-md-12 clearfix"></div>
                <!--上传图片end-->
            <p id='end-img'>
            <?php if(is_array($data["bingshi_pic"])): foreach($data["bingshi_pic"] as $key=>$v): ?><span>
            <img src="<?php echo ($v); ?>"   alt="" />
            </span><?php endforeach; endif; ?>
            </p><?php endif; ?>
            <input type="button" class='button'  value="提交">
        </form>
    </div>
</div>
<div id="modal">
    <p class="xg-p">
        <span>医院名称</span>
        <input type="text" placeholder="请填写医院名称" class="name-yy" id="dj">
    </p>
    <p class="xg-p">
        <span>科室</span>
        <select name="" id="kes">
            <option value="">呼吸内科</option>
            <option value="">胸外科</option>
            <option value="">介入科</option>
            <option value="">内镜中心</option>
            <option value="">其他</option>
        </select>
    </p>
    <p class="xg-p">
        <span>专业方向</span>
        <select name="" id="zy">
            <option value="">哮喘</option>
            <option value="">介入</option>
            <option value="">其他</option>
        </select>
    </p>
    <p class="xg-p">
        <span>职称</span>
        <select name="" id="zc">
            <option value="">主任医师</option>
            <option value="">副主任医师</option>
            <option value="">主治医师</option>
            <option value="">住院医师</option>
            <option value="">其他</option>
        </select>
    </p>


    <div class="btn-xg clearfix">
        <a href="javascript:void (0)" id="btn-qx">取消</a>
        <a href="javascript:void (0)" id="btn-qr">确认</a>
    </div>
</div>
</body>
</html>
<script>
$('#test').diyUpload({
	url:'server/fileupload.php',
	dataType:'json',
	success:function( json ) {
		var a=json._raw;
		$("#input").append("<input type='hidden' name='bingshi_pic[]' value="+a+" />");
		console.info( json['_raw'] );
	},
	error:function( err ) {
		console.info( err );	
	}
});

$(function () {
    $('input#btn-xg-ys').focus(function () {
        $('#modal').css('display','block');
    })
    $('a#btn-qx').click(function () {
        $('#modal').css('display','none');
    })
    $('a#btn-qr').click(function () {
        var $text_dj = $('#dj').val();
        var $text_ks = $('#kes option:selected').text();
        var $text_zy = $('#zy option:selected').text();
        var $text_zc = $('#zc option:selected').text();
        $('#btn-xg-ys').val($text_dj +' | '+ $text_ks +' | '+ $text_zy +' | '+$text_zc);
        $('#modal').css('display','none');
    })
})

$(".button").click(function(){
	var img=$(".parentFileBox").find(".diyFileName").text();
	if(img){
		$(".diyStart").click();
	}else{
		$("form").submit();
	}
})
</script>