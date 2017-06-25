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
<link rel="stylesheet" href="/tpl/Pc/default/common/libs/fsgallery.css"  />
<script  type="text/javascript" src="/tpl/Pc/default/common/libs/fs_forse.js"></script>
<style>
    .girl ul li{float:left;width: 25%;height:214px;}
    .girl ul li img{width: 100%;}
</style>

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

<div class="pearls-index" id="WM">
    点击头像进入个人主页
</div>
<div class="pearls-content row">
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-1.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-2.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-3.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-4.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-5.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-6.jpg" alt="" class="img-responsive">
    </div>
</div>
<div class="pearls-content row">
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-7.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-8.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-9.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-10.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-11.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-12.jpg" alt="" class="img-responsive">
    </div>
</div>
<div class="pearls-content row">
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-13.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-14.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-15.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-16.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-17.jpg" alt="" class="img-responsive">
    </div>
    <div class="pearls-share"></div>
    <div class="col-lg-2 pearls-1">
        <img src="/tpl/Pc/default/common/images/pears-18.jpg" alt="" class="img-responsive">
    </div>
</div>
    <div class="borderone"></div>
    <div class="black">
        <div class="row girl">
            <ul class="thumbnails" id="gallery">
                <li class="span3">
                        <img src="/tpl/Pc/default/common/img/azyx_lg.jpg" alt="" />
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/azyx_2.jpg">
                        <img src="/tpl/Pc/default/common/img/azyx_2.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/azyx_3.jpg">
                        <img src="/tpl/Pc/default/common/img/azyx_3.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/azyx_4.jpg">
                        <img src="/tpl/Pc/default/common/img/azyx_4.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/azyx_5.jpg">
                        <img src="/tpl/Pc/default/common/img/azyx_5.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/azyx_6.jpg">
                        <img src="/tpl/Pc/default/common/img/azyx_6.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/azyx_1.jpg">
                        <img src="/tpl/Pc/default/common/img/azyx_1.jpg" alt="" />
                    </a>
                </li>
                <a href="__GROUP__/Index/liuxue/name/澳洲游学"> <li class="span3">

                        <img src="/tpl/Pc/default/common/img/azyx_8.png" alt="" />

                </li></a>
            </ul>
        </div>
    </div>
    <div class="borderone"></div>
    <div class="black">
        <div class="row girl">
            <ul class="thumbnails" id="gallery">
                <li class="span3">
                    <img src="/tpl/Pc/default/common/img/hgy.jpg" alt="" />
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/IMG_6826.jpg">
                        <img src="/tpl/Pc/default/common/img/IMG_6826.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/IMG_6824.jpg">
                        <img src="/tpl/Pc/default/common/img/IMG_6824.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/IMG_6779.jpg">
                        <img src="/tpl/Pc/default/common/img/IMG_6779.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/IMG_6775.jpg">
                        <img src="/tpl/Pc/default/common/img/IMG_6775.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/IMG_6726.jpg">
                        <img src="/tpl/Pc/default/common/img/IMG_6726.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/IMG_6770.jpg">
                        <img src="/tpl/Pc/default/common/img/IMG_6770.jpg" alt="" />
                    </a>
                </li>
                <a href="__GROUP__/Index/liuxue/name/韩国游"> <li class="span3">

                    <img src="/tpl/Pc/default/common/img/azyx_8.png" alt="" />

                </li></a>
            </ul>
        </div>
    </div>
    <div class="borderone"></div>
    <div class="black">
        <div class="row girl">
            <ul class="thumbnails" id="gallery">
                <li class="span3">
                    <img src="/tpl/Pc/default/common/img/kydl.jpg" alt="" />
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/kydl_01.jpg">
                        <img src="/tpl/Pc/default/common/img/kydl_01.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/kydl_02.jpg">
                        <img src="/tpl/Pc/default/common/img/kydl_02.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/kydl_03.jpg">
                        <img src="/tpl/Pc/default/common/img/kydl_03.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/kydl_04.jpg">
                        <img src="/tpl/Pc/default/common/img/kydl_04.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/kydl_05.jpg">
                        <img src="/tpl/Pc/default/common/img/kydl_05.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/kydl_06.jpg">
                        <img src="/tpl/Pc/default/common/img/kydl_06.jpg" alt="" />
                    </a>
                </li>
                <a href="__GROUP__/Index/liuxue/name/开业典礼"> <li class="span3">

                    <img src="/tpl/Pc/default/common/img/azyx_8.png" alt="" />

                </li></a>
            </ul>
        </div>
    </div>
    <div class="borderone"></div>
    <div class="black">
        <div class="row girl">
            <ul class="thumbnails" id="gallery">
                <li class="span3">
                    <img src="/tpl/Pc/default/common/img/fbhcj.jpg" alt="" />
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhcj_01.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhcj_01.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhcj_02.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhcj_02.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhcj_03.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhcj_03.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhcj_04.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhcj_04.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhcj_05.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhcj_05.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhcj_06.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhcj_06.jpg" alt="" />
                    </a>
                </li>
                <a href="__GROUP__/Index/liuxue/name/发布会场景"> <li class="span3">

                    <img src="/tpl/Pc/default/common/img/azyx_8.png" alt="" />

                </li></a>
            </ul>
        </div>
    </div>
    <div class="borderone"></div>
    <div class="black">
        <div class="row girl">
            <ul class="thumbnails" id="gallery">
                <li class="span3">
                    <img src="/tpl/Pc/default/common/img/fbhxwg.jpg" alt="" />
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhxw_01.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhxw_01.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhxw_02.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhxw_02.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhxw_03.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhxw_03.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhxw_04.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhxw_04.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhxw_05.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhxw_05.jpg" alt="" />
                    </a>
                </li>
                <li class="span3">
                    <a href="/tpl/Pc/default/common/img/fbhxw_06.jpg">
                        <img src="/tpl/Pc/default/common/img/fbhxw_06.jpg" alt="" />
                    </a>
                </li>
                <a href="__GROUP__/Index/liuxue/name/发布会新闻"> <li class="span3">

                    <img src="/tpl/Pc/default/common/img/azyx_8.png" alt="" />

                </li></a>
            </ul>
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