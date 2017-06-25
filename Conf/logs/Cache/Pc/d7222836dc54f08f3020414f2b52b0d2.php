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
<link href="<?php echo RES;?>/libs/fsgallery.css" rel="stylesheet" />

   <!--  <script src="/tpl/Pc/default/common/js/ZeroClipboard.js"></script>
 -->
<div class="content-center" >

    <div class="content-center-t ">WELCOME<span><?php echo urldecode(cookie('zhenzhu_tel'))?></span><a href="__URL__/center"><span class="f-r" style="color:#f499c0;font-size: 14px;margin:25px 20px 0 0;">个人中心入口</span></a></div>
    <!--左边导航start-->
    <div class="center-left f-l">
        <ul>
            <li class="centerbgc">我的代理信息</li>
            
            <li class="">新代理加盟</li>
            <li class="">查看下级代理</li>
            <a href="__URL__/daili_order"><li class="">我的订单</li></a>
            <li class="">发货</li>
            <li class="">查询单号</li>
            <li class="">代理申请管理</li>
            <a href="__URL__/daili_huiyuan"> <li class=""> 我的会员</li></a>
           <!--  <li class="">修改密码</li> -->
        </ul>
    </div>
    <!--左边导航end-->

    <!--右边内容start-->
    <div class="center-right f-l">
        <!--part1-->
        <div class="ageney-one"    style="display:block;" >
            <div class="age_one_o">我的代理信息 <span>(查询已有代理授权信息)</span></div>
            <div class="age_one_t">珍珠美学</div>
            <div class="age_one_r">
                <span >授权号：<?php echo ($grade["grade"]); echo ($user["id"]); ?></span>
                <span>代理级别：<?php echo ($grade["name"]); ?></span>
                <span>状态：正常</span>
                <span class="age-o-copy">查看授权</span>
            </div>
              
            <div class="age_one_pic t-c" >
                <img style="width: 60%;" src="__URL__/shouquan" alt=""/>
            </div>
        </div>
        <!--part2-->
        <div class="ageney-two"    style="display: none;">
            <div class="age_one_o">新加盟代理 <span>(查看或生成下级申请代理的分享链接)</span></div>
            <div class="age_one_t">珍珠美学</div>
            <div class="age_two_r">
                <span class="copy">授权号：<?php echo ($grade["grade"]); echo ($user["id"]); ?></span>
                <span>代理级别：<?php echo ($grade["name"]); ?></span>
                <span>状态：正常</span>
                <span class="age-t-yq age-o-copy">邀请新代理</span>
            </div>
        </div>
        <!--part3-->
        <div class="ageney-three"   style="display: none;"  >
            <div class="age_one_o">查看下级代理 <span>(按品牌查看下级代理信息)</span></div>
            <div class="age_one_t">珍珠美学</div>
            <div class="age_three_r">
                
				<?php if(is_array($xiaji_daili)): foreach($xiaji_daili as $key=>$val): ?><div class="bankuai_two">
                    <div><?php echo M("Wechat_group")->where("id=$key")->getField('name') ?>(<?php echo count($xiaji_daili[$key]);?>位)</div>
					<?php if(is_array($val)): foreach($val as $key=>$v): ?><div class="person_two">
                        <div class="person_name"><?php echo ($v["xingming"]); ?></div>
                        <div class="person_left"><?php if($v[headimgurl] == null): ?><img src="<?php echo RES;?>/img/default_head.jpg" alt=""/><?php else: ?><img src="<?php echo ($v["headimgurl"]); ?>" alt=""/><?php endif; ?></div>
                        <div class="person_right">
                            微信号:<?php echo ($v["weixinhao"]); ?> <br/>
                            手机号:<?php echo ($v["tel"]); ?> <br/>
                            授权号:<?php echo ($v["shouquan_id"]); ?> <br/>
                            上级名称：<?php echo ($user["xingming"]); ?> <br/>
                        </div>
                    </div><?php endforeach; endif; ?>
                    <div style="clear:both;"></div>
                </div><?php endforeach; endif; ?>
            </div>


        </div>
        <!--part4  跳转页-->
        <div class="ageney-four"     style="display: none;" >

        </div>
        <!--part5-->
        <div class="ageney-five"     style="display:none;">
            <div class="age_one_o">发货 <span>(扫描大箱条码或产品二维码发货给下级代理)</span></div>
            <div class="age_five_t t-c"><input type="button" value="点击录入新单"/></div>
            <div class="age_five_r ">状态 <span><img src="/tpl/Pc/default/common/images/dark1.png" alt=""/> 连扫</span></div>
            <div class="age_five_f"><input type="text" placeholder="客户名/微信/手机号"/><input type="button" value="查询"/></div>
            <div class="age_five-v">
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>
                <div>张必荣</div>

            </div>
            <div style="clear:both;"></div>
            <div class="age_five-s">
                <input type="button" class="wancheng" value="完成"/>
                <input type="button" class="saomiao" value="扫描"/>
            </div>
        </div>
        <!--part6-->
        <div class="ageney-six"      style="display:none;">
            <div class="age_one_o">查询单号 <span>(根据出货单号查询发货信息)</span></div>
            <div class="age_six_t"><input type="text" placeholder="请输入出货单号"/><input type="button" value="查询"/></div>
        </div>
        <!--part7-->
        <div class="ageney-seven"     style="display:none;">
             <div class="age_one_o">代理申请管理 <span>(管理正在申请的下级代理)</span></div>
            <?php if(is_array($daili_shenhe)): foreach($daili_shenhe as $key=>$v): ?><div class="age_seven_t" >
                <div>
                    <div class="t-c f-l age_seven_pic">
                        <div>
                            <ul class="thumbnails" id="gallery">
                                <li class="span3">
                                    <a href="<?php echo ($v["headimgurl"]); ?>">
                                        <img src="<?php echo ($v["headimgurl"]); ?>" alt="" />
                                    </a>
                                </li>
                             </ul>
                        </div>
                        头像照片
                    </div>
                    <div class="t-c f-l age_seven_pic">
                        <div>
                            <ul class="thumbnails" id="gallery">
                                <li class="span3">
                                    <a href="<?php echo ($v["card_img"]); ?>">
                                        <img src="<?php echo ($v["card_img"]); ?>" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        手持身份证照片
                    </div>
                    <div class="t-c f-l age_seven_pic">
                        <div><ul class="thumbnails" id="gallery">
                        <li class="span3">
                            <a href="<?php echo ($v["baozheng_img"]); ?>">
                                <img src="<?php echo ($v["baozheng_img"]); ?>" alt="" />
                            </a>
                        </li>
                    </ul>
                        </div>
                        保证金打款凭证
                    </div>
                    <div class="f-l age_seven_detail">
                        <span>授权名：<?php echo ($v["xingming"]); ?></span> <br/>
                        <span>手机号：<?php echo ($v["tel"]); ?></span><br/>
                        <span>微信号：<?php echo ($v["weixinhao"]); ?></span><br/>
                        <span>身份证：<?php echo ($v["card_num"]); ?></span>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="age_seven_yn t-c"><a href="__URL__/daili_shenhe/id/<?php echo ($v["id"]); ?>/status/1"><span class="age_s_yes">同意</span></a> <a href="javascript:void(0);" onclick="jujue_daili(<?php echo ($v["id"]); ?>)"><span class="age_s_no">拒绝</span></a></div>
            </div><?php endforeach; endif; ?>
        </div>

        <!--part8 跳转页-->
        <div class="ageney-eight"    style="display:none;">
        </div>
        <!-- --part9
        <div class="ageney-nine"     style="display:none;">
            <div class="age_one_o">修改密码 <span>(修改登录密码)</span></div>
            <div class="age_nine_t">
                <div>旧密码 <input type="text"  placeholder="旧密码"/></div>
                <div>新密码 <input type="text" placeholder="新密码"/></div>
                <div>确认密码 <input type="text" placeholder="确认新密码"/>  </div>
                <div> <input type="button" value="修改密码"/>  </div>
            </div>
        </div> -->

    </div>
    <!--右边内容end-->
</div>
  <div class="dd_tk_xdl" >
    <div class="dd_xdl t-c">
        <div class="dd_xdl_title">请选择分享下级级别</div>
        <div class="dd_xdl_detail">
            <select name="grades" id="">
            <?php if(is_array($grades)): foreach($grades as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
        <div class="dd_xdl_btn"><span class="xdl_qr">确认</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="xdl_qx">取消</span></div>
		
    </div>
		<div class="dd_xdl_fx" style="display: none;">
        <div class="dd_fx_title">邀请他人(复制链接发送给好友)</div>
       <div>
       <textarea readonly style="resize:none" cols="30" rows="3"  >http://pearlosophy.com/index.php?s=/Pc/Users/daili_reg/yaoqing_id/<?php echo ($user["id"]); ?>/grade/<?php echo ($grades["0"]["id"]); ?></textarea>
       </div>
        <div class="dd_xdl_fx_b t-r">
  <span class="dd_fx_fx ">确认</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="dd_fx_qx">取消</span> </div>
    </div>

</div>  
<!--  弹框 -->
<div class="dd_tk_jl">
    <div class="dd_jl">
        <div class="dd_jl_title">真珠美学 申请列表 <span class="dd_jl_qx f-r">×</span></div>
        <div class="dd_jl_detail">您没有正在分享的真珠美学代理链接或者分享链接都已过期</div>
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



<script  type="text/javascript" src="<?php echo RES;?>/libs/fs_forse.js"></script>
<script type="text/javascript">
    //左侧导航
    $(".center-left>ul>li").click(function(){
        $(".center-left>ul>li").removeClass("centerbgc")
        var index=$(this).index();
        $(".center-right>div").stop(true, true).hide().eq(index).show();
        $(this).addClass("centerbgc");
        
    });

    //版权信息查看
    $(".age-o-copy").click(function(){
        $(".age_one_r").css({"display":"none"});
        $(".age_one_pic").css({"display":"block"})
    });
    $(".age_one_pic").click(function(){
        $(".age_one_r").css({"display":"block"});
        $(".age_one_pic").css({"display":"none"})
    });

    //地址修改
    $(".center-dizhi-title2").click(function(){
        var element=document.getElementById('myimage');
        if (element.src.match("dark1")){
            element.src="tpl/Pc/default/common/img/light1.png";
        }
        else{
            element.src="tpl/Pc/default/common/img/dark1.png";
        }
    });
    var name="<?php echo ($name); ?>";
	if(name=='xindaili'){
		$(".center-left ul li").eq(1).click();
	}else if(name=='xiajidaili'){
		$(".center-left ul li").eq(2).click();
	}else if(name=='fahuo'){
		$(".center-left ul li").eq(4).click();
	}else if(name=='chaxun'){
		$(".center-left ul li").eq(5).click();
	}else if(name=='guanli'){
		$(".center-left ul li").eq(6).click();
	}
	 //新加盟代理
    $(".age-t-yq").click(function(){
        $(".dd_tk_xdl").css({"display":"block"})
    });
    $(".xdl_qx").click(function(){
        $(".dd_tk_xdl").css({"display":"none"})
    });

    $(".age-t-jl").click(function(){
        $(".dd_tk_jl").css({"display":"block"})
    })
    $(".dd_jl_qx").click(function(){
        $(".dd_tk_jl").css({"display":"none"})
    })
    $(".dd_fx_qx").click(function(){
    	$(".dd_tk_xdl").css("display",'none');
    })
    $(".dd_fx_fx").click(function(){
    	alert("复制链接发送给好友！");
    })
    
    //拒绝代理
    //删除购物车
function jujue_daili(id){
	if(confirm("确定拒绝吗?拒绝后对方将成为普通用户")){
		location.href="__URL__/daili_shenhe/status/0/id/"+id;
	}else{
		return false;
	}
}
</script>
<script >
    $(".xdl_qr").click(function(){
        $(".dd_xdl").css("display","none");
        $(".dd_xdl_fx").css("display","block");
    })
	$("select[name=grades]").change(function(){
		var id=$(this).val();
		var url="localhost/index.php?s=/Pc/Users/daili_reg/yaoqing_id/<?php echo ($user["id"]); ?>/grade/"+id;
		$("textarea").text(url);
	})
</script>