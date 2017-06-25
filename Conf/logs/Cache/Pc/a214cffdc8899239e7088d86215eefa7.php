<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>真珠女孩</title>
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
                <a class="navbar-brand" href="#">
                    <img src="/tpl/Pc/default/common/images/header-logo.png" alt="" class="img-responsive">
                </a>
            </div>
            <div>
                <ul class="nav-left">
                    <li class="active"><a href="__GROUP__/Index/index">首页</a></li>
                    <li><a href="__GROUP__/Product/index">品牌故事</a></li>
                    <li class="product-show"><a href="__GROUP__/Product/product_list">真珠产品</a>
                        <div class="product-five">
                            <ul>
                                <li><a href="__GROUP__/Product/product_list/product_id/1"><img src="/tpl/Pc/default/common/img/banner-jhr.png"><br> 晶颜珍珠发酵精华乳</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/2" ><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><img src="/tpl/Pc/default/common/img/banner-jhs.png"><br>晶颜珍珠发酵精华水</a></li>
                                
                                <li><a href="__GROUP__/Product/product_list/product_id/3"><div class="important-pici"><img src="/tpl/Pc/default/common/img/importan-Pro.png"></div><img src="/tpl/Pc/default/common/img/banner-jmr.png"><br>O2洁面乳</a></li>
                              
                                <li><a href="__GROUP__/Product/product_list/product_id/4"><img src="/tpl/Pc/default/common/img/banner-fss.png"><br>50+防晒霜</a></li>
                                <li><a href="__GROUP__/Product/product_list/product_id/5"><img src="/tpl/Pc/default/common/img/banner-gzs.png"><br>滚珠水光BB</a></li>
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

<div class="content-center ">
    <div class="content-center-t ">WELCOME<span><?php echo cookie('zhenzhu_tel')?></span></span></div>
    <div class="center-right-order f-l">
        <div class="center-right-order-name">商品评价</div>
        <div class="border1"></div>
        <!--评价商品 begin-->
        <div class="rated-content">
            <div class="rated-content-left">
                <div><img src="<?php echo ($pinglun[0][pic]); ?>" alt="" class="img-responsive"></div>
                <div class="rated-content-left-text t-c"><?php echo ($pinglun[0][productName]); ?></div>
            </div>
            <div class="rated-content-right">
                <div class="rated-content-right-wrap">
						<?php if(is_array($pinglun)): foreach($pinglun as $key=>$v): ?><div class="rated-list-box">
                        <div class="rated-list-one">
                            <span class="rated-name f-l" style="line-height: 1.5;"><?php echo ($v["name"]); ?></span>
                               <div class="aa f-l" style="margin-left: 1%;">
                                   <input  type="hidden"   class="xing" value="<?php echo ($v["all"]); ?>">
                                   <img  class="xing1" src="/tpl/Pc/default/common/img/xing2.png">
                                   <img  class="xing2" src="/tpl/Pc/default/common/img/xing2.png">
                                   <img  class="xing3" src="/tpl/Pc/default/common/img/xing2.png">
                                   <img  class="xing4" src="/tpl/Pc/default/common/img/xing2.png">
                                   <img  class="xing5" src="/tpl/Pc/default/common/img/xing2.png">
                               </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <span  class="rated-time" style="line-height: 2;"><?php echo date('Y-m-d H:i:s',$v[createtime]);?></span>
                        </div>
                        <div class="rated-list-two">拉搜到马上分解为四大四大会计师拉快结束了阿克江收到啦打进来阿拉斯加大楼圣诞节拉数据大拉搜到马上分解为四大四大会计师拉快结束了阿克江收到啦打进来阿拉斯加大楼圣诞节拉数据大拉搜到马上分解为四大四大会计师拉快结束了阿克江收到啦打进来阿拉斯加大楼圣诞节拉数据大</div>
                    </div><?php endforeach; endif; ?>

                </div>

            </div>
        </div>

        <!--评价商品 end-->
    </div>
</div>
<div class="product-f-pic5">
        <div >
            <ul>
                <li class="product-f-pic5li" ><a href="#">首页</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="#">品牌故事</a></li>
                <li><a href="#">品牌理念</a></li>
                <li><a href="#">产品特点</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="#">产品展示</a></li>
                <li><a href="#">洁面乳</a></li>
                <li><a href="#">防晒霜</a></li>
                <li><a href="#">真珠直播</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="#">灵感源泉</a></li>
                <li><a href="#">天然之美</a></li>
                <li><a href="#">东方之美</a></li>
                <li><a href="#">真珠美学</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="#">真珠女孩</a></li>
                <li><a href="#">我们是谁</a></li>
                <li><a href="#">每日一星</a></li>
                <li><a href="#">互动论坛</a></li>
            </ul>
            <ul>
                <li  class="product-f-pic5li"><a href="#">关于我们</a></li>
                <li><a href="#">创始团队</a></li>
                <li><a href="#">常见问题</a></li>
                <li><a href="#">经销代理</a></li>
            </ul>
        </div>
        <div class="product-f-copy t-c">
            &copy;2016 All rights reserved.&nbsp;上海梵蓉网络科技有限公司&nbsp; 沪ICP备16043339号
        </div></div>
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
<script>
    $(document).ready(function() {
        $(".rated-name").each(function(){
            var text = $(this).html();
            var text_length = text.length;
            var name_first=text.substr(0,3);
            var name_last=text.substr(text_length-2,text_length);
            $(this).html(name_first+"**"+name_last);
        })
    });
    $(function(){
        $(".xing").each(function() {
            var xing = $(this).val();
            var index=$(this).parent(".aa").children("img");
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