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

<div class="content-center ">
    <div class="content-center-t ">WELCOME<span><?php echo urldecode(cookie('zhenzhu_tel'))?></span></div>
    <div class="center-right-order f-l" >
       <div class="center-right-order-name" >购物车</div>
        <div class="border1 "></div>

        <!--购物车 begin-->
        <div class="number1 share ">
        	<?php if(is_array($gouwuche)): foreach($gouwuche as $key=>$v): ?><div class="gwc-content ">
                <div class="gwc-xiugai a">
                    <form action="" class="form">
                        <label class="cheack-box zhi" id="<?php echo ($v["id"]); ?>"></label>
                    </form>
                    <div class="gwc-del" onclick="gouwuche_del(<?php echo ($v["id"]); ?>)"><p class="delete">删除</p> <img  src="/tpl/Pc/default/common/images/gwc-sc.png" alt=""
                                                                       class="img-responsive delete"></div>
                    <div style="clear:both;"></div>
                    <div class="gwc-xiangqing">
                        <a href="__URL__/product_list/product_id/<?php echo ($v["product_id"]); ?>"><div class="gwc-1" style="margin-top:-1.8rem;"><img style="width:65%;" src="<?php echo ($v["pic"]); ?>" alt="" class="img-responsive"></div></a>

                        <div class="gwc-2">
                            <?php echo ($v["productName"]); ?>
                        </div>
                        <div class="gwc-3"><?php echo ($v["color"]); ?> &nbsp; <?php echo ($v["guige"]); ?></div>
                        <div class="gwc-5 number">
                            <span style="padding:2px 10px; ">¥<?php echo ($v["price"]); ?></span>
                            <span style="margin-left:25%"><o class="num"><?php echo ($v["number"]); ?></o>件</span></div>
                        <div class="gwc-5 del">
                            ¥<o class="price_one"><?php echo ($v["total_price"]); ?></o><br/>(含运费:¥<?php echo ($v["kuaidi_price"]); ?>.00)
                        </div>

                    </div>
                </div>
            </div><?php endforeach; endif; ?>
            <div style="clear:both;"></div>
            <?php if($gouwuche != null): ?><div class="gwc-xiugai" style="margin-top: 3rem">
                <form action="" class="form1">
                    <label class="cheack-box1" id="mal"></label>
                    <!--<input type="checkbox" id="mal">-->
                    <ul>
                        <li><a id="all">全选</a></li>
                        <li><a id="del-all">删除</a></li>
                    </ul>
                </form>
                <div class="gwc-del"><p><span>已选中<b class="pink" id='all_number'>0</b>件商品</span><span>合计（含运费）:<b
                      class="pink">¥<o id="all_price">0</o>.00</b></span><a onclick="gouwuche_order()" target="_parent">结算</a></p>
                </div>
                <div style="clear:both;"></div>
            </div>
            <?php else: ?>
            <h4 style="margin:11%">您的购物车是空的！</h4><?php endif; ?>
        </div>

        <!--购物车 end-->

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



<script>
function gouwuche_order(){
	var ids=new Array();
	$(".sure.zhi").each(function(){
		ids.push($(this).attr('id'));
	})
	if(ids==''){
		alert("未选中商品");
		return false;
	}
	$.ajax({
		url:"__URL__/gouwuche_order",
		type:"POST",
		data:{id:ids},
		success:function(data){
			if(data=='info'){
				alert("请补全身份证和手机号再进行购买");
				location.href="__GROUP__/Users/center_edit";
			}else if(data!=''){
				location.href="__URL__/order/order_id/"+data;
			}else{
				alert("出错了，请稍后重试");
				return false;
				
			}
		}
	})
}
//删除购物车
function gouwuche_del(id){
	if(confirm("确定删除该物品么?")){
		$.ajax({
			url:"<?php echo U('Product/gouwuche_del');?>",
			data:{id:id},
			type:"POST",
			success:function(){
				location.reload();
			}
		})
	}else{
		return false;
	}
}
//全部删除
$('#del-all').click(function () {
	if(confirm("确定全部删除么?")){
	    var name = $('label.cheack-box');
	    var ids=new Array();
	    name.each(function () {
	        if ($(this).hasClass('sure')) {
	            ids.push($(this).attr('id'));
	        }
	    })
		$.ajax({
			url:"<?php echo U('Product/gouwuche_del');?>",
			data:{ids:ids},
			type:"POST",
			success:function(){
				location.reload();
			}
		})
	}else{
		return false;
	}
})
//全选
$('#all').click(function () {
        if ($('.cheack-box1').hasClass('sure')) {
            $('.cheack-box').removeClass('sure');
            $('.cheack-box1').removeClass('sure');
			$("#all_number").text(0);
			$("#all_price").text(0);
        } else {
            $('.cheack-box').addClass('sure');
            $('.cheack-box1').addClass('sure');
            var num=0;
            var price=0;
            $(".zhi.sure").each(function(){
            	num += parseInt($(this).parent().parent().find(".num").text());
            	price += parseInt($(this).parent().parent().find(".price_one").text());
            })
        	$("#all_number").text(num);
        	$("#all_price").text(price);
        }

    })
 //全选
 $('#mal').click(function () {
    if ($(this).hasClass('sure')) {
        $('.cheack-box').removeClass('sure');
        $(this).removeClass('sure');
        $("#all_number").text(0);
        $("#all_price").text(0);
    } else {
        $('.cheack-box').addClass('sure');
        $(this).addClass('sure');
        var num=0;
        var price=0;
        $(".zhi.sure").each(function(){
        	num += parseInt($(this).parent().parent().find(".num").text());
        	price += parseInt($(this).parent().parent().find(".price_one").text());
        })
    	$("#all_number").text(num);
    	$("#all_price").text(price);
        
    }
})
//单机选中
    $('.cheack-box').click(function () {
        if ($(this).hasClass('sure')) {
            $(this).removeClass('sure');
        } else {
            $(this).addClass('sure');
        }
        var num=0;
        var price=0;
        $(".zhi.sure").each(function(){
        	num += parseInt($(this).parent().parent().find(".num").text());
        	price += parseInt($(this).parent().parent().find(".price_one").text());
        })
    	$("#all_number").text(num);
    	$("#all_price").text(price);
    })
</script>