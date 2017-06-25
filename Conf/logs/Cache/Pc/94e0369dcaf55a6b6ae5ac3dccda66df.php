<?php if (!defined('THINK_PATH')) exit(); $is_kuajing=M('Bl_product_data')->field('is_kuajing')->select(); $user_id=cookie('zhenzhu_uid'); $gouwuche_num=M('Gouwuche')->where("user_id='{$user_id}'")->count(); ?>
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
                                <li><a href="__GROUP__/Product/product_list/product_id/1"><?php if($is_kuajing[0][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner-jhr.png"><br> 晶颜珍珠发酵精华乳</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/2"><?php if($is_kuajing[1][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner-jhs.png"><br>晶颜珍珠发酵精华水</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/3"><?php if($is_kuajing[2][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner-jmr.png"><br>O2洁面乳</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/4"><?php if($is_kuajing[3][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner-fss.png"><br>50+防晒霜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/5"><?php if($is_kuajing[4][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner-gzs.png"><br>滚珠水光BB</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/6"><?php if($is_kuajing[5][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner_ppmm.png"><br>O2泡泡面膜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/7"><?php if($is_kuajing[6][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner_jbmm.png"><br>温泉金箔面膜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/8"><?php if($is_kuajing[7][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner_bsms.png"><br>保湿面霜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/9"><?php if($is_kuajing[8][is_kuajing] == 1): ?><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="/tpl/Pc/default/common/img/banner_mgmm.png"><br>玫瑰面膜</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="__GROUP__/Product/fire">灵感源泉</a></li>
                    <li><a href="__GROUP__/Product/girls">真珠女孩</a></li>
                    <li><a href="__GROUP__/Product/about_us">关于我们</a></li>
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
<!--轮播 begin-->
<div id="myCarousel" class="carousel slide banner-wrap" >
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner" >
        <div  class="item active">

            <?php if($product[id] == 2): ?><img src="/tpl/Pc/default/common/img/banner_jhs.jpg">
                <?php elseif($product[id] == 3): ?>
                <img src="/tpl/Pc/default/common/img/banner_jmr.jpg">
                <?php elseif($product[id] == 1): ?>
                <img src="/tpl/Pc/default/common/img/banner_jhr.jpg">
                <?php elseif($product[id] == 4): ?>
                <img src="/tpl/Pc/default/common/img/banner_fss.jpg">
                <?php elseif($product[id] == 5): ?>
                <img src="/tpl/Pc/default/common/img/banner_gzs.jpg">
                <?php elseif($product[id] == 6): ?>
                <img src="/tpl/Pc/default/common/img/banner_ppmm.jpg">
                <?php elseif($product[id] == 7): ?>
                <img src="/tpl/Pc/default/common/img/banner_jbmm.jpg">
                <?php else: ?>
                <img src="/tpl/Pc/default/common/images/banner.png" alt=""     >
                <div class="carousel-caption"></div><?php endif; ?>
        </div>
  <!--      <div class="item">
            <img src="images/banner.png" alt="">
            <div class="carousel-caption"></div>
        </div>
-->
    </div>
    <!-- 轮播（Carousel）导航 -->
<!--    <a class="carousel-control left" href="#myCarousel"
       data-slide="prev">&lsaquo;
        <img src="images/index-left.png" alt="" class="img-responsive">
    </a>
    <a class="carousel-control right" href="#myCarousel"
       data-slide="next">&rsaquo;
        <img src="images/index-right.png" alt="" class="img-responsive">
    </a>-->
</div>
<!--
    <div class="border"></div>
-->

<!--轮播 end-->
<div class="detail-content">
        <div class="product-f-pic2 ">
            <div class="t-c">
            <span><?php echo ($product["f_black"]); ?><span style="color:#f99abf;"><?php echo ($product["f_red"]); ?></span></span>
            </div>
        </div>
        <div class="product-f-pic3">
        	<?php if($product[id]%2 == 1): ?><div class="product-f-pic31">
                <?php if($product[is_kuajing] == 1 ): ?><div class="important-picl"><img  src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?>
                <img src="<?php echo ($product["f_pic"]); ?>"> </div>
            <div class="product-f-pic32">
                <h1>唤醒新生的秘密</h1>
                <span><?php echo ($product["productName"]); echo ($product["f_guige"]); ?></span><br>
                <div>
                     <span >&yen;<span class="price"><?php echo ($product["f_price"]); ?></span></span>
                   <a href="__GROUP__/Product/detail/product_id/<?php echo ($product["id"]); ?>"> <img src="/tpl/Pc/default/common/img/product-five4.png"></a>
                </div><br>
                <div><img src="<?php echo ($product["f_desc_pic"]); ?>"></div>
            </div>
            <?php else: ?>
            <div class="product-f-pic32  t-c">
                <h1>唤醒新生的秘密</h1>
                <span><?php echo ($product["productName"]); echo ($product["f_guige"]); ?></span><br>
                <div>
                     <span >&yen;<span class="price"><?php echo ($product["f_price"]); ?></span></span>
                   <a href="__GROUP__/Product/detail/product_id/<?php echo ($product["id"]); ?>"> <img src="/tpl/Pc/default/common/img/product-five4.png"></a>
                </div><br>
                <div><img src="<?php echo ($product["f_desc_pic"]); ?>"></div>
            </div>
            <div class="product-f-pic31">
                <?php if($product[is_kuajing] == 1 ): ?><div class="important-picl"><img  src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?>
                <img src="<?php echo ($product["f_pic"]); ?>"> </div><?php endif; ?>
        </div>
        <div class="product-f-pic4">
            <img src="<?php echo ($product["f_big_pic"]); ?>">
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



<script type="text/javascript" src="/tpl/Pc/default/common/js/jquery-1.12.3.js"></script>
<script>
$(function() {
    $(".product-show").hover(function () {
        $(this).children(".product-five").stop(true, true).slideDown(500);
    }, function () {
        $(this).children(".product-five").stop(true, true).slideUp(500);
    })
})
$(function() {
    function sx() {
        var $pic = $(".nav-right").height();
        $(".wrap").css("height", $pic);
    }
    var time = setInterval(sx, 30);
});
</script>