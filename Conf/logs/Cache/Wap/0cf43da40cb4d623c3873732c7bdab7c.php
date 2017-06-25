<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <title>登录/注册</title>
    <link  href="<?php echo RES;?>/css/bootstrap.min.css"  rel="stylesheet">
    <script src="<?php echo RES;?>/js/jquery-1.12.3.js"></script>
    <script src="<?php echo RES;?>/js/bootstrap.min.js"></script>
    <link  href="<?php echo RES;?>/css/index.css"  rel="stylesheet">
    <style>
        body{background-image:url('<?php echo RES;?>/img/login_bg.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            overflow-x:hidden;
            overflow-y:auto;}
    </style>
</head>
<body>
    <div class="main_box login_bg">
        <div class="login_head" >
            <div class="login_h_login">登录 <br/> <img src="<?php echo RES;?>/img/login_bz.png" alt=""/></div>
            <div class="login_h_reg">快速注册<br/> <img src="<?php echo RES;?>/img/login_bzkb.png" alt=""/></div>
            <div class="clear"></div>
        </div>
        <div class="login_content" >
            <div class="login_c_login" >
                <div class="login_name">
                    <img src="<?php echo RES;?>/img/login_pic.png" alt=""/>
                    <input type="text" placeholder="请输入手机号码"/>
                </div>
                <div class="login_name">
                    <img  src="<?php echo RES;?>/img/login_pas.png" alt="" />
                    <input type="password" class="pwd" placeholder="请输入密码"/>
                </div>
                <div class="login_login">
                    <input type="submit" value="登录"/>
                </div>
                <!-- <div class="login_sf"><img src="<?php echo RES;?>/img/login_sf.png" alt=""/></div>
                <div class="login_sfpic"><a href="javascript:void(0);"><img src="<?php echo RES;?>/img/login_wx.png" alt=""/></a></div>
                <div class="login_sfpic login_sfdl"><a href="javascript:void(0);">没有账号，立即注册</a></div> -->

            </div>
            
            <div class="login_c_reg" >
            <form action="__URL__/save_user" method="post">
                <div class="login_name">
                    <img src="<?php echo RES;?>/img/login_pic.png" alt=""/>
                    <input type="text" name="text_tel" id="phone" placeholder="请输入手机号码"/>
                </div>
                <div class="login_name reg_name">
                    <img src="<?php echo RES;?>/img/login_mes.png" alt=""/>
                    <input type="text" name="yz" placeholder="请输入验证码"/>
                    <input class="yanzhengma" type="button" onclick="timever(this)" value="获取验证码"/>
                </div>
                <div class="login_name">
                    <img src="<?php echo RES;?>/img/login_pas.png" alt=""/>
                    <input name="password" type="password" placeholder="请输入密码"/>
                </div>
                <div class="login_name">
                    <img src="<?php echo RES;?>/img/login_pas.png" alt=""/>
                    <input name="repassword" type="password" placeholder="请再次输入密码"/>
                </div>
                <div class="login_login reg_login">
                    <input type="button" value="注册"/>
                </div>
               <!--  <div class="login_sf"><img src="<?php echo RES;?>/img/login_sf.png" alt=""/></div>
                <div class="login_sfpic"><a href="javascript:void(0);"><img src="<?php echo RES;?>/img/login_wx.png" alt=""/></a></div> -->
            </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(".login_head>div").click(function(){
        $(".login_head>div").css({"color":"#111"});
        $(".login_head>div").children("img").attr("src","<?php echo RES;?>/img/login_bzkb.png");
        var index=$(this).index();
        $(".login_content>div").stop(true,true).hide().eq(index).show();
        $(this).children("img").attr("src","<?php echo RES;?>/img/login_bz.png");
        $(this).css({"color":"#39b1f6"});
    });
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
		var tel = $('#phone').val();
		var reg = /^0?1[3|4|5|7|8][0-9]\d{8}$/;
		if (!reg.test(tel)) {
			alert("请填写正确的手机！");
			$('#phone').focus();
			return false;
		}
		if ($("input[name='password']").val()!=$("input[name='repassword']").val()){
			alert("两次密码不一致");
			$('#password').focus();
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