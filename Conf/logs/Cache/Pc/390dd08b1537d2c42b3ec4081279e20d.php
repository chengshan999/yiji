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
	    <link rel="stylesheet" href="<?php echo RES;?>/css/agency.css">
	        <script src="/tpl/Pc/default/common/js/yaoqing.js"></script>
<div class="sign-content">
    <h1>WELCOME</h1>
    <h4>申请成为代理</h4>
    <form action="__URL__/save_daili/yaoqing_id/<?php echo ($yaoqing_id); ?>/grade/<?php echo ($grade); ?>" enctype="multipart/form-data" method="post">
    <div class="dlyq_content">
        <div class="dlyq_a">上级代理人：<span><?php echo ($user["xingming"]); ?></span> 授权号：<span><?php echo ($user["shouquan"]); ?></span></div>
        <div class="dlyq_b">您目前的代理级别</div>
        <div class="dlyq_c">
            <select name="" id="">
                <option value=""><?php echo ($daili_name); ?></option>
            </select>
            <div>授权名 <input type="text" name="xingming" placeholder="授权名"/></div>
        </div>
        <input type="hidden" name="birth" />
        <input type="hidden" name="sex" />
        <div class="dlyq_c"><div>手机号 <input name="tel" type="text" placeholder="手机号"/></div></div>
        <div class="dlyq_c"><div>微信号 <input name="weixinhao" type="text" placeholder="微信号"/></div></div>
        <div class="dlyq_c">
            <select name="card_type" id="">
                <option value="二代身份证">二代身份证</option>
                <option value="香港身份证">香港身份证</option>
                <option value="澳门身份证">澳门身份证</option>
                <option value="台湾身份证">台湾身份证</option>
                <option value="其他证件号">其他证件号</option>
            </select>
            <div>身份证 <input type="text" name="card_num" placeholder="请输入二代身份证号码"/></div></div>
        <div class="dlyq_c"><div>地址&nbsp;&nbsp;&nbsp; <input name="home" type="text" placeholder="地址"/></div></div>
        <div class="dlyq_d ">
            <div >
                <div style="margin-bottom: 10px;">
                     <div class="col-lg-3">
                        <label style="margin-top: 30px;">上传头像</label>
                    </div>
                        <div class=" big-photo" display: inline-block;">
                            <div id="preview">
                                <img id="imghead" border="0" src="<?php echo RES;?>/img/photo_icon.png" width="90" height="90" onclick="$('#previewImg').click();">
                            </div>
                            <input type="file"  name="headimgurl" onchange="previewImage(this)" style="display: none;" id="previewImg">
                     </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="margin-bottom: 10px;">
                    <div class="col-lg-3">
                        <label style="margin-top: 30px;">上传手持身份证照片</label>
                    </div>
                    <div class=" big-photo" display: inline-block;">
                        <div id="previewa">
                            <img id="imgheada" border="0" src="<?php echo RES;?>/img/photo_icon.png" width="90" height="90" onclick="$('#previewImga').click();">
                        </div>
                        <input type="file" name="card_img" onchange="previewImagea(this)" style="display: none;" id="previewImga">
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div style="margin-bottom: 10px;">
                    <div class="col-lg-3">
                        <label style="margin-top: 30px;">上传保证金打款凭证</label>
                    </div>
                    <div class=" big-photo" display: inline-block;">
                        <div id="previewb">
                            <img id="imgheadb" border="0" src="<?php echo RES;?>/img/photo_icon.png" width="90" height="90" onclick="$('#previewImgb').click();">
                        </div>
                        <input type="file"  name="baozheng_img" onchange="previewImageb(this)" style="display: none;" id="previewImgb">
                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="dlyq_e"><input onclick="submit()" type=button value="提交"/></div>
    </div>
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



<script>
	function submit(){
		$("form").submit();
	}
    $("select[name=zhengjian]").change(function() {
        if ($(this).val() == "二代身份证") {$("input[name=leixing]").attr('placeholder','二代身份证')}
        if ($(this).val() == "香港身份证") {$("input[name=leixing]").attr('placeholder','香港身份证')}
        if ($(this).val() == "澳门身份证") {$("input[name=leixing]").attr('placeholder','澳门身份证')}
        if ($(this).val() == "台湾身份证") {$("input[name=leixing]").attr('placeholder','台湾身份证')}
        if ($(this).val() == "其他证件号") {$("input[name=leixing]").attr('placeholder','其他证件号')}
    });
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