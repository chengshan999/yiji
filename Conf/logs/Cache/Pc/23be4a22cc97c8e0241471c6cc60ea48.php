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
    <link rel="stylesheet" href="<?php echo RES;?>/css/about_us.css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/about_us.js"></script>
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

<div class="about-us-team">
    <div class="product-think">
        <h4 id="CS" style="margin-bottom: 30px;">创始团队</h4>
        <!--<p>人类一直在寻找办法来改善女人的外观和美感，如何保护自己的皮肤，并使其更加美丽和光泽，如何延长青春和活力，减缓衰老，消除岁月留下的痕迹</p>-->
    </div>

    <!--轮播 begin-->
    <div class="carouselWrap">
        <a href="" class="carouselPrev"><img src="<?php echo RES;?>/images/index-left.png" alt="" class=""></a>
        <a href="" class="carouselNext"><img src="<?php echo RES;?>/images/index-right.png" alt="" class=""></a>
        <ul class="carouselContent">
            <li>
                <a href="">
                    <div class="about-us-cal"><img src="<?php echo RES;?>/images/gywm0201.jpg" alt=""></div>
                    <div class=" about-us-team-name">Peggy Sun</div>
                    <div class="about-us-dis">Peggy Sun 一个热爱生活、热爱人生、热爱大自然的现代女性。有梦想、永不放弃的精神，通过十多年的化妆品产品开发的经验，深深体会到只有来自最纯净的地方和纯净的成份以及最安全的配方才能给我们带来最佳的感受和状态， 不追求短暂的效果， 只有通过长期温和调理皮肤才会恢复完美无瑕的状况， 这些原则使Peggy 努力不懈的在世界各地寻找自己喜爱的原料。 自己喜爱的成份，做出自己喜爱的配方，以东方人所熟悉的真珠为核心开发出一系列的天然、有效、安全的功能性美容产品。
                    </div>
                </a>
                <div style="clear: both"></div>

            </li>
            <li>
                <a href="">
                    <img src="<?php echo RES;?>/images/AnaT.jpg" alt="">
                    <div class=" about-us-team-name">AnaT</div>
                    <div class=" about-us-dis">来自意大利米兰的AnaT是一位追求完美的创意设计师，AnaT喜欢大自然，热情奔放的生活，自由自在是AnaT来到中国的原因，中国给AnaT带来无限创造的灵感，遇到Peggy她们两位就合力创造出pearlosophy，以天然优雅自信的态度，带来一系列充满惊喜的产品。
                    </div></a>
                    <div style="clear: both"></div>

            </li>
            <li>
                <a href="">
                    <img src="<?php echo RES;?>/images/Steven%20Ko.jpg" alt="">
                    <div class="about-us-team-name">Steven Ko</div>
                    <div class="about-us-dis">Steven Ko是一位充满传奇的人物，从1991年成立澳洲red earth，然后2002年成立维肌泉在丝芙兰独家发售13年，保持面膜销售冠军。2015年成立frangi带领公司成为微商界的一支突出队伍打造出微商界的一个以品质取胜的优秀品牌，现在和中国著名巨星合作品牌和负责品牌管理steven为pearlosophy提供品牌形象管理顾，决心打造品牌为东方女性的恩物。
                    </div></a>
                    <div style="clear: both"></div>

            </li>
        </ul>
        <p class="carouselList">
            <img src="<?php echo RES;?>/images/gywm03.jpg" alt="" class="img-responsive about-us-col-img1 ">
            <img src="<?php echo RES;?>/images/gywm04.png" alt="" class="img-responsive about-us-col-img2">
            <img src="<?php echo RES;?>/images/gywm05.jpg" alt="" class="img-responsive about-us-col-img3">
        </p>
    </div>
    <!--轮播 end-->

    <!--常见我问题 begin-->
    <div class="product-think about-us-ms">
        <h4>常见问题</h4>
        <p><!--人类一直在寻找办法来改善女人的外观和美感，如何保护自己的皮肤，并使其更加美丽和光泽，如何延长青春和活力，减缓衰老，消除岁月留下--></p>
    </div>
    <div class="about-us-question">
      <div class="row">
          <div class="about-us-question-left" >
          	<?php if(is_array($fenlei)): foreach($fenlei as $key=>$v): if($key == 0): ?><div class="question-name qnc"><?php echo ($v["name"]); ?></div>
              <?php else: ?>
              <div class="question-name"><?php echo ($v["name"]); ?></div><?php endif; endforeach; endif; ?>
          </div>
          <div class="about-us-question-right">
          <?php if(is_array($all)): foreach($all as $key=>$v): if($key == 1): ?><div class="question-one" style="display: block;">
              <?php else: ?>
              <div class="question-one" ><?php endif; ?>
                  <div class="carouse<?php echo ($key+1); ?>Wrap">
                      <a href="" class="carouse<?php echo ($key+1); ?>Prev"><img src="<?php echo RES;?>/images/index-left.png" alt="" class=""></a>
                      <a href="" class="carouse<?php echo ($key+1); ?>Next"><img src="<?php echo RES;?>/images/index-right.png" alt="" class=""></a>
                      <ul class="carouse<?php echo ($key+1); ?>Content">
                          <?php if(is_array($v)): foreach($v as $k=>$val): if($k%6 == 0): ?><li><?php endif; ?>
                              <div class="about-us-question-rightbox" >
                              <div class="question-top">
                                  <div class="question-top-left"><img src="<?php echo RES;?>/images/question.png" alt=""/></div>
                                  <div class="question-top-right"><?php echo ($val["question"]); ?></div>
                                  <div class="clear"></div>
                              </div>
                              <div class="question-bottom">
                                  <div class="question-bottom-left"><img src="<?php echo RES;?>/images/answer.png" alt=""/></div>
                                  <div class="question-bottom-right"><?php echo ($val["answer"]); ?></div>
                                  <div class="clear"></div>
                              </div>

                          </div>
                          <?php if($k%6 == 5): ?></li><?php endif; endforeach; endif; ?>
                      </ul>
                      
                  </div>
              </div><?php endforeach; endif; ?>
              </div>

          </div>
      </div>
    </div>
    <!--常见问题 end-->

    <div class="row">
        <div class="col-lg-6 about-us-left" >
            <div style="width:600px;height:400px;border:#ccc solid 1px;" id="dituContent"></div>
        </div>
        <div class="col-lg-6 about-us">
            <h3>关于我们</h3>
            <p>
                地址：上海市闵行区申长路988号虹桥万科中心2号楼605A<br/>
                邮编：201107 <br/>
                TEL：021-54721650 <br/>
                E-mail：sunyuting37@yahoo.com.cn<br/>
            </p>
            <img src="/tpl/Pc/default/common/images/chat.png" alt="" class="img-responsive">
            <p class="chat">真珠美学官方微信</p>
        </div>
    </div>

    <!--关于我们   end-->

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
$(".about-us-question-left>div").click(function(){
    $(".about-us-question-left>div").removeClass("qnc");
    var index=$(this).index();
    $(".about-us-question-right>div").stop(true,true).hide(0).eq(index).show(0);
    $(this).addClass("qnc");
});
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(121.320564,31.199737);//定义一个中心点坐标
        map.centerAndZoom(point,14);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_SMALL});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"真珠美学",content:"申长路988号虹桥万科中心2号楼605A",point:"121.321202|31.203289",isOpen:0,icon:{w:93,h:105,l:0,t:0,x:6,lb:5}}
    ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label('',{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor:"#808080",
                color:"#333",
                border:'none',
                maxWidth:"inherit",
                cursor:"pointer"
            });

            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("/tpl/Pc/default/common/img/biaozhi.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>