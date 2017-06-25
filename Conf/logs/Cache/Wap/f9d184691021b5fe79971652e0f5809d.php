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
    <div class="case_container" id="height">

        <h3 style="background-image:none;"><?php if($type == 'yisheng'): ?>医生<?php else: ?>用户<?php endif; ?>注册</h3>
        <div class="img-zc">
            <img style="border-radius:50%;"  src="<?php echo RES;?>/images/reg.png" alt="">
        </div>
        <form action="__URL__/save_user" method="post" id="form-zc">
            <input type="text" placeholder="姓名" name="xingming" class="input">
            <input type="text" placeholder="手机号码" name="text_tel" id="phone"  class="input">
            <input type="text" placeholder="验证码" class="yzm" name="yz" class="input" autocomplete="off"><input type="button" value="获取验证码" class="yanzhengma" onclick="timever(this)" id="send_btn">
            <input type="hidden" name="type" value="<?php echo ($type); ?>" />
            <input id="tijiao" type="button"  value="提交" >
        </form>

    </div>
</div>

<script>
    window.onload = function () {
        gaoDu();
    }

    function gaoDu() {
        var _height1 = document.body.clientHeight;
        var _height2 = document.body.scrollHeight;
        var _case = document.getElementById('height');
        if(_height1 > _height2){
            _case.style.height = _height1 + 'px';
        }else{
            _case.style.height = _height2 + 'px';
        }
    }

</script>
<script type="text/javascript">
	var verwait=60;
	function timever(o) {
    	var tel = $('#phone').val();
    	var reg = /^0?1[3|4|5|7|8][0-9]\d{8}$/;
    	if(o.getAttribute("disabled")!="true"){
	    	if (!reg.test(tel)) {
				alert("请填写正确的手机！");
				return false;
			}else{
				$.get('index.php?g=Wap&m=User&a=get_verify',{mobile:tel}); 
			}
    	}
		if (verwait == 0) {
			// $("#vericcode").val('');A
			o.removeAttribute("disabled");          
			$('.yanzhengma').val('重新发送');
			verwait = 60;
		} else {
			o.setAttribute("disabled", true);
			$('.yanzhengma').val('重新发送(' + verwait + '秒)');
         verwait--;
         setTimeout(function() {
             timever(o);
         },
         1000)
       } 
	}
	$("#tijiao").click(function(){
		if(!$("input[name=xingming]").val()){
			alert("请填写姓名！");
			$("input[name=xingming]").focus();
			return false;
		}
		var tel = $('#phone').val();
		var reg = /^0?1[3|4|5|7|8][0-9]\d{8}$/;
		if (!reg.test(tel)) {
			alert("请填写正确的手机！");
			$('#phone').focus();
			return false;
		}
		if($("input[name='yz']").val()==""){
			alert("请填写验证码！");
			$("input[name='yz']").focus();
			return false;
		}else{
			var yzm=$("input[name='yz']").val();
			$.ajax({
				url:"<?php echo U('checkyzm');?>",
				type:"POST",
				data:{yzm:yzm},
				success:function(data){
					if(data=='success'){
						$("form").submit();
					}else{
						alert('验证码错误!');
						return false;
					}
				}
			})
		}
	})
	</script>
</body>
</html>