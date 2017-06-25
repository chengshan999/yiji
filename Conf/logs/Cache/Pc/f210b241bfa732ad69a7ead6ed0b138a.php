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
    <script src="/tpl/Pc/default/common/js/data.js"></script>
    <style>
.file {
    position: relative;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    border-color: #78C3F3;
    text-decoration: none;
}
.my_huiyuan_ej li{padding:3% 0 !important ;margin-top: 3% !important;font-size: 14px !important;}
.centerbgc_a{
    color:white !important ;background: #f9c8ab !important;
}
.agency_my{color:white;background:#f99abf;padding:5% 0; }
.centerbgc_b{
    color:white ;background:#000;
}
a,a:hover{ text-decoration:none; color:#333}
</style>
<div class="content-center" style="margin-bottom:10%" >

    <div class="content-center-t ">WELCOME<span><?php echo urldecode(cookie('zhenzhu_tel'))?></span></div>
    <!--左边导航start-->
    <div class="center-left f-l">
        <ul>
            <li class="">我的代理信息</li>
            <li class=""><a href="__URL__/daili_center/name/xindaili">新代理加盟</a></li>
            <li class=""><a href="__URL__/daili_center/name/xiajidaili">查看下级代理</a></li>
            <li class=""><div class="agency_my">我的订单</div>
                <ul class="my_huiyuan_ej" >
                    <li class=""><a href="__URL__/daili_order/">我要订货</a></li>
                    <li class=""><a href="__URL__/daili_order/name/my_price">我的订货价</a></li>
                    <li class=""><a href="__URL__/daili_order/name/kucun">我的库存</a></li>
                    <li class="centerbgc_a">我的订单</li>
                    <li class=""><a href="__URL__/xiaji_daili_order">下级客户订单</a></li>
                    <li class=""><a href="__URL__/daili_order/name/xiaji_price">下级代理价</a></li>
                    <li class=""><a href="__URL__/daili_order/name/xiaji_kucun">下级代理库存</a></li>
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
        <!--我的订单start-->
        <div class="center-dingdan" >
            <div class="center-dingdan-title">
                <div class="t-c centerbgc1">全部订单</div>
                <div class="t-c" >待付款</div>
                <div class="t-c">待发货</div>
                <div class="t-c">待收货</div>
                <div class="t-c">待评价</div>
                <div class="t-c">积分商城订单</div>
            </div>
            <div class="center-dingdan-content">
                <div class="center-dingdan-quanbu">
                  <?php if(is_array($orders)): foreach($orders as $key=>$v): ?><div class="center-dingdan-box">
                        <div class="center-dingdan-name">
                            <!--<img src="/tpl/Pc/default/common/img/nochoice.png">-->
                            <div class="f-l" style="width: 10%"><?php echo date('Y.m.d',$v[createtime]);?></div>
                            <div class="f-l" style="width: 80%;">订单号：<?php echo ($v["orderid"]); ?> </div>
                            <div class="f-l" style="width: 6%;"><?php echo ($v["status"]); ?></div>
                            <div class="f-l" style="width: 4%;"><img onclick="del_order(<?php echo ($v["id"]); ?>)" class="rubbish-btn" src="/tpl/Pc/default/common/img/rubbish.png"></div>
                        </div>
                        <?php if(is_array($v[product_info])): foreach($v[product_info] as $key=>$val): ?><div class="center-dingdan-neirong">
                            <div  class="center-d-pic f-l "><a href="#"><img src="<?php echo ($val["pic"]); ?>"></a></div>
                            <div  class="center-d-name f-l "><a href="#"><span><?php echo ($val["productName"]); ?></span><br><span class="center-d-name1"><?php echo ($canshu["color"]); ?> &nbsp; <?php echo ($canshu["guige"]); ?></span></a></div>
                            <div  class="center-d-price f-l t-c">&yen;<?php echo ($val["price"]); ?></div>
                            <div  class="center-d-num f-l t-c"><?php echo ($val["number"]); ?></div>
                            <div  class="center-d-total f-l t-c"><span>&yen;<?php echo $val[price]*$val[number]+$val[kuaidi_price];?></span><br><span class="center-d-name1">(含运费&yen;<?php echo ($val["kuaidi_price"]); ?>.00)</span></div>
                            <div  class="center-d-btn f-l t-c ">
                            <?php if(($v[status] == '待付款') AND ($v[zhifu_type] == '线下支付') AND ($v[xianxia_status] == 0) AND (count($v[product_info])-1 == $key) ): ?><form action="__URL__/change_xianxiazhifu_status/order_id/<?php echo ($v[id]); ?>/type/daili" method="post" enctype="multipart/form-data">上传支付凭证<br /> <a href="javascript:;" class="file"><span >选择文件</span><input type="file" name="zhifu_pic" id=""></a><br /><input type="submit" value="确定" /></form>
                            <?php elseif(($v[status] == '待付款') AND ($v[zhifu_type] == '线下支付') AND ($v[xianxia_status] == 2) AND (count($v[product_info])-1 == $key) ): ?>
                            <form action="__URL__/change_xianxiazhifu_status/order_id/<?php echo ($v[id]); ?>/type/daili" method="post" enctype="multipart/form-data">凭证不合要求，请重传<br /> <a href="javascript:;" class="file"><span >选择文件</span><input type="file" name="zhifu_pic" id=""></a><br /><input type="submit" value="确定" /></form>
                            <?php elseif(($v[status] == '待付款') AND ($v[zhifu_type] == '线下支付') AND ($v[xianxia_status] == 1) AND (count($v[product_info])-1 == $key) ): ?><a href="javascript:void(0);" class="f-c1">付款审核中</a>
                            <?php elseif(($v[status] == '待付款') AND ($v[zhifu_type] == '线下支付') AND ($v[xianxia_status] == 3) AND (count($v[product_info])-1 == $key) ): ?><a href="javascript:void(0);" class="f-c1">完成</a>
                            <?php elseif(($v[status] == '待付款') AND (count($v[product_info])-1 == $key) ): ?><a href="<?php echo U('Product/zhifu',array('order_id'=>$v[id]));?>" class="f-c1">立即付款</a>
                            <?php elseif(($v[status] == '待发货') AND (count($v[product_info])-1 == $key) ): ?><a href="javascript:void(0);" onclick="tixingfahuo(<?php echo ($v["id"]); ?>)" class="f-c1">提醒卖家发货</a>
                            <?php elseif(($v[status] == '待收货') AND (count($v[product_info])-1 == $key) ): ?>
                            
                             <div class="user-dingdana"><a href="javascript:void(0);" class="f-c1"> 查看物流</a></div>
                                <br/>
                                <div class="user-dingdanc" style="display: none;">
                                 <?php if(($v[ueq] == 1) AND ($v[kuaidi_id] != null)): ?><div class="user-dingdanw" style=" cursor:pointer;"  onclick="ueq(<?php echo ($v["id"]); ?>)">UEQ(跨境)</div>
                                    <div class="user-dingdanw" style=" cursor:pointer;"  onclick="putong(<?php echo ($v["id"]); ?>)"><?php echo ($v["kuaidi_name"]); ?></div>
                                    <?php elseif(($v[ueq] == 0) AND ($v[kuaidi_id] != null)): ?>
                                    <div class="user-dingdanz" style=" cursor:pointer;"  onclick="putong(<?php echo ($v["id"]); ?>)"><?php echo ($v["kuaidi_name"]); ?></div>
                                    <?php elseif(($v[ueq] == 1) AND ($v[kuaidi_id] == null)): ?>
                                    <div class="user-dingdanz" style=" cursor:pointer;"  onclick="ueq(<?php echo ($v["id"]); ?>)"><input type="hidden" name="ueq_id" value="<?php echo ($v["ueq_id"]); ?>" />UEQ(跨境)</div><?php endif; ?>
                                </div>
                            
                            <?php elseif($v[status] == '待评价'): if($val[pingjia] == 0): ?><a href="__URL__/pingjia/order_id/<?php echo ($v["id"]); ?>/product_id/<?php echo ($val["product_id"]); ?>" class="f-c1">评价</a><?php else: ?><a href="javascript:void(0)" class="f-c1">已评价</a><?php endif; endif; ?>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </div><?php endforeach; endif; ?>
                </div>
                <div class="center-dingdan-daifu" style="display: none;">
                    <?php if(is_array($daifukuan)): foreach($daifukuan as $key=>$v): ?><div class="center-dingdan-box">
                        <div class="center-dingdan-name">
                            <!--<img src="/tpl/Pc/default/common/img/nochoice.png">-->
                            <div class="f-l" style="width: 10%"><?php echo date('Y.m.d',$v[createtime]);?></div>
                            <div class="f-l" style="width: 80%;">订单号：<?php echo ($v["orderid"]); ?> </div>
                            <div class="f-l" style="width: 6%;"><?php echo ($v["status"]); ?></div>
                            <div class="f-l" style="width: 4%;"><img onclick="del_order(<?php echo ($v["id"]); ?>)" class="rubbish-btn" src="/tpl/Pc/default/common/img/rubbish.png"></div>
                        </div>
                        <?php if(is_array($v[product_info])): foreach($v[product_info] as $key=>$val): ?><div class="center-dingdan-neirong">
                            <div  class="center-d-pic f-l "><a href="#"><img src="<?php echo ($val["pic"]); ?>"></a></div>
                            <div  class="center-d-name f-l "><a href="#"><span><?php echo ($val["productName"]); ?></span><br><span class="center-d-name1"><?php echo ($canshu["color"]); ?> &nbsp; <?php echo ($canshu["guige"]); ?></span></a></div>
                            <div  class="center-d-price f-l t-c">&yen;<?php echo ($val["price"]); ?></div>
                            <div  class="center-d-num f-l t-c"><?php echo ($val["number"]); ?></div>
                            <div  class="center-d-total f-l t-c"><span>&yen;<?php echo $val[price]*$val[number]+$val[kuaidi_price];?></span><br><span class="center-d-name1">(含运费&yen;<?php echo ($val["kuaidi_price"]); ?>.00)</span></div>
                            <?php if(($v[zhifu_type] == '线下支付') AND ($v[xianxia_status] == 0) AND (count($v[product_info])-1 == $key)): ?><div  class="center-d-btn f-l t-c ">
                            <form action="__URL__/change_xianxiazhifu_status/order_id/<?php echo ($v[id]); ?>/type/daili" method="post" enctype="multipart/form-data">上传支付凭证<br /> <a href="javascript:;" class="file"><span >选择文件</span><input type="file" name="zhifu_pic" id=""></a><br /><input type="submit" value="确定" /></form>
                            <?php elseif(($v[zhifu_type] == '线下支付') AND ($v[xianxia_status] == 2) AND (count($v[product_info])-1 == $key)): ?>
                            <div  class="center-d-btn f-l t-c ">
                            <form action="__URL__/change_xianxiazhifu_status/order_id/<?php echo ($v[id]); ?>/type/daili" method="post" enctype="multipart/form-data">凭证不合要求，请重传<br /> <a href="javascript:;" class="file"><span >选择文件</span><input type="file" name="zhifu_pic" id=""></a><br /><input type="submit" value="确定" /></form>
                            <?php elseif(($v[zhifu_type] == '线下支付') AND ($v[xianxia_status] == 1) AND (count($v[product_info])-1 == $key) ): ?>
                            <div  class="center-d-btn f-l t-c ">
                            <a href="javascript:void(0);" class="f-c1">付款审核中</a>
                            <?php else: ?>
                            <div  class="center-d-btn f-l t-c ">
                            <a href="<?php echo U('Product/zhifu',array('order_id'=>$v[id]));?>" class="f-c1">立即付款</a><?php endif; ?>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </div><?php endforeach; endif; ?>
                </div>
                <div class="center-dingdan-finish" style="display: none;">
                    <?php if(is_array($daifahuo)): foreach($daifahuo as $key=>$v): ?><div class="center-dingdan-box">
                        <div class="center-dingdan-name">
                            <!--<img src="/tpl/Pc/default/common/img/nochoice.png">-->
                            <div class="f-l" style="width: 10%"><?php echo date('Y.m.d',$v[createtime]);?></div>
                            <div class="f-l" style="width: 80%;">订单号：<?php echo ($v["orderid"]); ?> </div>
                            <div class="f-l" style="width: 6%;"><?php echo ($v["status"]); ?></div>
                            <div class="f-l" style="width: 4%;"><img onclick="del_order(<?php echo ($v["id"]); ?>)" class="rubbish-btn" src="/tpl/Pc/default/common/img/rubbish.png"></div>
                        </div>
                        <?php if(is_array($v[product_info])): foreach($v[product_info] as $key=>$val): ?><div class="center-dingdan-neirong">
                            <div  class="center-d-pic f-l "><a href="#"><img src="<?php echo ($val["pic"]); ?>"></a></div>
                            <div  class="center-d-name f-l "><a href="#"><span><?php echo ($val["productName"]); ?></span><br><span class="center-d-name1"><?php echo ($canshu["color"]); ?> &nbsp; <?php echo ($canshu["guige"]); ?></span></a></div>
                            <div  class="center-d-price f-l t-c">&yen;<?php echo ($val["price"]); ?></div>
                            <div  class="center-d-num f-l t-c"><?php echo ($val["number"]); ?></div>
							<div  class="center-d-total f-l t-c"><span>&yen;<?php echo $val[price]*$val[number]+$val[kuaidi_price];?></span><br><span class="center-d-name1">(含运费&yen;<?php echo ($val["kuaidi_price"]); ?>.00)</span></div>
                            <?php if(count($v[product_info])-1 == $key): ?><div  class="center-d-btn f-l t-c "><a href="javascript:void(0);" onclick="tixingfahuo(<?php echo ($v["id"]); ?>)" class="f-c1">提醒卖家发货</a></div><?php endif; ?>
                        </div><?php endforeach; endif; ?>
                    </div><?php endforeach; endif; ?>
                </div>
                <div class="center-dingdan-tuihuan" style="display: none;">
                    <?php if(is_array($daishouhuo)): foreach($daishouhuo as $key=>$v): ?><div class="center-dingdan-box">
                        <div class="center-dingdan-name">
                            <!--<img src="/tpl/Pc/default/common/img/nochoice.png">-->
                            <div class="f-l" style="width: 10%"><?php echo date('Y.m.d',$v[createtime]);?></div>
                            <div class="f-l" style="width: 80%;">订单号：<?php echo ($v["orderid"]); ?> </div>
                            <div class="f-l" style="width: 6%;"><?php echo ($v["status"]); ?></div>
                            <div class="f-l" style="width: 4%;"><img onclick="del_order(<?php echo ($v["id"]); ?>)" class="rubbish-btn" src="/tpl/Pc/default/common/img/rubbish.png"></div>
                        </div>
                        <?php if(is_array($v[product_info])): foreach($v[product_info] as $key=>$val): ?><div class="center-dingdan-neirong">
                            <div  class="center-d-pic f-l "><a href="#"><img src="<?php echo ($val["pic"]); ?>"></a></div>
                            <div  class="center-d-name f-l "><a href="#"><span><?php echo ($val["productName"]); ?></span><br><span class="center-d-name1"><?php echo ($canshu["color"]); ?> &nbsp; <?php echo ($canshu["guige"]); ?></span></a></div>
                            <div  class="center-d-price f-l t-c">&yen;<?php echo ($val["price"]); ?></div>
                            <div  class="center-d-num f-l t-c"><?php echo ($val["number"]); ?></div>
                            <div  class="center-d-total f-l t-c"><span>&yen;<?php echo $val[price]*$val[number]+$val[kuaidi_price];?></span><br><span class="center-d-name1">(含运费&yen;<?php echo ($val["kuaidi_price"]); ?>.00)</span></div>
                            <?php if(count($v[product_info])-1 == $key): ?><div  class="center-d-btn f-l t-c ">
                            <div class="user-dingdana"><a href="javascript:void(0);" class="f-c1"> 查看物流</a></div>
                                <br/>
                                <div class="user-dingdanc" style="display: none;">
                                <?php if(($v[ueq] == 1) AND ($v[kuaidi_id] != null)): ?><div class="user-dingdanw" style=" cursor:pointer;" onclick="ueq(<?php echo ($v["id"]); ?>)">UEQ(跨境)</div>
                                    <div class="user-dingdanw" style=" cursor:pointer;"  onclick="putong(<?php echo ($v["id"]); ?>)"><?php echo ($v["kuaidi_name"]); ?></div>
                                    <?php elseif(($v[ueq] == 0) AND ($v[kuaidi_id] != null)): ?>
                                    <div class="user-dingdanz" style=" cursor:pointer;"  onclick="putong(<?php echo ($v["id"]); ?>)"><?php echo ($v["kuaidi_name"]); ?></div>
                                    <?php elseif(($v[ueq] == 1) AND ($v[kuaidi_id] == null)): ?>
                                    <div class="user-dingdanz" style=" cursor:pointer;" onclick="ueq(<?php echo ($v["id"]); ?>)">UEQ(跨境)</div><?php endif; ?>
                                </div>
                            </div><?php endif; ?>
                        </div><?php endforeach; endif; ?>
                    </div><?php endforeach; endif; ?>
                </div>
                <div class="center-dingdan-pingjia" style="display: none;">
                    <?php if(is_array($daipingjia)): foreach($daipingjia as $key=>$v): ?><div class="center-dingdan-box">
                        <div class="center-dingdan-name">
                            <!--<img src="/tpl/Pc/default/common/img/nochoice.png">-->
                            <div class="f-l" style="width: 10%"><?php echo date('Y.m.d',$v[createtime]);?></div>
                            <div class="f-l" style="width: 80%;">订单号：<?php echo ($v["orderid"]); ?> </div>
                            <div class="f-l" style="width: 6%;"><?php echo ($v["status"]); ?></div>
                            <div class="f-l" style="width: 4%;"><img onclick="del_order(<?php echo ($v["id"]); ?>)" class="rubbish-btn" src="/tpl/Pc/default/common/img/rubbish.png"></div>
                        </div>
                        <?php if(is_array($v[product_info])): foreach($v[product_info] as $key=>$val): ?><div class="center-dingdan-neirong">
                            <div  class="center-d-pic f-l "><a href="#"><img src="<?php echo ($val["pic"]); ?>"></a></div>
                            <div  class="center-d-name f-l "><a href="#"><span><?php echo ($val["productName"]); ?></span><br><span class="center-d-name1"><?php echo ($canshu["color"]); ?> &nbsp; <?php echo ($canshu["guige"]); ?></span></a></div>
                            <div  class="center-d-price f-l t-c">&yen;<?php echo ($val["price"]); ?></div>
                            <div  class="center-d-num f-l t-c"><?php echo ($val["number"]); ?></div>
                            <div  class="center-d-total f-l t-c"><span>&yen;<?php echo $val[price]*$val[number]+$val[kuaidi_price];?></span><br><span class="center-d-name1">(含运费&yen;<?php echo ($val["kuaidi_price"]); ?>.00)</span></div>
                            <div  class="center-d-btn f-l t-c "><?php if($val[pingjia] == 0): ?><a href="__URL__/pingjia/order_id/<?php echo ($v["id"]); ?>/product_id/<?php echo ($val["product_id"]); ?>" class="f-c1">评价</a><?php else: ?><a href="javascript:void(0)" class="f-c1">已评价</a><?php endif; ?>
                        </div><?php endforeach; endif; ?>
                    </div><?php endforeach; endif; ?>

                </div>
                <div class="center-dingdan-jifen" style="display: none;">
                    <?php if(is_array($jifen)): foreach($jifen as $key=>$v): ?><div class="center-dingdan-box">
                        <div class="center-dingdan-name">
                            <!--<img src="/tpl/Pc/default/common/img/nochoice.png">-->
                            <div class="f-l" style="width: 10%"><?php echo date('Y.m.d',$v[createtime]);?></div>
                            <div class="f-l" style="width: 80%;">订单号：<?php echo ($v["orderid"]); ?> </div>
                            <div class="f-l" style="width: 6%;">
                            <?php if($v["status"] == 1): ?>待发货
                            <?php elseif($v["status"] == 2): ?>
                            待收货
                            <?php elseif($v["status"] == 3): ?>
                            完成
                            <?php elseif($v["status"] == 4): ?>
                            无货已退回积分<?php endif; ?>
                            </div>
                            <div class="f-l" style="width: 4%;"><img onclick="del_order(<?php echo ($v["id"]); ?>)" class="rubbish-btn" src="/tpl/Pc/default/common/img/rubbish.png"></div>
                        </div>
                        <div class="center-dingdan-neirong">
                            <div  class="center-d-pic f-l "><a href="#"><img src="<?php echo ($v["pic"]); ?>"></a></div>
                            <div  class="center-d-name f-l "><a href="#"><span><?php echo ($v["productName"]); ?></span><br><span class="center-d-name1"><?php echo ($canshu["color"]); ?> &nbsp; <?php echo ($canshu["guige"]); ?></span></a></div>
                            <div  class="center-d-price f-l t-c"><?php echo ($v["point"]); ?>积分</div>
                            <div  class="center-d-num f-l t-c">1</div>
                            <div  class="center-d-total f-l t-c"><span><?php echo ($v["point"]); ?>积分</span><br><span class="center-d-name1">(含运费&yen;0.00)</span></div>
                            <div  class="center-d-btn f-l t-c ">
                            <?php if($v["status"] == 1): ?><a href="javascript:void(0)" class="f-c1">提醒卖家发货</a>
                            <?php elseif($v["status"] == 2): ?>
                           <div class="user-dingdana"><a href="javascript:void(0);" class="f-c1"> 查看物流</a></div>
                                <br/>
                                <div class="user-dingdanc" style="display: none;">
                                
                                <div class="user-dingdanz" style=" cursor:pointer;"  onclick="putong_jifen(<?php echo ($v["id"]); ?>)"><?php echo ($v["kuaidi_name"]); ?></div>
                                    
                                </div>
                            <?php elseif($v["status"] == 3): ?>
                           <a href="javascript:void(0)" class="f-c1">完成</a>
                            <?php elseif($v["status"] == 4): ?>
                            <a href="javascript:void(0)" class="f-c1">暂无货物，已返回积分</a><?php endif; ?>
                            </div>
                        </div>
                    </div><?php endforeach; endif; ?>

                </div>
            </div>

        </div>
        <!--我的订单end-->

    </div>
    <!--右边内容end-->
</div>
 <div class="dd-tk"  >
        <div class="dd-xq">
            <div class="dd-cpname">快递名称：<o class='product_name'></o></div>
            <div class="dd-kdname">快递单号：<o class='product_id'></o></div>
            <div class="dd-kd" style="overflow-y:scroll;height:86%;">
                
                <div id="fahuo" >
                    <div class="f-l firstone" style="width: 10%;padding-left: 3px;"><img  src="/tpl/Pc/default/common/img/kdzt-1.png" alt=""/></div>
                    <div class="f-l" style="width: 90%;">卖家已通知物流公司揽件</div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div class="dd-btn t-c"><button>好的，我知道了！</button></div>
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
    //左侧导航
    $(function() {
        function sx() {
            var $pic = $(".center-d-pic").height();
            $(".center-d-name").css("height", $pic);
            $(".center-d-price").css("height", $pic);
            $(".center-d-num").css("height", $pic);
            $(".center-d-total").css("height", $pic);
            $(".center-d-btn").css("height", $pic);
        }
        var time = setInterval(sx, 30);
    });
    //删除订单
    function del_order(id){
    	if(confirm("确定删除该订单么?")){
    		$.ajax({
    			url:"<?php echo U('Users/del_order');?>",
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
    
    //订单切换
    $(".center-dingdan-title div").click(function(){
        $(".center-dingdan-title div").removeClass("centerbgc1")
        var index=$(this).index();
        $(".center-dingdan-content>div").stop(true, true).hide().eq(index).show();
        $(this).addClass("centerbgc1");
    });
    
    
</script>
<script>
	function tixingfahuo(o){
		var order_id=o;
		$.ajax({
    		url:"<?php echo U('Users/tixing');?>",
    		data:{order_id:order_id},
    		type:"POST",
    		async:false,
    		success:function(data){
        		alert("我们已经收到了提醒，将会尽快处理您的订单！");
        		return false;
    		}
    	})
	}
	
    function ueq(o){
    	$(".dd-kd").empty();
    	$(".dd-kd").append('<div id="fahuo" ><div class="f-l firstone" style="width: 10%;padding-left: 3px;"><img  src="/tpl/Pc/default/common/img/kdzt-1.png" alt=""/></div><div class="f-l" style="width: 90%;">卖家已通知物流公司揽件</div><div style="clear:both;"></div></div>');
        	var id = o;
        	var ueq= 1;
        	var kuaidi_name='UEQ';
        	$.ajax({
        		url:"<?php echo U('Users/query_kuaidi_id');?>",
        		data:{id:id,ueq:ueq},
        		type:"POST",
        		async:false,
        		success:function(data){
            		$(".product_id").text(data);
        		}
        	})
        	$.ajax({
        		url:"<?php echo U('Users/query_kuaidi');?>",
        		data:{id:id,ueq:ueq},
        		dataType:"json",
        		type:"POST",
        		async:false,
        		success:function(data){
        			$.each(data,function(name,v) {
        				$("#fahuo").before('<div><div class="f-l firstone" style="width: 10%;"><img  src="/tpl/Pc/default/common/img/kdzt-2.png" alt=""/></div><div class="f-l" style="width: 90%;">'+v.context+'<br />'+v.time+'</div><div style="clear:both;"></div></div>');
        			})
        			$(".dd-kd div").first().children(".firstone").children("img").attr('src','/tpl/Pc/default/common/img/kdzt-3.png');
            		$(".dd-kd div").first().children(".firsttwo").css({"color":"#f499c0"})
            		$(".product_name").text(kuaidi_name);
            		$(".dd-tk").css({"display":"block"});
        		}
        		
        	})
    }
    function putong(o){
    	$(".dd-kd").empty();
    	$(".dd-kd").append('<div id="fahuo" ><div class="f-l firstone" style="width: 10%;padding-left: 3px;"><img  src="/tpl/Pc/default/common/img/kdzt-1.png" alt=""/></div><div class="f-l" style="width: 90%;">卖家已通知物流公司揽件</div><div style="clear:both;"></div></div>');
        	var id = o;
        	$.ajax({
        		url:"<?php echo U('Users/query_kuaidi_id');?>",
        		data:{id:id},
        		type:"POST",
        		async:false,
        		dataType:"json",
        		success:function(data){
            		$(".product_id").text(data.kuaidi_id);
            		$(".product_name").text(data.kuaidi_name);
        		}
        	})
        	$.ajax({
        		url:"<?php echo U('Users/query_kuaidi');?>",
        		data:{id:id},
        		dataType:"json",
        		type:"POST",
        		async:false,
        		success:function(data){
        			$.each(data,function(name,v) {
        				$("#fahuo").before('<div><div class="f-l firstone" style="width: 10%;"><img  src="/tpl/Pc/default/common/img/kdzt-2.png" alt=""/></div><div class="f-l" style="width: 90%;">'+v.context+'<br />'+v.time+'</div><div style="clear:both;"></div></div>');
        			})
        			$(".dd-kd div").first().children(".firstone").children("img").attr('src','/tpl/Pc/default/common/img/kdzt-3.png');
            		$(".dd-kd div").first().children(".firsttwo").css({"color":"#f499c0"})
            		$(".dd-tk").css({"display":"block"});
        		}
        		
        	})
    }
    function putong_jifen(o){
    	$(".dd-kd").empty();
    	$(".dd-kd").append('<div id="fahuo" ><div class="f-l firstone" style="width: 10%;padding-left: 3px;"><img  src="/tpl/Pc/default/common/img/kdzt-1.png" alt=""/></div><div class="f-l" style="width: 90%;">卖家已通知物流公司揽件</div><div style="clear:both;"></div></div>');
        	var id = o;
        	$.ajax({
        		url:"<?php echo U('Users/query_jifen_kuaidi_id');?>",
        		data:{id:id},
        		type:"POST",
        		async:false,
        		dataType:"json",
        		success:function(data){
            		$(".product_id").text(data.kuaidi_id);
            		$(".product_name").text(data.kuaidi_name);
        		}
        	})
        	$.ajax({
        		url:"<?php echo U('Users/query_kuaidi');?>",
        		data:{id:id,jifen:1},
        		dataType:"json",
        		type:"POST",
        		async:false,
        		success:function(data){
        			$.each(data,function(name,v) {
        				$("#fahuo").before('<div><div class="f-l firstone" style="width: 10%;"><img  src="/tpl/Pc/default/common/img/kdzt-2.png" alt=""/></div><div class="f-l" style="width: 90%;">'+v.context+'<br />'+v.time+'</div><div style="clear:both;"></div></div>');
        			})
        			$(".dd-kd div").first().children(".firstone").children("img").attr('src','/tpl/Pc/default/common/img/kdzt-3.png');
            		$(".dd-kd div").first().children(".firsttwo").css({"color":"#f499c0"})
            		$(".dd-tk").css({"display":"block"});
        		}
        		
        	})
    }
</script>
<script>
$(function() {
    function sx() {
        var height=$(document).height();
        var height_s=window.screen.height;
        $(".dd-tk").css("height", height);
        $(".dd-xq").css("height", height_s*0.6);
    }
    var time = setInterval(sx, 30);
});
$(".dd-btn").click(function(){
	$(".dd-tk").css({"display":"none"});
})
$(".center-d-btn").click(function(){
    $(this).find(".user-dingdanc").css({"display":"block"})
    });
    
    //上传显示文件名
$(".file").on("change","input[type='file']",function(){
    var filePath=$(this).val();
    if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1){
        $(".fileerrorTip").html("").hide();
        var arr=filePath.split('\\');
        var fileName=arr[arr.length-1];
        $(this).prev().text(fileName);
    }else{
        $(".showFileName").html("");
        $(this).prev().text("您未上传文件，或者您上传文件类型有误！");
        return false ;
    }
})
</script>