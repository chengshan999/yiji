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
    <script type="text/javascript" src="/tpl/Pc/default/common/js/distpicker.data.js"></script>
<script type="text/javascript" src="/tpl/Pc/default/common/js/distpicker.js"></script>
<script type="text/javascript" src="/tpl/Pc/default/common/js/maindis.js"></script>
<div class="content-center" >

    <div class="content-center-t ">WELCOME<span><?php echo urldecode(cookie('zhenzhu_tel'))?></span><a href="__URL__/center"><span class="f-r" style="color:#f499c0;font-size: 14px;margin:25px 20px 0 0;">个人中心入口</span></a></div>    <!--左边导航start-->
                <!--左边导航start-->
    <div class="center-left f-l">
        <ul>
            <li class=""><a href="__URL__/daili_center">我的代理信息</a></li>
            <li class=""><a href="__URL__/daili_center/name/xindaili">新代理加盟</a></li>
            <li class=""><a href="__URL__/daili_center/name/xiajidaili">查看下级代理</a></li>
            <a href="__URL__/daili_order"><li class="">我的订单</li></a>
            <li class=""><a href="__URL__/daili_center/name/fahuo">发货</a></li>
            <li class=""><a href="__URL__/daili_center/name/chaxun">查询单号</a></li>
            <li class=""><a href="__URL__/daili_center/name/guanli">代理申请管理</a></li>
            <li ><div class="agency_my">我的会员</div>
                <ul class="my_huiyuan_ej" >
                    <li class="centerbgc_a">我的会员</li>
                    <li class="">会员查询</li>
                    <li class="">推荐会员注册</li>
                </ul>
            </li>
        </ul>
    </div>
    <!--左边导航end-->

    <!--右边内容start-->
    <div class="center-right f-l">

        <div class="ageney-eight" >
            <div style="display: block;">
                <div class="age_one_o">我的会员 <span>(通过我分享链接注册的会员)</span></div>
                <div class="age_eight_t">
					<?php if(is_array($huiyuan)): foreach($huiyuan as $key=>$v): ?><div class="">
						<div class="person_left">
							<?php if($v[headimgurl] == null): ?><img src="<?php echo RES;?>/img/default_head.jpg" alt=""/><?php else: ?><img src="<?php echo ($v["headimgurl"]); ?>" alt=""/><?php endif; ?>
						</div>
						<div class="person_right">
							姓名:&nbsp;&nbsp;<?php echo ($v["xingming"]); ?><br /> 手机号:&nbsp;&nbsp;<?php echo ($v["tel"]); ?> <br />
							上级名称:&nbsp;&nbsp;<?php echo ($user["xingming"]); ?> <br />
						</div>
					</div><?php endforeach; endif; ?>



				</div>
            </div>
            <div style="display: none;">
                <div class="age_one_o">会员查询 <span>(会员查询)</span></div>
                <div class="age_six_t"><input type="text" placeholder="请输入会员手机号"/><input type="button" value="查询"/></div>
            </div>
            <div style="display: none;">
            <form action="" method="post">
                <div class="age_one_o">推荐会员注册 <span>(推荐会员注册)</span></div>
                <div class="age_eight_r">由代理商 <span><?php echo ($user["xingming"]); ?></span> 推荐</div>
                <div class="age_eight_s">
                    <div><img src="<?php echo RES;?>/img/must.png" alt=""/>手机号<input name="tel" type="text"/></div>
                    <div><img src="<?php echo RES;?>/img/must.png" alt=""/>地区
                        <div data-toggle="distpicker" class="province-box" style="position: absolute;left:18%;">
                            <div >
                                <label class="sr-only" for="province2">Province</label>
                                <select class="form provincechoose" name="province" id="province2" data-province="---- 选择省 ----"></select>
                            </div>
                            <div >
                                <label class="sr-only" for="city2">City</label>
                                <select class="form provincechoose" name="city" id="city2" data-city="---- 选择市 ----"></select>
                            </div>
                            <div >
                                <label class="sr-only" for="district2">District</label>
                                <select class="form provincechoose" name="home" id="district2" data-district="---- 选择区 ----"></select>
                            </div>
                        </div>
                    </div>
                    <div><img src="<?php echo RES;?>/img/must.png" alt=""/>登录密码<input name="password" type="text"/></div>
                    <div><img src="<?php echo RES;?>/img/must.png" alt=""/>推荐人<input readonly="readonly" value="<?php echo ($user["xingming"]); ?>" type="text"/></div>
                    <input type="hidden" name="huiyuan" value="<?php echo ($user["id"]); ?>" />
                    <div><img src="<?php echo RES;?>/img/must.png" alt=""/>真实姓名<input name="xingming" type="text"/></div>

                </div>
                <div style="clear: both;"></div>
                <div class="age_eight_n"><input type="submit" value="注册"/></div>
                <div class="age_eight_e">
                    <a href=""><input type="button" value="会员登录"/></a>
                    <a href=""><input type="button" value="会员中心"/></a>
                     <a href=""><input type="button" value="返回积分登记"/></a>
                </div>
            </form>
            </div>
        </div>
    </div>

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
//左侧导航切换
    $(".my_huiyuan_ej>li").click(function(){
        $(".my_huiyuan_ej>li").removeClass("centerbgc_a")
        var index=$(this).index();
        $(".ageney-eight>div").stop(true, true).hide().eq(index).show();
        $(this).addClass("centerbgc_a");
    });

</script>