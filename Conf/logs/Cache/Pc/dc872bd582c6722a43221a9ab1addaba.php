<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>福盈商学院</title>
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/img/logo.ico" />
    <link href="<?php echo RES;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/banner.css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/index.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/index.js"></script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?b2e24c05d6aa9e7336efd2718a050515";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    
</head>
<body>
<!-- header start-->
<div class="head"  >
    <div class="head_a">
        <div>
            <div class="head_a_left f-l "><img src="<?php echo RES;?>/img/logo_top.png" alt=""/></div>
            <div class="head_b_center f-l">

            </div>
            <div class="head_a_right f-l">
                <?php if(!cookie('uid')){?>
                <ul>
                    <li><a href="__GROUP__/Users/login">登录</a> <a href="javascript:void(0);" style="cursor: default;">/</a> <a href="__GROUP__/Users/reg">注册</a></li>
                    <li class="head_a_right_li"><input type="text"/>
                        <div><img src="<?php echo RES;?>/img/search.png" alt=""/></div>
                    </li>
                </ul>
                <?php }else{?>
                  <ul>
                      <li><a href="javascript:void(0);" style="cursor: default;">欢迎您，<?php echo urldecode(cookie('tel'));?></a></li>
                      <li><a href=""><div class="center_no">消息 <span>3</span></div></a></li>
                      <li><a href="__GROUP__/Users/center">个人中心</a></li>
                      <li><a href="__GROUP__/Users/tuichu" style="color:red;">退出</a></li>
                  </ul>
                <?php }?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="head_b">
        <div>
            <div class="head_b_left f-l">
                <ul class="f-r">
                    <li>
                        <a href="__GROUP__/Index/about" >福盈商学院</a>
                        <div class="head_b_l_d">
                            <a href="__GROUP__/Index/about"  >关于学院</a>
                            <a href="__GROUP__/Index/about/select/1"  >关于福盈</a>

                        </div>
                    </li>
                    <li>
                        <a href="__GROUP__/Product/kecheng">课程</a>
                        <div class="head_b_l_d">
                            <a href="__GROUP__/Product/kecheng"  >专业课程</a>
                            <a href="__GROUP__/Product/kecheng/select/1"  >定制课程</a>

                        </div>
                    </li>
                    <li>
                        <a href="__GROUP__/Index/professors">讲师</a>
                        <div class="head_b_l_d">
                            <a href="__GROUP__/Index/professors"  >院内讲师</a>
                            <a href="__GROUP__/Index/professors/select/1"  >特邀讲师</a>
                        </div>
                    </li>
                    <li>
                        <a href="__GROUP__/Index/active">活动</a>
                        <div class="head_b_l_d">
                            <a href="__GROUP__/Index/active"  >人气讲座</a>
                            <a href="__GROUP__/Index/active/select/1"  >投资交流会</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="head_b_center f-l"> <a href="__GROUP__/Index/index"> <img src="<?php echo RES;?>/img/logo2.png" alt=""/></a>
            </div>
            <div class="head_b_right f-l">
                <ul>
                    <li>
                        <a href="__GROUP__/Index/options">观点</a>
                        <div class="head_b_l_d">
                            <a href="__GROUP__/Index/options"  >周报</a>
                            <a href="__GROUP__/Index/options/select/1"  >行情报告</a>
                            <a href="__GROUP__/Index/options/select/2"  >焦点分析</a>
                            <a href="__GROUP__/Index/options/select/3"  >精选文章</a>
                            <a href="__GROUP__/Index/options/select/4"  >学员报告</a>
                        </div>
                    </li>
                    <li>
                        <a href="__GROUP__/Index/matches">比赛</a>
                        <div class="head_b_l_d">
                            <a href="__GROUP__/Index/matches"  >院内比赛</a>
                            <a href="__GROUP__/Index/matches/select/1"  >实盘比赛</a>
                            <a href="__GROUP__/Index/matches/select/2"  >课程模拟</a>
                        </div>
                    </li>
                    <li class="head_b_left_tl">
                        <a href="javascript:void(0);">直播</a>
                    </li>
                    <li>
                        <a href="__GROUP__/Index/touch">联系我们</a>
                        <div class="head_b_l_d">
                            <a href="__GROUP__/Index/touch"  >商务合作</a>
                            <a href="__GROUP__/Index/touch/select/1"  >招聘英才</a>
                            <a href="__GROUP__/Index/touch/select/2"  >联系我们</a>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- header end -->
<div class="public_t">
    <div class="public_t_box public_t_boxa "><img src="<?php echo RES;?>/img/public_k.jpg" alt=""/> <div class="public_t_box_a">客服 <br/> 工作日
        <br/> 9:00-17:00</div></div>
    <div class="public_t_box public_t_boxb"><img src="<?php echo RES;?>/img/public_p.jpg" alt=""/><div class="public_t_box_b">电话 <br/> 021-1234567</div></div>
    <div class="public_t_box public_t_boxc btn_top"><img src="<?php echo RES;?>/img/public_t.jpg" alt=""/><div class="public_t_box_c" >返回顶部</div></div>
</div>


<script type="text/javascript">
    $(function(){
        $(".btn_top").hide();
        $(".btn_top").on("click",function(){
            $('html, body').animate({scrollTop: 0},300);return false;
        });
        $(window).bind('scroll resize',function(){
            if($(window).scrollTop()>300){
                $(".btn_top").show();
                $(".head_b_center img").css({"width":"40%"});
                $(".head_b").css({"height":"30px"});
                $(".head_b ul li").css({"line-height":"30px","height":"30px"});
                $(".head_b ul li a").css({"fontSize":"14px"});
                $(".head_b_l_d").css({"top":"30px"});
            }else{
                $(".btn_top").hide();
                $(".head_b_center img").css({"width":"100%"});
                $(".head_b").css({"height":"50px"});
                $(".head_b ul li").css({"line-height":"50px","height":"50px"});
                $(".head_b ul li a").css({"fontSize":"16px"});
                $(".head_b_l_d").css({"top":"50px"});


            }
        })
    });
</script>

<!-- 轮播 start-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
    <!-- <ol class="carousel-indicators">
         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
     </ol>-->
    <div class="carousel-inner text-center" role="listbox">
        <div class="item active">
            <img  style="width: 100%" src="<?php echo RES;?>/img/center_banner.jpg" alt="...">
            <div class="carousel-caption"></div>
        </div>
    </div>
</div>
<div class="border"></div>
<!-- 轮播 end-->
<!-- content start-->
<div class="content">
    <div class="news_box">
        <div class="public_a">
            <div class="public_a_t">观点</div>
            <div class="public_a_e">
                <div class="public_a_a  public_a_vip">周报<span class="public_a_vip"> > </span></div>
                <div class="public_a_a">行情报告<span> > </span></div>
                <div class="public_a_a">焦点分析<span> > </span></div>
                <div class="public_a_a">精选文章<span> > </span></div>
                <div class="public_a_a">学院报告<span> > </span></div>
             </div>
        </div>
        <div class="public_b">
            <div>
                <div class="news_head"><span>周报</span><a href="__GROUP__/Index/index">首页</a>&gt;<a href="javascript:void(0);">观点</a>&gt;<a href="javascript:void(0);">周报</a></div>
                <?php if(is_array($zhoubao)): foreach($zhoubao as $key=>$v): ?><div class="hqbg_a">
                    <a href=""><div class="hqbg_a_a"><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                        <div class="hqbg_a_b">
                            <h4><?php echo ($v["title"]); ?></h4>
                            <p><?php echo ($v["text"]); ?></p>
                            <span><?php echo (date('Y.m.d,$v["createtime"]')); ?></span>
                            <span class="hqbg_a_span">查看更多></span>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div><?php endforeach; endif; ?>
            </div>
            <div>
                <div class="news_head"><span>行情报告</span><a href="__GROUP__/Index/index">首页</a>&gt;<a href="javascript:void(0);">观点</a>&gt;<a href="javascript:void(0);">行情报告</a></div>
                <?php if(is_array($hangqingbaogao)): foreach($hangqingbaogao as $key=>$v): ?><div class="hqbg_a">
                    <a href=""><div class="hqbg_a_a"><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                        <div class="hqbg_a_b">
                            <h4><?php echo ($v["title"]); ?></h4>
                            <p><?php echo ($v["text"]); ?></p>
                            <span><?php echo (date('Y.m.d,$v["createtime"]')); ?></span>
                            <span class="hqbg_a_span">查看更多></span>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div><?php endforeach; endif; ?>
            </div>
            <div>
                <div class="news_head"><span>焦点分析</span><a href="__GROUP__/Index/index">首页</a>&gt;<a href="javascript:void(0);">观点</a>&gt;<a href="javascript:void(0);">焦点分析</a></div>
                <?php if(is_array($jiaodianfenxi)): foreach($jiaodianfenxi as $key=>$v): ?><div class="hqbg_a">
                    <a href=""><div class="hqbg_a_a"><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                        <div class="hqbg_a_b">
                            <h4><?php echo ($v["title"]); ?></h4>
                            <p><?php echo ($v["text"]); ?></p>
                            <span><?php echo (date('Y.m.d,$v["createtime"]')); ?></span>
                            <span class="hqbg_a_span">查看更多></span>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div><?php endforeach; endif; ?>
            </div>
            <div>
                <div class="news_head"><span>精选文章</span><a href="__GROUP__/Index/index">首页</a>&gt;<a href="javascript:void(0);">观点</a>&gt;<a href="javascript:void(0);">精选文章</a></div>
                <?php if(is_array($jingxuanwenzhang)): foreach($jingxuanwenzhang as $key=>$v): ?><div class="hqbg_a">
                    <a href=""><div class="hqbg_a_a"><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                        <div class="hqbg_a_b">
                            <h4><?php echo ($v["title"]); ?></h4>
                            <p><?php echo ($v["text"]); ?></p>
                            <span><?php echo (date('Y.m.d,$v["createtime"]')); ?></span>
                            <span class="hqbg_a_span">查看更多></span>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div><?php endforeach; endif; ?>
            </div>
            <div >
                <div class="news_head"><span>学院报告</span><a href="__GROUP__/Index/index">首页</a>&gt;<a href="javascript:void(0);">观点</a>&gt;<a href="javascript:void(0);">学员报告</a></div>
                <?php if(is_array($xueyuanbaogao)): foreach($xueyuanbaogao as $key=>$v): ?><div class="hqbg_a">
                    <a href=""><div class="hqbg_a_a"><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                        <div class="hqbg_a_b">
                            <h4><?php echo ($v["title"]); ?></h4>
                            <p><?php echo ($v["text"]); ?></p>
                            <span><?php echo (date('Y.m.d,$v["createtime"]')); ?></span>
                            <span class="hqbg_a_span">查看更多></span>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div><?php endforeach; endif; ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--content  end-->
    <!--footer  start-->
    <div class="footer">
        <div>
            <div>
                <ul>
                    <li><a href="">学员简介</a></li>
                    <li><a href="">教授简介</a></li>
                    <li><a href="">课程概况</a></li>
                    <li><a href="">校友会介绍</a></li>
                    <li><a href="">联系我们</a></li>
                    <li><a href="">地址：中国上海南京西路1号</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div>
                <ul>
                    <li><a href="">福盈基金会</a></li>
                    <li><a href="">隐私政策</a></li>
                    <li><a href="">BPM</a></li>
                    <li><a href="">WEBMAIL邮箱</a></li>
                    <li><a href="">学院内网</a></li>
                    <li><a href="">联系电话：+86-021-12345678 传真：+86-021-12345678</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div>Copyright2016 沪ICP备08023149</div>
            <div class="footer_logo"><a href="__GROUP__/Index/index"><img src="<?php echo RES;?>/img/logo_bottom.png" alt=""/></a></div>
        </div>
    </div>
    <!--footer  end-->
</body>
</html>
<script>
$(function(){
	var index="<?php echo $_GET['select'];?>";
	$(".public_a_a").eq(index).click();
})
</script>
<script type="text/javascript" src="<?php echo RES;?>/js/index.js"></script>