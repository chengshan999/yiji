<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo ($type_name); ?> | pearlosophy | 真珠美学</title>
    <!-- css -->
    <!-- build:css css/main.css -->
    <link rel="shortcut icon" href="/tpl/Pc/default/common/img/icon.ico" />
    <link rel="stylesheet" href="/tpl/Pc/default/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tpl/Pc/default/common/css/center-q.css">
    <link rel="stylesheet" href="/tpl/Pc/default/common/css/style.css">
    <!-- endbuild -->
    <!-- end css -->
    <!-- modernizr -->
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101365202" data-redirecturi="http://www.pearlosophy.com/" charset="utf-8"></script>
    <script src="/tpl/Pc/default/common/js/jquery-1.12.3.js"></script>
    <script src="/tpl/Pc/default/common/js/bootstrap.min.js"></script>
    <script src="/tpl/Pc/default/common/js/main.js"></script>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=234170374" type="text/javascript" charset="utf-8"></script>
    <!-- end modernizr -->
</head>
<body>
    <div class="main-box header-wrap">
        <!--顶部LOGO star-->
        <div class="wrap nav">
            <div class="header">
                <a class="navbar-brand" href="__GROUP__/Index/index">
                    <img src="/tpl/Pc/default/common/images/header-logo.png" alt="" class="img-responsive">
                </a>
            </div>
            <div>
                <ul class="nav-left">
                  <!--  <li class="active"><a href="__GROUP__/Index/index">首页</a></li>-->
                    <li><a href="__GROUP__/Product/index">品牌故事</a></li>
                    <li class="product-show"><a href="__GROUP__/Product/product_list">产品介绍</a>
                        <div class="product-five">
                            <ul>
                                <li><a href="__GROUP__/Product/product_list/product_id/1"><img src="/tpl/Pc/default/common/img/banner-jhr.png"><br> 晶颜珍珠发酵精华乳</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/2" ><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><img src="/tpl/Pc/default/common/img/banner-jhs.png"><br>晶颜珍珠发酵精华水</a></li>
                                
                                <li><a href="__GROUP__/Product/product_list/product_id/3"><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><img src="/tpl/Pc/default/common/img/banner-jmr.png"><br>O2洁面乳</a></li>
                              
                                <li><a href="__GROUP__/Product/product_list/product_id/4"><img src="/tpl/Pc/default/common/img/banner-fss.png"><br>50+防晒霜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/5"><img src="/tpl/Pc/default/common/img/banner-gzs.png"><br>滚珠水光BB</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/6"><img src="/tpl/Pc/default/common/img/banner_ppmm.png"><br>O2泡泡面膜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/7"><img src="/tpl/Pc/default/common/img/banner_jbmm.png"><br>温泉金箔面膜</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="__GROUP__/Product/fire">灵感源泉</a></li>
                    <li><a href="__GROUP__/Product/girls">真珠女孩</a></li>
                    <li><a href="__GROUP__/Product/about_us">关于我们</a></li>
                </ul>
                <ul class="nav-right">
                    <li class="lis1"><?php if(cookie("zhenzhu_tel")!=null){echo '<a style="float: left;padding-right: 1rem;" href="__GROUP__/Users/center">欢迎，'.urldecode(cookie('zhenzhu_tel')).'</a><a style="float: left;color:red;" id="tuichu" href="javascript:void(0);">退出</a>';}else{ ?><a href="__GROUP__/Users/denglu" class="img-dl"><img src="/tpl/Pc/default/common/images/index-dl.png" alt=""
                                                                     class="img-responsive sign "></a><?php } ?>
                        <div class="index-sign hidden user">
                            <ul class="nav-right">
                                <li><a href="#">登录</a></li>
                                <li><a href="#">注册</a></li>
                            </ul>
                        </div>
                        <div class="index-sign hidden user-only">
                            <ul class="nav-right">
                                <li><a href="#">我的资料</a></li>
                                <li><a href="#">我的订单</a></li>
                                <li><a href="#">我的地址</a></li>
                                <li><a href="#">修改密码</a></li>
                                <li><a href="#">退出登录</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="lis2"><a href="__GROUP__/Product/gouwuche" class="img-gwc"><img src="/tpl/Pc/default/common/images/index-gwc.png" alt=""
                                                                      class="img-responsive sign "></a>
                      <!--   <div class="index-sign hidden shopping">
                            <p class="shop">你的购物车是空的!</p>
                        </div> -->
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!--顶部LOGO end-->

    <script>
        document.body.onmousewheel = function() {
            $(".header-wrap").css({"position":"fixed"})
        };
    </script>
    <link rel="stylesheet" href="/tpl/Pc/default/common/css/mima.css">
<div class="sign-content">
    <h1>WELCOME</h1>
    <h4>找回密码</h4>
    <form action="__URL__/zhaohui_set" method="post">
        <input type="text" class="input"  id="phone" name="text_tel" placeholder="请输入手机号"><span class="phone top1"></span>
        <input type="text" name="yzm" class="input inputmima" placeholder="短信验证码"><span class="mm1 top2"></span>
        <input type="button"  class="btn-mima yanzhengma" onclick="timever(this)" value="获取验证码" />
        <input type="button" id="tijiao" value="下一步" class="input">
    </form>
</div>

<div class="product-f-pic5">
        <div >
            <ul>
                <li  class="product-f-pic5li"><a href="__GROUP__/Product/index">品牌故事</a></li>
                <li><a href="__GROUP__/Product/index#PP">品牌理念</a></li>
                <li><a href="__GROUP__/Product/index#CP">产品特点</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li" ><a href="__GROUP__/Index/index">产品展示</a></li>
                <li ><a href="__GROUP__/Product/product_list/product_id/3">O2洁面乳</a></li>
                <li ><a href="__GROUP__/Product/product_list/product_id/4">50+防晒霜</a></li>
                <li ><a href="__GROUP__/Product/product_list/product_id/5">滚珠水光BB</a></li>
                <li ><a href="__GROUP__/Product/product_list/product_id/6">O2泡泡面膜</a></li>
                <li ><a href="__GROUP__/Product/product_list/product_id/7">温泉金箔面膜</a></li>
                <li ><a href="__GROUP__/Product/product_list/product_id/1">晶颜珍珠发酵精华乳</a></li>
                <li ><a href="__GROUP__/Product/product_list/product_id/2">晶颜珍珠发酵精华水</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="__GROUP__/Product/fire">灵感源泉</a></li>
                <li><a href="__GROUP__/Product/fire#TR">天然之美</a></li>
                <li><a href="__GROUP__/Product/fire#DF" >东方之美</a></li>
                <li><a href="__GROUP__/Product/fire#ZZ">真珠美学</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="__GROUP__/Product/girls">真珠女孩</a></li>
                <li><a href="__GROUP__/Product/girls#WM">我们是谁</a></li>
                <li><a href="__GROUP__/Product/girls#MD">每日一星</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="__GROUP__/Product/about_us">关于我们</a></li>
                <li><a href="__GROUP__/Product/about_us#CS">创始团队</a></li>
                <li><a href="__GROUP__/Product/about_us#CJ">常见问题</a></li>
                <li><a href="http://pearlosophy.hyxmt.cn/a/?bid=1&f=802843496979&from=singlemessage&isappinstalled=0">经销代理</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="#">合作伙伴</a></li>
                <li><a href="http://www.kuaidi.com/all/rrs.html" target="_blank">日日顺物流单号查询</a></li>
            </ul>
            <ul style="width: 32% !important;">
                <a href="__GROUP__/Index/index"><img style="width: 98%;" src="/tpl/Pc/default/common/images/banquan_03.png" alt=""/></a>
            </ul>
        </div>
      <!--  <div class="product-f-copy t-c">
            &copy;2016 All rights reserved.&nbsp;真珠美学 pearlosophy 版权所有&nbsp; 沪ICP备16043339号
        </div>-->
</div>
</body>
</html>
<script>
 	var name="<?php echo ($type_name); ?>";
	$(".nav-left>li>a").each(function(){
		if($(this).text()==name){
			$(this).parent().addClass("active");
		}else{
			$(this).parent().removeClass("active");
		}
	})
	$("#tuichu").click(function(){
		//微博退出
		WB2.logout(function() {
			    location.href="__GROUP__/Users/tuichu";
		});
		//qq退出
		QC.Login.signOut(function(){
			location.href="__GROUP__/Users/tuichu";
		});
		location.href="__GROUP__/Users/tuichu";
	})
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
		if($("input[name='yzm']").val()==""){
			alert("请填写验证码！");
			$("input[name='yzm']").focus();
			return false;
		}else{
			var yzm=$("input[name='yzm']").val();
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