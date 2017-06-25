<?php if (!defined('THINK_PATH')) exit(); $is_kuajing=M('Bl_product_data')->field('is_kuajing')->order('id')->select(); $user_id=cookie('zhenzhu_uid'); if($user_id==''){ }else{ $gouwuche_num=M('Gouwuche')->where("user_id='{$user_id}'")->count(); } ?>
<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo ($type_name); ?> | pearlosophy | 真珠美学</title>
    <script>
        var sUserAgent= navigator.userAgent.toLowerCase();
        var bIsIpad= sUserAgent.match(/ipad/i) == "ipad";
        var bIsIphoneOs= sUserAgent.match(/iphone os/i) == "iphone os";
        var bIsMidp= sUserAgent.match(/midp/i) == "midp";
        var bIsUc7= sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
        var bIsUc= sUserAgent.match(/ucweb/i) == "ucweb";
        var bIsAndroid= sUserAgent.match(/android/i) == "android";
        var bIsCE= sUserAgent.match(/windows ce/i) == "windows ce";
        var bIsWM= sUserAgent.match(/windows mobile/i) == "windows mobile";
        if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
            window.location.href= 'index.php?s=/Phone/Index/detail/product_id/<?php echo ($product["id"]); ?>';
        }
</script>
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
                                <li><a href="__GROUP__/Product/product_list/product_id/1"><?php if($is_kuajing[0][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/a.png"><br>晶颜珍珠发酵精华水</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/2"><?php if($is_kuajing[1][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/b.png"><br> 晶颜珍珠发酵精华乳</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/3"><?php if($is_kuajing[2][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/c.png"><br>O2洁面乳</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/4"><?php if($is_kuajing[3][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/d.png"><br>50+防晒霜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/5"><?php if($is_kuajing[4][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/e.png"><br>滚珠水光BB</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/6"><?php if($is_kuajing[5][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/f.png"><br>O2泡泡面膜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/7"><?php if($is_kuajing[6][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/g.png"><br>温泉金箔面膜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/8"><?php if($is_kuajing[7][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/h.png"><br>保湿面霜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/9"><?php if($is_kuajing[8][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/i.png"><br>玫瑰面膜</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="__GROUP__/Product/fire">灵感源泉</a></li>
                    <li><a href="__GROUP__/Product/girls">真珠女孩</a></li>
                    <li><a href="__GROUP__/Product/about_us">关于我们</a></li>
                    <li><a href="http://pearlosophy.hyxmt.cn/a/Agent.aspx">授权查询</a></li>
                </ul>
                <ul class="nav-right">
                    <li class="lis1"><?php if(cookie("zhenzhu_tel")){echo '<a style="float: left;padding-right: 1rem;" href="__GROUP__/Users/center">欢迎，'.urldecode(cookie('zhenzhu_tel')).'</a><a style="float: left;color:red;" id="tuichu" href="javascript:void(0);">退出</a>';}else{ ?><a href="__GROUP__/Users/denglu" class="img-dl"><img src="/tpl/Pc/default/common/images/index-dl.png" alt=""
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
                    <li class="lis2" style="position: relative;"><a href="__GROUP__/Product/gouwuche" class="img-gwc"><img src="/tpl/Pc/default/common/images/index-gwc.png" alt=""
                                                                                                                           class="img-responsive sign "></a><div style="position:absolute;right:15%;top:44%;color:#f99abf;line-height: 1;padding:1px;border-radius: 360px; "><?php echo ($gouwuche_num); ?></div>
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
<div class="content-center" >

    <div class="content-center-t ">WELCOME<span><?php echo urldecode(cookie('zhenzhu_tel'))?></span></div>
    <!--左边导航start-->
    <div class="center-left f-l">
        <ul>
            <a href="__URL__/center"><li class="centerbgc">我的资料</li></a>
            <?php if($user[g_id] == null): ?><a href="__URL__/my_order"><li class="">我的订单</li></a><?php endif; ?>
            <a href="__URL__/center/name/dizhi"><li class="">我的地址</li></a>
            <a href="__URL__/center/name/mima"><li class="">修改密码</li></a>
            <a href="__URL__/points"><li class="">积分商城</li></a>
            <a href="__URL__/center/name/shoucang"><li class="">我的收藏</li></a>
            <!-- <a href="#"><li class="" style="color:#333;">退出登录</li></a>-->
        </ul>
    </div>
    <!--左边导航end-->
    <!--右边内容start-->
    <div class="center-right f-l">
        <!--我的资料start-->
        <div class="center-data"  >
            <form action="__URL__/ziliao" method="post" id="form1">
                <div class="center-data-title">我的资料</div>
                <div class="center-data-title1">亲爱的  &nbsp;<?php echo urldecode(cookie('zhenzhu_tel')); ?>&nbsp;,请填写您的个人资料</div>
                <div class="center-data-title2">
                    <div><img src="<?php echo RES;?>/img/must.png" alt="" />姓名<input name="xingming"  value="<?php echo ($user["xingming"]); ?>" type="text"/></div>
                    <div >性别<input name="sex" readonly style="color:#aaa;"  value="<?php if($user[sex]==1){echo '男';}else{echo '女';}?>" type="text" ></div>
                    <div><img src="<?php echo RES;?>/img/must.png" alt="" />手机号码<input name="tel"  value="<?php echo ($user["tel"]); ?>" type="text"></div>
                    <div>电子邮箱<input type="text"  name="email" value="<?php echo ($user["email"]); ?>"></div>
                    <div><img src="<?php echo RES;?>/img/must.png" alt="" />身份证号<input name="card_num"  value="<?php echo ($user["card_num"]); ?>" type="text"></div>
                    <div>生日<input type="text"  name="birth" readonly style="color:#aaa;" value="<?php echo ($user["birth"]); ?>"></div>

                </div>
                <div style="clear:both;height:0px;"></div>

                   <div style="margin-top: 1%;"><span style="color:red;">注</span>：为保证您能成功收到产品，标<img src="<?php echo RES;?>/img/must.png" alt="" />为必填项，请完善相应资料，谢谢！</div>
                <div class="center-data-title5 t-c" ><span style="cursor:pointer" onclick="ziliao()">保存</span></div>
            </form>
        </div>
        <!--我的资料end-->
        <div class="center-dingdan"  style="display: none;"  >
        </div>
        <!--我的地址start-->
        <div class="center-dizhi"  style="display: none;"  >
            <form action="__URL__/dizhi_edit" method="post" id="form2">
                <div class="center-data-title">我的地址</div>
                    <div class="center-data-title1" style="color:#f499c0;">新增地址</div>
                    <div class="center-data-title2">
                        <div>姓名<input name="xingming" value="<?php echo ($shouhuo["xingming"]); ?>" type="text"/></div>
                       <!-- <div>详细地址<input name="addr" type="text"></div>-->
                        <div>手机号码<input name="tel" value="<?php echo ($shouhuo["tel"]); ?>" type="text"></div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="center-data-dizhi">
                        <div >详细地址</div>
                        <div data-toggle="distpicker" class="province-box">
                            <div >
                            <input type="text" value="<?php echo ($shouhuo["province"]); ?>" name="province" style="width:99%" name="" id="" />
                            </div>
                            <div >
                            <input type="text"  value="<?php echo ($shouhuo["city"]); ?>" name="city" style="width:99%" name="" id="" />
                            </div>
                            <div >
                            <input type="text"  value="<?php echo ($shouhuo["area"]); ?>" name="area" style="width:99%" name="" id="" />
                            </div>
                            <br />
                            <div style="margin-top:5px;"><input type="text" value="<?php echo ($shouhuo["addr"]); ?>"  name="addr" style="width:244%;" placeholder="请输入详细地址"/></div>
                        </div>
                    </div>
                <div class="center-dizhi-title2 t-c"><img id="myimage" src="/tpl/Pc/default/common/img/dark1.png"> 设为默认收货地址</div>
                <input type="hidden" name="selected" value="0" />
                <input type="hidden" name="id" value="<?php echo ($shouhuo["id"]); ?>" />
            </form>
            <div class="center-dizhi-title5 t-c" ><span style="cursor:pointer" onclick="dizhi()">保存</span></div>
        </div>
        <!--我的地址end-->
        <!--我的密码start-->
        <div class="center-mima" style="display: none;" >
            <form action="__URL__/mima" method="post" id="form3">
                <div class="center-data-title">修改密码</div>
                <div class="center-mima-title2">
                    <div>原密码<input name="password" type="password"/></div>
                    <div>新密码<input name="new_password" type="password"></div>
                    <div>再输入新密码<input name="renew_password" type="password"></div>
                </div>
                <div class="center-mima-title5 t-c" ><span style="cursor:pointer" onclick="mima()">保存</span></div>
            </form>
        </div>
        <!--我的密码end-->
    </div>
    <!--右边内容end-->
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
    $(function() {
        function sx() {
            var $pic = $(".center-d-pic").height();
            $(".center-d-name").css("height", $pic);
            $(".center-d-price").css("height", $pic);
            $(".center-d-num").css("height", $pic);
            $(".center-d-total").css("height", $pic);
            $(".center-d-btn").css("height", $pic);
        }
        var time = setInterval(sx, 30);
    });

    //地址修改
    $(".center-dizhi-title2").click(function(){
        var element=document.getElementById('myimage');
        if (element.src.match("dark1")){
            $("input[name=selected]").val("1");
            element.src="/tpl/Pc/default/common/img/light1.png";
        }
        else{
            $("input[name=selected]").val("0");
            element.src="/tpl/Pc/default/common/img/dark1.png";
        }
    });
    var moren="<?php echo ($shouhuo["selected"]); ?>";
    if(moren==1){
    	$(".center-dizhi-title2").click();
    }
</script>
<script>
    function ziliao(){
    	var xingming=$("input[name=xingming]").val();
    	var card_num=$("input[name=card_num]").val();
    	var tel=$("input[name=tel]").val();
    	if(!xingming || !card_num ||!tel){
    		alert("带*信息必须填写");
    		return false;
    	}
        $("#form1").submit();
    }
    function dizhi(){
        $("#form2").submit();
    }
    
    var name="<?php echo ($name); ?>";
    if(name=='dizhi'){
    	$(".center-left ul li").removeClass("centerbgc")
        var index=2;
        $(".center-right>div").stop(true, true).hide().eq(index).show();
        $(".center-left ul li").eq(index).addClass("centerbgc");
    }else if(name=='mima'){
    	$(".center-left ul li").removeClass("centerbgc")
        var index=3;
        $(".center-right>div").stop(true, true).hide().eq(index).show();
        $(".center-left ul li").eq(index).addClass("centerbgc");
    }
    function del(o){
        if(confirm("确定删除么?")){
            location.href="<?php echo U('dizhi_delete',array('id'=>'"+o+"'));?>";
        }else{
            return false;
        }
    }
    //验证身份证合法性
	var Wi = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1 ];    // 加权因子   
	var ValideCode = [ 1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2 ];            // 身份证验证位值.10代表X   
	function IdCardValidate(idCard) { 
	     if (idCard.length == 18) {   
	        var a_idCard = idCard.split("");                // 得到身份证数组   
	        if(isValidityBrithBy18IdCard(idCard)&&isTrueValidateCodeBy18IdCard(a_idCard)){   //进行18位身份证的基本验证和第18位的验证
	            return true;   
	        }else {
	        	alert("请填写正确的身份证");
				$("input[name='card_num']").focus();
	            return false;   
	        }   
	    } else {
	    	alert("请填写18位身份证");
			$("input[name='card_num']").focus();
	        return false;   
	    }   
	}   
	/**  
	 * 判断身份证号码为18位时最后的验证位是否正确  
	 * @param a_idCard 身份证号码数组  
	 * @return  
	 */  
	function isTrueValidateCodeBy18IdCard(a_idCard) {   
	    var sum = 0;                             // 声明加权求和变量   
	    if (a_idCard[17].toLowerCase() == 'x') {   
	        a_idCard[17] = 10;                    // 将最后位为x的验证码替换为10方便后续操作   
	    }   
	    for ( var i = 0; i < 17; i++) {   
	        sum += Wi[i] * a_idCard[i];            // 加权求和   
	    }   
	    valCodePosition = sum % 11;                // 得到验证码所位置   
	    if (a_idCard[17] == ValideCode[valCodePosition]) {   
	        return true;   
	    } else {   
	    	$("input[name='card_num']").focus();
	        return false;   
	    }   
	}   
	/**  
	  * 验证18位数身份证号码中的生日是否是有效生日  
	  * @param idCard 18位书身份证字符串  
	  * @return  
	  */  
	function isValidityBrithBy18IdCard(idCard18){   
	    var year =  idCard18.substring(6,10);   
	    var month = idCard18.substring(10,12);   
	    var day = idCard18.substring(12,14);   
	    var temp_date = new Date(year,parseFloat(month)-1,parseFloat(day));   
	    // 这里用getFullYear()获取年份，避免千年虫问题   
	    if(temp_date.getFullYear()!=parseFloat(year)   
	          ||temp_date.getMonth()!=parseFloat(month)-1   
	          ||temp_date.getDate()!=parseFloat(day)){  
	          	$("input[name='card_num']").focus();
	            return false;   
	    }else{   
	        return true;   
	    }   
	}  
    $("input[name='card_num']").change(function(){
		var cardid = $(this).val();
		if(IdCardValidate(cardid)){
			var year =  cardid.substring(6,10);   
		    var month = cardid.substring(10,12);   
		    var day = cardid.substring(12,14); 
		    var birth = year+"-"+month+"-"+day;
		    var sex = cardid.substring(16,17);
		    if(sex=="0" || sex=="2" || sex=="4" ||sex=="6" || sex=="8"){
		    	$("input[name=sex]").val('女');
		    }else{
		    	$("input[name=sex]").val('男');
		    }
		    $("input[name='birth']").val(birth);
		}
	});
</script>