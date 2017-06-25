<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>福盈商学院</title>
    <link type="image/x-icon" rel="shortcut icon" href="img/logo.ico" />
    <link href="<?php echo RES;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/banner.css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/index.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/index.js"></script>
</head>
<body>
<!-- header start-->
<div class="head" >
    <div class="head_a">
        <div>
            <div class="head_a_left f-l t-c">全国统一咨询热线：400-123-4567</div>
            <div class="head_a_right f-l">
                <ul>
                    <li><a href="index.html"><img src="<?php echo RES;?>/img/home.png" alt=""/>&nbsp;首页</a></li>
                    <li><a href="news_lists.html">新闻</a></li>
                    <li><a href="">活动</a></li>
                    <li><a href="">媒体</a></li>
                    <li><a href="__GROUP__/Users/login">登录</a>/<a href="__GROUP__/Users/reg">注册</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="head_b">
        <div>
            <div class="head_b_left f-l">
                <ul class="f-r">
                    <li><a href="courses.html">课程</a></li>
                    <li><a href="">教授</a></li>
                    <li><a href="">校友</a></li>
                    <li><a href="">走进福盈</a></li>
                </ul>
            </div>
            <div class="head_b_center f-l">
                <img src="<?php echo RES;?>/img/logo.png" alt=""/>
            </div>
            <div class="head_b_right f-l">
                <ul>
                    <li><a href="">比赛</a></li>
                    <li><a href="">观点</a></li>
                    <li><a href="">机构</a></li>
                    <li><a href="">联系我们</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- header end -->
    <!--content start-->
    <div class="login">
        <img src="<?php echo RES;?>/img/login_bg.jpg" alt=""/>
        <div class="login_box_big">
            <div class="login_box_lit">
                <div class="register_box_detail">
                <form action="__URL__/save_user" method="post">
                    <div class="login_welcome register_welcome"><img src="<?php echo RES;?>/img/welcome.png" alt=""/></div>
                    <div class="login_denglu">注册</div>
                    <div class="login_name register_name">姓名 <br/><input name="xingming" type="text" placeholder="请输入姓名"/></div>
                    <div class="login_name register_name">邮箱 <br/><input type="text" name="email" placeholder="请输入邮箱"/></div>
                    <div class="login_name register_name register_name_phone">手机号码 <br/>
                        <input type="text" name="text_tel" id="phone" placeholder="请输入手机号码"/><input type="button" id="btn" class="msgs yanzhengma" onclick="timever(this)" value="获取验证码" /> </div>
                    <div class="login_name register_name">短信验证码 <br/><input type="text" name="yz" placeholder="请输入验证码"/></div>
                    <div class="login_name register_name">输入密码 <br/><input type="password" name="password" placeholder="请输入密码"/></div>
                    <div class="login_name register_name">确认密码 <br/><input type="password" name="repassword" placeholder="请再次输入密码"/></div>

                    <div class="login_name"><input type="button" id="tijiao" value="注册"/></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--content  end-->
    <!--footer  start-->
    <div class="footer">
        <div>
            <div>
                <ul>
                    <li><a href="">学员简介</a></li>
                    <li><a href="">教授简介</a></li>
                    <li><a href="">课程概况</a></li>
                    <li><a href="">校友会介绍</a></li>
                    <li><a href="">联系我们</a></li>
                    <li><a href="">地址：中国上海南京西路1号</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div>
                <ul>
                    <li><a href="">福盈基金会</a></li>
                    <li><a href="">隐私政策</a></li>
                    <li><a href="">BPM</a></li>
                    <li><a href="">WEBMAIL邮箱</a></li>
                    <li><a href="">学院内网</a></li>
                    <li><a href="">联系电话：+86-021-12345678 传真：+86-021-12345678</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div>Copyright2016 沪ICP备08023149</div>
            <div class="footer_logo"><a href="index.html"><img src="<?php echo RES;?>/img/logo_bottom.png" alt=""/></a></div>
        </div>
    </div>
    <!--footer  end-->
</body>
</html>
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