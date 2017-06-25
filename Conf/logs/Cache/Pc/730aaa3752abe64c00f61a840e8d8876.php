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
                    <li class="head_a_right_li"><form action="__GROUP__/Index/search" method="post"><input type="text" name="keyword"/></form>
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
    <div  id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center" role="listbox">
            <div class="item active">
                <img  style="width: 100%" src="<?php echo RES;?>/img/banner_c.jpg" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div  class="item">
                <img style="width: 100%" src="<?php echo RES;?>/img/banner_b.jpg" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div  class="item">
                <img style="width: 100%" src="<?php echo RES;?>/img/banner_a.jpg" alt="...">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon-left abc" aria-hidden="true"> <img src="<?php echo RES;?>/img/banner_prev.png" alt=""/></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon-right abc" aria-hidden="true"> <img src="<?php echo RES;?>/img/banner_next.png" alt=""/></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- 轮播 end-->
    <!-- content start-->
    <div class="content">
        <div class="content_head ">
            <div id="carousel-example-genericc" class="carousel slide content_head_a " data-ride="carousel" >
                <div class="carousel-inner   content_head_b" role="listbox">
                	<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><div class="item active">
                        <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>">最新动态：<?php echo ($v["title"]); ?></a>
                    </div><?php endforeach; endif; ?>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="left carousel-control lunbo_c_left"  href="#carousel-example-genericc" role="button" data-slide="prev">
                    <span class="lunbo_c glyphicon-left" aria-hidden="true"> <img src="<?php echo RES;?>/img/prev_c.png" alt=""/></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control lunbo_c_right" href="#carousel-example-genericc" role="button" data-slide="next">
                    <span class="lunbo_c glyphicon-right" aria-hidden="true"> <img src="<?php echo RES;?>/img/next_c.png" alt=""/></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="content_d">
            <div class="content_d_head t-c">
                <div class="content_d_head_name">
                    <img src="<?php echo RES;?>/img/book_d.png" alt=""/>&nbsp;资讯
                </div>
                <div class="content_d_head_box" >
                    <div><span class="course_vip">新闻</span></div>
                    <div><span class="">活动</span></div>
                    <div><span class="">媒体</span></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content_d_content">
                <div class="content_d_content_lb" >
                    <div>
                    <?php if($xinwen != null): if(is_array($xinwen)): foreach($xinwen as $key=>$v): if($key == 0): ?><div class="content_d_aa">
                        <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>">
                            <div class="content_d_content_name"><?php echo ($v["title"]); ?></div>
                            <div class="content_d_pic">
                                <img src="<?php echo ($v["pic"]); ?>" alt=""/>
                            </div>
                            <div class="content_d_text">
                                <p><?php echo ($v["text"]); ?></p>
                            </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <div class="content_d_ul">
                            <ul>
                           	<?php else: ?>
                                <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>"><li><p><?php echo ($v["text"]); ?></p><span><?php echo (date("Y.m.d",$v["createtime"])); ?></span></li></a><?php endif; endforeach; endif; ?>
                                <a href="__GROUP__/Product/news_list/class_id/<?php echo ($v["class_id"]); ?>"><span class="content_d_ul_s">查看更多></span></a>
                            </ul>
                        </div><?php endif; ?>
                    </div>
                    <div>
                    <?php if($huodong != null): if(is_array($huodong)): foreach($huodong as $key=>$v): if($key == 0): ?><div class="content_d_aa">
                        <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>">
                            <div class="content_d_content_name"><?php echo ($v["title"]); ?></div>
                            <div class="content_d_pic">
                                <img src="<?php echo ($v["pic"]); ?>" alt=""/>
                            </div>
                            <div class="content_d_text">
                                <p><?php echo ($v["text"]); ?></p>
                            </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <div class="content_d_ul">
                            <ul>
                           	<?php else: ?>
                                <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>"><li><p><?php echo ($v["text"]); ?></p><span><?php echo (date("Y.m.d",$v["createtime"])); ?></span></li></a><?php endif; endforeach; endif; ?>
                                <a href="__GROUP__/Product/news_list/class_id/<?php echo ($v["class_id"]); ?>"><span class="content_d_ul_s">查看更多></span></a>
                            </ul>
                        </div><?php endif; ?>
                    </div>
                    <div>
                    <?php if($meiti != null): if(is_array($meiti)): foreach($meiti as $key=>$v): if($key == 0): ?><div class="content_d_aa">
                        <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>">
                            <div class="content_d_content_name"><?php echo ($v["title"]); ?></div>
                            <div class="content_d_pic">
                                <img src="<?php echo ($v["pic"]); ?>" alt=""/>
                            </div>
                            <div class="content_d_text">
                                <p><?php echo ($v["text"]); ?></p>
                            </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <div class="content_d_ul">
                            <ul>
                           		<?php else: ?>
                                <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>"><li><p><?php echo ($v["text"]); ?></p><span><?php echo (date("Y.m.d",$v["createtime"])); ?></span></li></a><?php endif; endforeach; endif; ?>
                        	<a href="__GROUP__/Product/news_list/class_id/<?php echo ($v["class_id"]); ?>"><span class="content_d_ul_s">查看更多></span></a>
                            </ul>
                        </div><?php endif; ?>
                    </div>
                </div>
                <div class="content_d_content_video">
                    <div class="content_d_content_name">时间的管理</div>
                    <div id="a1"></div>
                    <div class="content_d_content_video_b">
                        <div id="carousel-example-generif" class="carousel slide content_d_lb_a" data-ride="carousel" >
                            <div class="carousel-inner text-center content_d_lb_b" role="listbox">
                                <div class="item active">
                                    <div class="teacher">
                                        <img src="<?php echo RES;?>/img/video_b.jpg" alt=""/>
                                        <div>英语老师：阿萨德</div>
                                    </div>
                                    <div class="carousel-caption"></div>
                                </div>
                                <div  class="item">
                                    <div class="teacher">
                                        <img src="<?php echo RES;?>/img/video_b.jpg" alt=""/>
                                        <div>英语老师：阿萨德</div>
                                    </div>
                                    <div class="carousel-caption"></div>
                                </div>
                            </div>
                            <a class="left carousel-control" style="background:#ffab01; position: absolute;left:-5%; " href="#carousel-example-generif" role="button" data-slide="prev">
                                <span class="glyphicon-left abc_d_a" aria-hidden="true"> <img src="<?php echo RES;?>/img/prev_c.png" alt=""/></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" style="background:#ffa801; position: absolute;right:-5%; " href="#carousel-example-generif" role="button" data-slide="next">
                                <span class="glyphicon-right abc_d_a" aria-hidden="true"> <img src="<?php echo RES;?>/img/next_c.png" alt=""/></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>

                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="content_a">
            <div class="content_a_head t-c">
                <div class="content_a_head_name">
                    <img src="<?php echo RES;?>/img/book_a.png" alt=""/>&nbsp;课程
                </div>
                <div class="content_a_head_box" >
                    <div><span class="course_vip">初级课程</span></div>
                    <div><span class="">中级课程</span></div>
                    <div><span class="">高级课程</span></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content_a_content">
                <div>
                	<?php if(is_array($chuji)): $i = 0; $__LIST__ = $chuji;if( count($__LIST__)==0 ) : echo "暂无课程" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="content_a_box">
                        <a href="__GROUP__/Product/kecheng_detail/kecheng_id/<?php echo ($v["id"]); ?>" >
                            <div class="content_box_pic">
                                <img style="    height: inherit;"  src="<?php echo ($v["pic"]); ?>" alt=""/>
                                <div>&yen;<?php echo ($v["price"]); ?></div>
                            </div>
                            <div class="content_box_detail">
                                <h4><?php echo ($v["productName"]); ?></h4>
                                <span><?php echo ($v["time"]); ?></span>
                                <p><?php echo ($v["jianjie"]); ?></p>
                            </div>
                        </a>
                    </div><?php endforeach; endif; else: echo "暂无课程" ;endif; ?>
                    <div class="clear"></div>
                </div>
                <div>
                    <?php if(is_array($zhongji)): $i = 0; $__LIST__ = $zhongji;if( count($__LIST__)==0 ) : echo "暂无课程" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="content_a_box">
                        <a href="__GROUP__/Product/kecheng_detail/kecheng_id/<?php echo ($v["id"]); ?>" >
                            <div class="content_box_pic">
                                <img style="    height: inherit;" src="<?php echo ($v["pic"]); ?>" alt=""/>
                                <div>&yen;<?php echo ($v["price"]); ?></div>
                            </div>
                            <div class="content_box_detail">
                                <h4><?php echo ($v["productName"]); ?></h4>
                                <span><?php echo ($v["time"]); ?></span>
                                <p><?php echo ($v["jianjie"]); ?></p>
                            </div>
                        </a>
                    </div><?php endforeach; endif; else: echo "暂无课程" ;endif; ?>
                    <div class="clear"></div>
                </div>
                <div>
                    <?php if(is_array($gaoji)): $i = 0; $__LIST__ = $gaoji;if( count($__LIST__)==0 ) : echo "暂无课程" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="content_a_box">
                        <a href="__GROUP__/Product/kecheng_detail/kecheng_id/<?php echo ($v["id"]); ?>" >
                            <div class="content_box_pic">
                                <img style="    height: inherit;"  src="<?php echo ($v["pic"]); ?>" alt=""/>
                                <div>&yen;<?php echo ($v["price"]); ?></div>
                            </div>
                            <div class="content_box_detail">
                                <h4><?php echo ($v["productName"]); ?></h4>
                                <span><?php echo ($v["time"]); ?></span>
                                <p><?php echo ($v["jianjie"]); ?></p>
                            </div>
                        </a>
                    </div><?php endforeach; endif; else: echo "暂无课程" ;endif; ?>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="content_b">
            <div class="content_a_head content_b_head t-c">
                <img src="<?php echo RES;?>/img/book_b.png" alt=""/>
               教授简介
                <span><a href="javascript:void(0);">/查看更多</a></span>
            </div>
            <div class="content_b_lunbo">
                <div id="carousel-example-genericb" class="carousel slide content_b_lb_a" data-ride="carousel" >
                    <div class="carousel-inner content_b_lb_b text-center" role="listbox">
                    	<?php if(is_array($jiangshi)): foreach($jiangshi as $k=>$v): if($k == 0): ?><div class="item active">
                    		<div class="content_b_box">
                                <a href="javascript:void(0);">
                                    <div class="content_b_box_pic t-c" ><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                                    <div class="content_b_box_detail t-c">
                                        <h4><?php echo ($v["name"]); ?></h4>
                                        <span><?php echo ($v["zhiwei"]); ?></span>
                                        <p><?php echo ($v["info"]); ?></p>
                                    </div>
                                </a>
                            </div>
                         <?php elseif($k%4 == 0): ?>
                            <div class="item ">
                    		<div class="content_b_box">
                                <a href="javascript:void(0);">
                                    <div class="content_b_box_pic t-c" ><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                                    <div class="content_b_box_detail t-c">
                                        <h4><?php echo ($v["name"]); ?></h4>
                                        <span><?php echo ($v["zhiwei"]); ?></span>
                                        <p><?php echo ($v["info"]); ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php elseif(4%$k == 1): ?>
                            <div class="content_b_box">
                                <a href="javascript:void(0);">
                                    <div class="content_b_box_pic t-c" ><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                                    <div class="content_b_box_detail t-c">
                                        <h4><?php echo ($v["name"]); ?></h4>
                                        <span><?php echo ($v["zhiwei"]); ?></span>
                                        <p><?php echo ($v["info"]); ?></p>
                                    </div>
                                </a>
                            </div>
                            </div>
                    		<?php else: ?>
                        
                            <div class="content_b_box">
                                <a href="javascript:void(0);">
                                    <div class="content_b_box_pic t-c" ><img src="<?php echo ($v["pic"]); ?>" alt=""/></div>
                                    <div class="content_b_box_detail t-c">
                                        <h4><?php echo ($v["name"]); ?></h4>
                                        <span><?php echo ($v["zhiwei"]); ?></span>
                                        <p><?php echo ($v["info"]); ?></p>
                                    </div>
                                </a>
                            </div><?php endif; endforeach; endif; ?>
                        <?php if(4%$k != 1): ?></div><?php endif; ?>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="left carousel-control" href="#carousel-example-genericb" role="button" data-slide="prev">
                        <span class="abcd glyphicon-left" aria-hidden="true"> <img src="<?php echo RES;?>/img/prev.png" alt=""/></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-genericb" role="button" data-slide="next">
                        <span class="abcd glyphicon-right" aria-hidden="true"> <img src="<?php echo RES;?>/img/next.png" alt=""/></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content_c">
             <div class="content_a_head t-c">
                 <img src="<?php echo RES;?>/img/book_c.png" alt=""/>
                 校园故事
                 <span><a href="__GROUP__/Product/news_list/class_id/<?php echo ($v["class_id"]); ?>">/查看更多</a></span>
             </div>
             <?php if(is_array($xiaoyuangushi)): foreach($xiaoyuangushi as $key=>$v): ?><div class="content_c_a">
                 <div class="content_c_left">
                     <img src="<?php echo ($v["pic"]); ?>" alt=""/>
                 </div>
                 <div class="content_c_right">
                     <div>
                         <h3><?php echo ($v["title"]); ?></h3>
                         <span><?php echo ($v["write"]); ?>&nbsp;<?php echo (date("Y.m.d",$v["createtime"])); ?></span>
                         <p><?php echo ($v["text"]); ?></p>
                         <a href="__GROUP__/Product/news_detail/id/<?php echo ($v["id"]); ?>"><button>开始阅读</button></a>
                     </div>
                 </div>
                 <div class="clear"></div>

             </div><?php endforeach; endif; ?>
            
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
<script type="text/javascript" src="<?php echo RES;?>/libs/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
    var flashvars={
        f:'/tpl/Pc/default/common/img/video/index.mp4',
        c:0,
        b:1,
        i:'/tpl/Pc/default/common/img/video/index.jpg'
    };
    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
    CKobject.embedSWF('/tpl/Pc/default/common/libs/ckplayer.swf','a1','ckplayer_a1','380','210',flashvars,params);
    /*
     CKobject.embedSWF(播放器路径,容器id,播放器id/name,播放器宽,播放器高,flashvars的值,其它定义也可省略);
     下面三行是调用html5播放器用到的
     */
    var video=['/tpl/Pc/default/common/img/video/index.mp4->video/mp4'];
    var support=['iPad','iPhone','ios','android+false','msie10+false'];
    CKobject.embedHTML5('a1','ckplayer_a1',380,210,video,flashvars,support);

</script>


<!--<script>
    style="position: fixed;top:0;z-index: 9999;"
    $(function() {
        var a = document.body.clientWidth;
        $(".head").css({"width":a})
    })
</script>-->