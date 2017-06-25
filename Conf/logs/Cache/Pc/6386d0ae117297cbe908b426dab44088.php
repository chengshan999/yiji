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
    <link rel="stylesheet" href="/tpl/Pc/default/common/css/public_products-q.css">
    <link rel="stylesheet" href="/tpl/Pc/default/common/css/style.css">
    <style>
	.detail-left{border-right:1px dashed silver;}
.detail-right{position: absolute;top:80px;width:240px; !important;}
</style>
    <div class="detail-content">
            <div class="detail-left f-l">
                <div class="detail-left-title"><?php echo ($fenlei); ?></div>
                <div class="detail-left-picture f-l">
                    <div class="detail-left-box">
                    <?php if($product[is_kuajing] == 1 ): ?><div class="important-pic"><img src="/tpl/Pc/default/common/img/importan-Pro.png"> </div><?php endif; ?>
                        <?php if(is_array($product["photo"])): foreach($product["photo"] as $key=>$v): if($key == 0): ?><span style="display: block;"><img src="<?php echo ($v); ?>"></span>
	                	<?php else: ?>
	                	<span style="display: none;"><img src="<?php echo ($v); ?>"></span><?php endif; endforeach; endif; ?>
	                    <span style="display: none;"><img id='photo' src="<?php echo ($v); ?>"></span>
                    </div>
                    <div class="detail-left-litpicture">
                        <?php if(is_array($product["photo"])): foreach($product["photo"] as $key=>$v): ?><div class="">
	                    <?php if($product[is_kuajing] == 1 ): ?><div class="important-pic1"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?>
	                    <img src="<?php echo ($v); ?>"></div><?php endforeach; endif; ?>
                    </div>
                </div>
                <div class="detail-left-xiangqing  f-l">
                <h3><?php echo ($product["productName"]); ?></h3>
                <?php if($huiyuan_price == null): ?><span >&yen;<b id='price'><?php echo ($product["sale_info"]["0"]["price"]); ?></b><span>(已售出<?php echo ($product["sale"]); ?>件)</span></span><br>
                 <?php else: ?>
                  <span ><span style="text-decoration: line-through;color:#aaa; font-size: 16px;">&yen;<b id='price_yuanjia'><?php echo ($product["sale_info"]["0"]["price"]); ?></b></span>&nbsp;&nbsp;&nbsp;<span style="color:#aaa;">会员价:</span>&yen;<b id='price'><?php echo ($huiyuan_price); ?></b><span>(已售出<?php echo ($product["sale"]); ?>件)</span></span><br><?php endif; ?>
                      <div class="detail-left-tran">
                        <div class="detail-left-trany  f-l"> 商品编号：<span><?php echo ($product["bianhao"]); ?></span></div>
                        <div class="detail-left-trany  f-l"> 货号：<span><?php echo ($product["huohao"]); ?></span></div>
                        <div class="detail-left-trany  f-l"> 商品重量：<span><?php echo ($product["weight"]); ?></span></div>
                        <div class="detail-left-trany  f-l"> 品牌：<span><?php echo ($product["pinpai"]); ?></span></div>
                        <div class="detail-left-trany trany f-l"> 所得积分：<span><?php echo $product[f_price]/10;?></span></div>
                        <div class="detail-left-trany  f-l"> 产地: <span>韩国</span></div>
                        <div class="detail-left-trany  f-l"> 快递: <span>&yen;<?php echo ($product["kuaidi_price"]); ?>.00</span></div>
                    </div>

                    <div class="detail-left-xiao">
                        <div class="detail-left-xiaox f-l"> 月销量<span><?php echo ($product["sale"]); ?></span></div>
                        <div class="detail-left-xiaop f-l"> 累计评论<span><?php echo ($pingjia_num); ?></span></div>
                        <div class="detail-left-xiaopf f-l"> 评分
                            <input  type="hidden" id="xing"  value="5">
                            <img id="xing1" src="/tpl/Pc/default/common/img/xing2.png">
                            <img id="xing2" src="/tpl/Pc/default/common/img/xing2.png">
                            <img id="xing3" src="/tpl/Pc/default/common/img/xing2.png">
                            <img id="xing4" src="/tpl/Pc/default/common/img/xing2.png">
                            <img id="xing5" src="/tpl/Pc/default/common/img/xing2.png">
                        </div>
                    </div>
                    <div class="detail-left-weight">净含量:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($product["guige"]); ?>
		                    </label>
	                </div>
                    <div class="detail-left-color">套餐选择:
                		<?php if(is_array($sale_info)): foreach($sale_info as $key=>$value): ?><label class="color" for="color<?php echo ($key); ?>"><?php echo ($value["0"]["color"]); ?><input type="radio" id='color<?php echo ($key); ?>' value="<?php echo ($value["0"]["color"]); ?>" name="color"  />
		                    <?php if(is_array($value)): foreach($value as $key=>$v): ?><input type="hidden" name="price" value="<?php echo ($v["price"]); ?>" />
			                    <input type="hidden" name="price_yuanjia" value="<?php echo ($v["price_yuanjia"]); ?>" /><?php endforeach; endif; ?>
                    		</label><?php endforeach; endif; ?>
	                </div>
                    <div class="detail-left-num">数量
                        <input class="input_number" type="text" value="1"><img class="jia_btn" src="/tpl/Pc/default/common/img/jia.png"><img class="jian_btn" src="/tpl/Pc/default/common/img/jian.png">
                    </div>
                    <div class="detail-left-shejiao">
                        <div class="detail-left-fenxiang f-l" style="margin-top: 2.5%;"><!-- JiaThis Button BEGIN -->
<div class="jiathis_style">
	<span class="jiathis_txt">分享到：</span>
	<a class="jiathis_button_cqq"></a>
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_button_tsina"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END --></div>
                        <?php if($shoucang == 1): ?><div class="detail-left-shoucang f-l"><img  id="myimage" src="/tpl/Pc/default/common/img/light.png">收藏</div>
                        <?php else: ?>
                        <div class="detail-left-shoucang f-l"><img  id="myimage" src="/tpl/Pc/default/common/img/dark.png">收藏</div><?php endif; ?>
                    </div>
                    <div class="detail-left-buy">
                        <input type="button" class="detail-left-buy-car" style="background: #888;" value="加入购物车 &nbsp;&gt;">
                        <input type="button" class="detail-left-buy-buy" style="background: #333;" value="立即购买  &nbsp;&gt;">
                    </div>
                </div>
                <?php if($pingjia != null): ?><div style="clear:both;"></div>
                <div class="rated-pingjia">
                    <div class="rated-pingjia-top">商品评价</div>
                    <?php if(is_array($pingjia)): foreach($pingjia as $key=>$v): ?><div class="rated-list-box">
                        <div class="rated-list-one">
                            <span class="rated-name f-l" ><?php echo ($v["name"]); ?></span>
                            <div class="rated-dengji f-l" >
                                <input  type="hidden"   class="xing" value="<?php echo ($v["all"]); ?>">
                                <img  class="xing1" src="/tpl/Pc/default/common/img/xing2.png">
                                <img  class="xing2" src="/tpl/Pc/default/common/img/xing2.png">
                                <img  class="xing3" src="/tpl/Pc/default/common/img/xing2.png">
                                <img  class="xing4" src="/tpl/Pc/default/common/img/xing2.png">
                                <img  class="xing5" src="/tpl/Pc/default/common/img/xing2.png">
                            </div>
                            <span  class="rated-time" ><?php echo date('Y-m-d',$v['createtime']);?></span>
                        </div>
                        <div class="rated-list-two"><?php echo ($v["content"]); ?></div>
                    </div><?php endforeach; endif; ?>
                    <div class="rated-more t-c"><button>查看更多</button></div>

                </div><?php endif; ?>
                <div class="detail-left-product f-l">
                    <div class="detail-left-productname">商品描述</div>
                    <div class="t-c"><?php if(is_array($product[photo_canshu])): foreach($product[photo_canshu] as $key=>$v): ?><img  src="<?php echo ($v); ?>" /><?php endforeach; endif; ?></div>
                </div>
            </div>
            <div class="detail-right f-l t-c">
                <div>-----------猜你喜欢-----------</div>
                <a href="__URL__/detail/product_id/<?php echo ($product_rand_one["id"]); ?>"><div class="detail-right-xingqu"><?php if($product_rand_one["is_kuajing"] == 1): ?><div class="important-pic-xq" ><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="<?php echo ($product_rand_one["f_pic"]); ?>"><?php echo ($product_rand_one["productName"]); ?></div></a>
                <a href="__URL__/detail/product_id/<?php echo ($product_rand_two["id"]); ?>"><div class="detail-right-xingqu"><?php if($product_rand_two["is_kuajing"] == 1): ?><div class="important-pic-xq" ><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><?php endif; ?><img src="<?php echo ($product_rand_two["f_pic"]); ?>"><?php echo ($product_rand_two["productName"]); ?></div></a>
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
    //商品加减
    $(function(){
        $(".jian_btn").click(function(){
            var $number = $(".input_number").val();
            if($number>1){
                $number--;
                $(".input_number").val($number);
            }
        });
        $(".jia_btn").click(function(){
            var $number = $(".input_number").val();
            $number++;
            $(".input_number").val($number);
        })
    });
</script>
<script>
    //颜色效果预览
        $(".detail-left-color label").click(function() {
            $(".detail-left-color label").removeClass("bgc");
            $(this).addClass("bgc");
//             var guige=[];
//             $(this).find("input[name=guige]").each(function(){
//             	guige.push($(this).val());
//             })
//             $(".detail-left-weight label").find("input[name=weight]").each(function(){
//             	$(this).removeAttr("checked");
//             	var guige_check = $(this).val();
//             	var pObj = $(this).parent();
//             	if($.inArray(guige_check,guige)==-1){
//             		pObj.css('color','rgb(170,170,170)');
// 	            }else{
//   	            	pObj.removeAttr("style");
//   	            }
//             })
        })
    $(function(){
        $(".detail-left-litpicture div").click(function() {
            $(".detail-left-litpicture div").removeClass("border_lit");
            var index = $(this).index();
            $(".detail-left-picture div span").stop(true, true).hide().eq(index).show();
            $(this).addClass("border_lit");
        })

    });
    //点击套餐变化价格
    $(".detail-left-color label").click(function(){
    	var price=$(this).find("input[name=price]").val();
    	var price_yuanjia=$(this).find("input[name=price_yuanjia]").val();
			price=parseFloat(price);
			price_yuanjia=parseFloat(price_yuanjia);
			$("#price").text(price);
			$("#price_yuanjia").text(price_yuanjia);
    });
</script>
<script>
    //收藏
    $(function() {
        function sx() {
            var $pic = $(".nav-right").height();
            $(".wrap").css("height", $pic);
        }
        var time = setInterval(sx, 30);
    });
    $(".detail-left-shoucang").click(function(){
    	var url=location.href;
        var element=document.getElementById('myimage');
        if (element.src.match("dark")){
            element.src="/tpl/Pc/default/common/img/light.png";
            $.ajax({
        		url:"__GROUP__/Users/check_login",
        		type:"POST",
        		data:{url:url},
        		async:false,
        		success:function(data){
        			if(data!="success"){
        				alert(data);
        				location.href="__GROUP__/Users/denglu";
        				return false;
        			}else{
        				var product_id="<?php echo ($product["id"]); ?>";
        				$.ajax({
        					url:"__URL__/shoucang",
		            		type:"POST",
		            		data:{product_id:product_id},
		            		async:false,
		            		success:function(data){
		            			alert(data);
		            			return false;
		            		}
        				})
        			}
        		}
        	})
        }
        else{
            element.src="/tpl/Pc/default/common/img/dark.png";
            $.ajax({
        		url:"__GROUP__/Users/check_login",
        		type:"POST",
        		data:{url:url},
        		async:false,
        		success:function(data){
        			if(data!="success"){
        				alert(data);
        				location.href="__GROUP__/Users/denglu";
        				return false;
        			}else{
        				var product_id="<?php echo ($product["id"]); ?>";
        				$.ajax({
        					url:"__URL__/shoucang",
		            		type:"POST",
		            		data:{product_id:product_id},
		            		async:false,
		            		success:function(data){
		            			alert(data);
		            			return false;
		            		}
        				})
        			}
        		}
        	})
        }
    });

    //点击评论加载更多
    var num=1;
    $(".rated-more").click(function(){
    	var product_id="<?php echo ($product["id"]); ?>";
    	$.ajax({
    		url:"<?php echo U('Product/get_pingjia');?>",
    		data:{num:num,product_id:product_id},
    		dataType:"json",
    		type:"POST",
    		success:function(data){
    			if(data=='end'){
    				alert("没有更多了");return false;
    			}else{
    			$.each(data,function(k,v){
    				$(".rated-more").before('<div class="rated-list-box">\
                        <div class="rated-list-one">\
                            <span class="rated-name f-l" >'+v.name+'</span>\
                            <div class="rated-dengji f-l" >\
                                <input  type="hidden"   class="xing" value="'+v.all+'">\
                                <img  class="xing1" src="/tpl/Pc/default/common/img/xing2.png">\
                                <img  class="xing2" src="/tpl/Pc/default/common/img/xing2.png">\
                                <img  class="xing3" src="/tpl/Pc/default/common/img/xing2.png">\
                                <img  class="xing4" src="/tpl/Pc/default/common/img/xing2.png">\
                                <img  class="xing5" src="/tpl/Pc/default/common/img/xing2.png">\
                            </div>\
                            <span  class="rated-time" >'+v.createtime+'</span>\
                        </div>\
                        <div class="rated-list-two">'+v.content+'</div>\
                    </div>')
    			})
    			 $(".rated-name").each(function(){
                var text = $(this).html();
                var text_length = text.length;
                var name_first=text.substr(0,3);
                var name_last=text.substr(text_length-2,text_length);
                $(this).html(name_first+"**"+name_last);
            	})
            	$(".xing").each(function() {
                var xing = $(this).val();
                var index=$(this).parent(".rated-dengji").children("img");
                if (xing==1){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==2){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==3){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(2).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==4){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(2).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(3).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==5){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(2).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(3).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(4).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
            })
            num=num+3;
    		}
    		}
    	})
    	
    })
    
    //购买与添加购物车
    $(".detail-left-buy-car").click(function() {
        var val=$('input:radio[name="color"]:checked').val();
        if(val==null)
        {
            alert("请选择套餐");
        }
        else{
            if(val==null){
                if( val==null ){
                    alert("请选择套餐");
                }
            }
            else{
            	var url=location.href;
            	$.ajax({
            		url:"__GROUP__/Users/check_login",
            		type:"POST",
            		data:{url:url},
            		async:false,
            		success:function(data){
            			if(data!="success"){
            				alert(data);
            				location.href="__GROUP__/Users/denglu";
            				return false;
            			}else{
            				var product_id="<?php echo ($product["id"]); ?>";
            				var number=$(".input_number").val();
            				var color=val;
            				var guige="<?php echo ($product["guige"]); ?>";
            				var price=$("#price").text();
            				$.ajax({
            					url:"__URL__/add_gouwuche",
			            		type:"POST",
			            		data:{product_id:product_id,number:number,color:color,price:price,guige:guige},
			            		async:false,
			            		success:function(data){
			            			alert(data);
			            		}
            				})
            			}
            		}
            	})
            }
        }

    })
    $(".detail-left-buy-buy").click(function() {
        var val=$('input:radio[name="color"]:checked').val();
        if(val==null)
        {
            alert("请选择套餐");
        }
        else{
            if(val==null){
                if( val==null ){
                    alert("请选择套餐");
                }
            }
            else{
            	var url=location.href;
            	$.ajax({
            		url:"__GROUP__/Users/check_login",
            		type:"POST",
            		data:{url:url},
            		async:false,
            		success:function(data){
            			if(data!="success"){
            				alert(data);
            				location.href="__GROUP__/Users/denglu";
            				return false;
            			}else{
	            			var product_id="<?php echo ($product["id"]); ?>";
	        				var number=$(".input_number").val();
	        				var color=val;
	        				var guige="<?php echo ($product["guige"]); ?>";
	        				var price=$("#price").text();
	        				$.ajax({
	        					url:"__URL__/save_order",
	                    		type:"POST",
	                    		data:{product_id:product_id,number:number,color:color,price:price,url:url,guige:guige},
	                    		async:false,
	                    		success:function(data){
	                    			if(data=="info"){
	                    				alert("请补个人资料再进行购买");
	                    				location.href="__GROUP__/Users/center_edit";
	                    			}else if(data!='false'){
	                    				location.href="__URL__/order/order_id/"+data;
	                    			}else{
	                    				alert("系统繁忙，请稍后重试");
	                    				return false;
	                    			}
	                    		}
	        				})
            			}
            		}
            	})
            }
        }

    })
</script>
<script type="text/javascript">
    $(function(){
        var xing=document.getElementById('xing').value;
        var element1=document.getElementById('xing1');
        var element2=document.getElementById('xing2');
        var element3=document.getElementById('xing3');
        var element4=document.getElementById('xing4');
        var element5=document.getElementById('xing5');
       if (xing==1){
           element1.src="/tpl/Pc/default/common/img/xing1.png";
       }
        if (xing==2){
            element1.src="/tpl/Pc/default/common/img/xing1.png";
            element2.src="/tpl/Pc/default/common/img/xing1.png";
        }
        if (xing==3){
            element1.src="/tpl/Pc/default/common/img/xing1.png";
            element2.src="/tpl/Pc/default/common/img/xing1.png";
            element3.src="/tpl/Pc/default/common/img/xing1.png";
        }
        if (xing==4){
            element1.src="/tpl/Pc/default/common/img/xing1.png";
            element2.src="/tpl/Pc/default/common/img/xing1.png";
            element3.src="/tpl/Pc/default/common/img/xing1.png";
            element4.src="/tpl/Pc/default/common/img/xing1.png";
        }
        if (xing==5){
            element1.src="/tpl/Pc/default/common/img/xing1.png";
            element2.src="/tpl/Pc/default/common/img/xing1.png";
            element3.src="/tpl/Pc/default/common/img/xing1.png";
            element4.src="/tpl/Pc/default/common/img/xing1.png";
            element5.src="/tpl/Pc/default/common/img/xing1.png";
        }
        $(document).ready(function() {
            $(".rated-name").each(function(){
                var text = $(this).html();
                var text_length = text.length;
                var name_first=text.substr(0,3);
                var name_last=text.substr(text_length-2,text_length);
                $(this).html(name_first+"**"+name_last);
            })
        });
            $(".xing").each(function() {
                var xing = $(this).val();
                var index=$(this).parent(".rated-dengji").children("img");
                if (xing==1){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==2){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==3){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(2).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==4){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(2).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(3).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
                if (xing==5){
                    index.eq(0).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(1).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(2).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(3).attr("src","/tpl/Pc/default/common/img/xing1.png");
                    index.eq(4).attr("src","/tpl/Pc/default/common/img/xing1.png");
                }
            })
    });
</script>

<script>
    $(function(){
        var d=document.body.offsetWidth;
        var e=(d-1200)/2;
     if(e>0)
     {
         $(".detail-right").css({"position":"fixed","right":e})
     }
        else{
         $(".detail-right").css({"display":"none"})
     }
    })
</script>
<script>
    document.getElementsByTagName("body")[0].onscroll=function(){
    	var height=$(document).height();
    	var one_screen=$(window).height();
        var a= document.body.scrollTop;
        var b= $(".product-f-pic5").height();
    
        if(document.getElementsByTagName("body")[0].scrollTop>(height-b-870)){
            $(".detail-right").css({"position":"absolute","top":height-(b+870)});
        }else{
        	$(".detail-right").css({"position":"fixed","top":"80px"})
        }
        
    }
</script>