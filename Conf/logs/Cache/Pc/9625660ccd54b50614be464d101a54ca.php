<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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
    <script src="/tpl/Pc/default/common/js/jquery-1.12.3.js"></script>
    <script src="/tpl/Pc/default/common/js/bootstrap.min.js"></script>
    <script src="/tpl/Pc/default/common/js/main.js"></script>
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
                    <li class="lis1"><?php if(cookie("zhenzhu_tel")!=null){echo '<a style="float: left;padding-right: 1rem;" href="__GROUP__/Users/center">欢迎，'.cookie('zhenzhu_tel').'</a><a style="float: left;color:red;" href="__GROUP__/Users/tuichu">退出</a>';}else{ ?><a href="__GROUP__/Users/denglu" class="img-dl"><img src="/tpl/Pc/default/common/images/index-dl.png" alt=""
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

<!--轮播 begin-->
<div id="myCarousel" class="carousel slide banner-wrap">

    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/tpl/Pc/default/common/images/banner.png" alt="">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="/tpl/Pc/default/common/img/banner_jhr.jpg" alt="">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="/tpl/Pc/default/common/img/banner_jhs.jpg" alt="">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="/tpl/Pc/default/common/img/banner_jmr.jpg" alt="">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="/tpl/Pc/default/common/img/banner_fss.jpg" alt="">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="/tpl/Pc/default/common/img/banner_gzs.jpg" alt="">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="/tpl/Pc/default/common/img/banner_ppmm.jpg" alt="">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="/tpl/Pc/default/common/img/banner_jbmm.jpg" alt="">
            <div class="carousel-caption"></div>
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel"
       data-slide="prev">&lsaquo;
        <img src="/tpl/Pc/default/common/images/index-left.png" alt="" class="img-responsive">
    </a>
    <a class="carousel-control right" href="#myCarousel"
       data-slide="next">&rsaquo;
        <img src="/tpl/Pc/default/common/images/index-right.png" alt="" class="img-responsive">
    </a>
</div>

<!--
    <div class="border"></div>
-->
<!--轮播 end-->

<div class="content">
    <div class="borderone"></div>
    <div class="product-think">
        <h4 id="TR">天然之美</h4>
        <p>人类一直在寻找办法来改善女人的外观和美感，如何保护自己的皮肤，并使其更加美丽和光泽，如何延长青春和活力，减缓衰老，消除岁月留下</p>
    </div>
    <div class="row fire">
        <div class="col-lg-6">
            <img src="/tpl/Pc/default/common/images/fire-1.png" alt="" class="img-responsive">

        </div>
        <div class="col-lg-6">
            <img src="/tpl/Pc/default/common/images/fire-2.png" alt="" class="img-responsive fire-margin fire-float">
            <img src="/tpl/Pc/default/common/images/fire-3.png" alt="" class="img-responsive fire-float">
        </div>
    </div>
    <div class="borderone"></div>
    <div class="product-think">
        <h4 id="DF">真珠美学</h4>
        <p>人类一直在寻找办法来改善女人的外观和美感，如何保护自己的皮肤，并使其更加美丽和光泽，如何延长青春和活力，减缓衰老，消除岁月留下</p>
    </div>
    <div class="row fire">
        <div class="col-lg-6">
            <img src="/tpl/Pc/default/common/images/fire-5.png" alt="" class="img-responsive fire-margin">
            <img src="/tpl/Pc/default/common/images/fire-6.png" alt="" class="img-responsive">
        </div>
        <div class="col-lg-6">
            <img src="/tpl/Pc/default/common/images/fire-4.png" alt="" class="img-responsive fire-float">
        </div>
    </div>

    <div class="borderone"></div>
    <div class="product-think">
        <h4 id="ZZ">真珠美学</h4>
        <p>人类一直在寻找办法来改善女人的外观和美感，如何保护自己的皮肤，并使其更加美丽和光泽，如何延长青春和活力，减缓衰老，消除岁月留下</p>
    </div>
    <div class="row fire">
        <div class="col-lg-6">
            <img src="/tpl/Pc/default/common/images/fire-7.png" alt="" class="img-responsive">

        </div>
        <div class="col-lg-6">
            <img src="/tpl/Pc/default/common/images/fire-8.png" alt="" class="img-responsive fire-margin fire-float">
            <img src="/tpl/Pc/default/common/images/fire-9.png" alt="" class="img-responsive fire-float">
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
                <li  class="product-f-pic5li"><a href="__GROUP__/Index/index">产品展示</a></li>
                <li><a href="__GROUP__/Product/product_list/product_id/3">O2洁面乳</a></li>
                <li><a href="__GROUP__/Product/product_list/product_id/4">50+防晒霜</a></li>
                <li><a href="__GROUP__/Product/product_list/product_id/5">滚珠水光BB</a></li>
                <li><a href="__GROUP__/Product/product_list/product_id/6">O2泡泡面膜</a></li>
                <li><a href="__GROUP__/Product/product_list/product_id/7">温泉金箔面膜</a></li>
          <!--      <li><a href="__GROUP__/Product/product_list/product_id/1">晶颜珍珠发酵精华乳</a></li>
                <li><a href="__GROUP__/Product/product_list/product_id/2">晶颜珍珠发酵精华水</a></li>-->

            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="__GROUP__/Product/fire">灵感源泉</a></li>
                <li><a href="__GROUP__/Product/fire#TR">天然之美</a></li>
                <li><a href="__GROUP__/Product/fire#DF">东方之美</a></li>
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
            <ul style="width: 34%;">
                <a href="__GROUP__/Index/index"><img style="width: 308%;" src="/tpl/Pc/default/common/images/banquan_03.png" alt=""/></a>
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
</script>