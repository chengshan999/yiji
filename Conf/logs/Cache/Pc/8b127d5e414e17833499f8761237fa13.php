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
<div class="content-center" >

    <div class="content-center-t ">WELCOME<span><?php echo urldecode(cookie('zhenzhu_tel'))?></span><a href="__URL__/center"><span class="f-r" style="color:#f499c0;font-size: 14px;margin:25px 20px 0 0;">个人中心入口</span></a></div>    <!--左边导航start-->
                <!--左边导航start-->
    <div class="center-left f-l">
        <ul>
            <li class=""><a href="__URL__/daili_center">我的代理信息</a></li>
            <li class=""><a href="__URL__/daili_center/name/xindaili">新代理加盟</a></li>
            <li class=""><a href="__URL__/daili_center/name/xiajidaili">查看下级代理</a></li>
            <li class=""><div class="agency_my">我的订单</div>
                <ul class="my_huiyuan_ej" >
                    <li class="centerbgc_a">我要订货</li>
                    <li class="">我的订货价</li>
                    <li class="">我的库存</li>
                    <li class=""><a href="__URL__/daili_my_order">我的订单</a></li>
                    <li class=""><a href="__URL__/xiaji_daili_order">下级客户订单</a></li>
                    <li class="">下级代理价</li>
                    <li class="">下级代理库存</li>
                </ul>
            </li>
            <li class=""><a href="__URL__/daili_center/name/fahuo">发货</a></li>
            <li class=""><a href="__URL__/daili_center/name/chaxun">查询单号</a></li>
            <li class=""><a href="__URL__/daili_center/name/guanli">代理申请管理</a></li>
            <li ><a href="__URL__/daili_huiyuan"> 我的会员</a></li>
        </ul>
    </div>
    <!--左边导航end-->

    <!--右边内容start-->
    <div class="center-right f-l">

        <div class="ageney-four" >
            <div style="display: block;">
                <div class="age_one_o">我要订货 <span>(下单订货)</span></div>
                <div class="age_fb_a">添加产品Tip:选择分类>选择产品  Total: <span><?php echo count($product);?></span>  </div>
                <div class="t-c age_fb_b"> 品牌分类:
                    <select name="" id="">
                        <option value="真珠美学">真珠美学</option>
                    </select>
                </div>
                <div class="age_fb_c">
                   <?php if(is_array($product)): foreach($product as $key=>$v): ?><div>
                     <a href="__URL__/daili_create_order/product_id/<?php echo ($v["id"]); ?>">
                        <div class="age_fb_cl"><img style=" width: 100%;" src="<?php echo ($v["f_pic"]); ?>" alt=""/></div>
                        <div class="age_fb_cr">
                            <h4><?php echo ($v["productName"]); ?></h4><br/><br/>
                            <span>品牌:真珠美学</span> <br/>
                            <span>单价: <span> &yen;<?php echo ($v["f_price"]); ?></span></span>
                        </div>
                     </a>
                    </div><?php endforeach; endif; ?>
                </div>
                <div style="clear:both;"></div>
                <?php if($daili_order[product] != null): ?><form id="forma" action="__URL__/save_daili_order" method="post">
                <div class="age_fb_d" >
                    <div class="age_fb_da">订货单</div>
                    <div class="age_fb_db">
                        <div>收货人：<?php echo ($shouhuo["xingming"]); ?></div>
                        <div>手机号：<?php echo ($shouhuo["tel"]); ?></div>
                        <div>收货地址：<?php echo ($shouhuo["province"]); ?> <?php echo ($shouhuo["city"]); ?> <?php echo ($shouhuo["area"]); ?> <?php echo ($shouhuo["addr"]); ?></div>
                        <div>订单留言：<input name="liuyan" type="text"/></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="age_fb_dc">
                        <div class="age_fb_dca">产品名称</div>
                        <div  class="age_fb_dcb">数量</div>
                        <div  class="age_fb_dcc">单价</div>
                        <div  class="age_fb_dcd">总额</div>
                        <div  class="age_fb_dce">操作</div>
                        <div style="clear: both;"></div>
                    </div>
					<?php if(is_array($daili_order[product])): foreach($daili_order[product] as $key=>$v): ?><div class="age_fb_dd">
                        <div class="age_fb_dda"><img style="width:100%;" src="<?php echo ($v["f_pic"]); ?>" alt=""/></div>
                        <div class="age_fb_ddb"><?php echo ($v["productName"]); ?> <br/> 容量：<?php echo ($v["guige"]); ?></div>
                        <div class="age_fb_ddc"><?php echo ($v["number"]); ?></div>
                        <div class="age_fb_ddd">&yen;<?php echo ($v["price"]); ?>.00</div>
                        <div class="age_fb_dde">&yen;<?php echo $v[price]*$v[number]+$v[kuaidi_price];?>.00 <br/> （含运费 &yen;<?php echo ($v["kuaidi_price"]); ?>.00）</div>
                        <div class="age_fb_ddf"><span onclick="delete_daili_order_product(<?php echo ($key); ?>)">删除</span></div>
                    </div><?php endforeach; endif; ?>
                    <div class="age_fb_de">共计<span><?php echo ($daili_order[total_number]); ?></span>件商品(含运费) <span>&yen;<?php echo ($daili_order[total_price]); ?>.00</span> <span onclick="submit()" class="age_fb_debtn">结算</span>
					<input type="hidden" name="total_price" value="<?php echo ($daili_order[total_price]); ?>" />
					<input type="hidden" name="daili_order_id" value="<?php echo ($daili_order[id]); ?>" />
                    </div>
                </div>
                </form><?php endif; ?>
            </div>
            <div style="display: none;">
                <div class="age_one_o">我的订货价 <span>(我的订货价格)</span></div>
                <div class="age_fb_a">我的订货价格</div>
                <div class="t-c age_fb_b"> 品牌分类:
                    <select name="" id="">
                        <option value="真珠美学">真珠美学</option>
                </select>
                </div>
                <div class="age_fb_c">
                <?php if(is_array($product)): foreach($product as $key=>$v): ?><div>
                        <div class="age_fb_cl"><img style="    width: 100%;" src="<?php echo ($v["f_pic"]); ?>" alt=""/></div>
                        <div class="age_fb_cr">
                            <h4><?php echo ($v["productName"]); ?></h4><br/><br/>
                            <span>品牌:真珠美学</span> <br/>
                            <span>单价: <span> &yen;<?php echo ($v["f_price"]); ?></span></span>
                        </div>

                    </div><?php endforeach; endif; ?>  
                </div>
            </div>
            <div style="display: none;">
                <div class="age_one_o">我的库存 <span>(下级可以下订单的库存量)</span></div>
                <div class="age_fb_a">产品库存量</div>
                <div class="t-c age_fb_b"> 品牌分类:
                    <select name="" id="">
                        <option value="真珠美学">真珠美学</option>
                    </select>
                </div>
                <div class="age_fb_c">
                <?php if(is_array($my_kucun)): foreach($my_kucun as $key=>$v): ?><div>
                        <div class="age_fb_cl"><img style="width:100%;" src="<?php echo ($v["f_pic"]); ?>" alt=""/></div>
                        <div class="age_fb_cr">
                            <h4><?php echo ($v["productName"]); ?></h4><br/><br/>
                            <span>品牌:真珠美学</span> <br/>
                            <span>库存: <span> <?php if($v[kucun] == null): ?>0<?php else: echo ($v["kucun"]); endif; ?></span></span>
                        </div>

                    </div><?php endforeach; endif; ?>
                </div>


            </div>
            <div style="display: block;">
            </div>
            <div style="display: block;">
            </div>
            <div style="display: none;">
                <div class="age_one_o">下级代理价 <span>(我的下级代理产品进货价)</span></div>
                <div class="age_fb_a">真珠美学</div>
                <div class="t-c age_fb_b"> 代理等级:
                    <select name="" id="xiaji_daili_price">
                    	<?php if(is_array($grades)): foreach($grades as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
                <?php if(is_array($grades)): foreach($grades as $key_one=>$val): if($key_one == 0): ?><div class="age_fb_c xiaji_daili_price" >
                <?php else: ?>
                <div class="age_fb_c xiaji_daili_price" style="display:none;"><?php endif; ?>
                    <?php if(is_array($product)): foreach($product as $key=>$v): ?><div>
                        <div class="age_fb_cl"><img style="width:100%" src="<?php echo ($v["f_pic"]); ?>" alt=""/></div>
                        <div class="age_fb_cr">
                            <h4><?php echo ($v["productName"]); ?></h4><br/><br/>
                            <span>品牌:真珠美学</span> <br/>
                            <span>单价:<span> &yen;<span class=""><?php echo ($grades[$key_one][price][$v[id]]); ?></span></span></span>
                        </div>
                    </div><?php endforeach; endif; ?>
                </div><?php endforeach; endif; ?>
            </div>
            <div style="display: none;">
                <div class="age_one_o">下级代理库存 <span>(我的下级代理产品库存)</span></div>
                <form id="formb" action="__URL__/daili_order/name/xiaji_kucun" method="post">
                <div class="age_five_f"><input type="text" name="key" value="<?php echo ($keyword); ?>" placeholder="请输入手机号"/><input type="submit"  value="查询"/></div>
                </form>
				<div class="age_fb_c">
				<?php if($xiaji_kucun != null): if(is_array($xiaji_kucun)): foreach($xiaji_kucun as $key=>$v): ?><div>
                        <div class="age_fb_cl"><img style="width:100%;" src="<?php echo ($v["f_pic"]); ?>" alt=""/></div>
                        <div class="age_fb_cr">
                            <h4><?php echo ($v["productName"]); ?></h4><br/><br/>
                            <span>品牌:真珠美学</span> <br/>
                            <span>库存: <span> <?php if($v[kucun] == null): ?>0<?php else: echo ($v["kucun"]); endif; ?></span></span>
                        </div>

                    </div><?php endforeach; endif; endif; ?>
                </div>
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
        $(".ageney-four>div").stop(true, true).hide().eq(index).show();
        $(this).addClass("centerbgc_a");
    });

//我的订单切换
    $(".age_fd_b>div").click(function(){
        $(".age_fd_b>div>span").removeClass("centerbgc_b")
        var index=$(this).index();
        $(".age_fd_c>div").stop(true, true).hide().eq(index).show();
        $(this).children("span").addClass("centerbgc_b");
    });

    //订单删除
    function delete_daili_order_product(key){
    	if(confirm("确定删除该物品么?")){
    		$.ajax({
    			url:"<?php echo U('Users/delete_daili_order_product');?>",
    			data:{key:key},
    			type:"POST",
    			success:function(){
    				location.reload();
    			}
    		})
    	}else{
    		return false;
    	}
    }
    //功能
	 var name="<?php echo ($name); ?>";
	if(name=='my_price'){
		$(".my_huiyuan_ej li").eq(1).click();
	}else if(name=='kucun'){
		$(".my_huiyuan_ej li").eq(2).click();
	}else if(name=='my_dingdan'){
		$(".my_huiyuan_ej li").eq(3).click();
	}else if(name=='xiaji_dingdan'){
		$(".my_huiyuan_ej li").eq(4).click();
	}else if(name=='xiaji_price'){
		$(".my_huiyuan_ej li").eq(5).click();
	}else if(name=='xiaji_kucun'){
		$(".my_huiyuan_ej li").eq(6).click();
	}
	function submit(){
		$("#forma").submit();
	}
	$("#xiaji_daili_price").change(function(){
		var key=$(this).val();
		$(".xiaji_daili_price").css('display','none');
		$(".xiaji_daili_price").eq(key).css('display','block');
	})
</script>