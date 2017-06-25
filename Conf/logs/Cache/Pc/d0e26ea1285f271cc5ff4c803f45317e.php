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
                <div class="public_a_t">福盈商学院</div>
                <div class="public_a_e">
                    <div class="public_a_a  public_a_vip">关于学院 <span class="public_a_vip"> > </span></div>
                    <div class="public_a_a">关于福盈<span> > </span></div>
                </div>
            </div>
            <div class="public_b">
                <div>
                    <div class="news_head"><span>关于学院</span> <a href="__GROUP__/Index/index">首页</a>&gt;<a href="javascript:void(0);">福盈商学院</a>&gt;<a href="javascript:void(0);">关于学院</a></div>
                    <div class="public_b_box">
                        <div class="public_b_box_t">一.学院成立宗旨</div>
                        <div class="public_b_box_c">
                            <ol>
                                <li><span>为广大在股票市场、期货市场、现货市场、大宗商品市场、债券市场及外汇市场的投资人或投资机构建构完整并有系统的投资交易理论及实践方法。</span></li>
                                <li>提升金融人员的专业性并有利其从事市场分析与交易行为。</li>
                                <li>希望避免广大投资人在投资交易的路上走过多弯路。</li>
                                <li>使人人都有为自己创造财富的能力与机会。</li>
                                <li>爲中国二級市場培養出最专业且具有丰富实战经验的交易团队。
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="public_b_box">
                        <div class="public_b_box_t">二.学院课程特色</div>
                        <div class="public_b_box_c">
                            <ol>
                                <li><span>不同于传统金融培训如CFA、CFP或金融从业人员资格等纯粹以理论为主的教学内容，福盈商学院以金融技术分析Financial Technical Analysts为课程主轴， 结合丰富扎实的理论知识与实盘复习，使我们的学员在学习的过程中能进一步对金融技术分析工具有深入了解及实务应用能力。</span></li>
                                <li><span>金融技术分析是一个非常着重实务参与与交流的课程，透过理论扎实且经验丰富的讲师授课，透过模拟及复盘的学习，以最小的成本获得最大的实用技能。</span></li>

                            </ol>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="news_head"><span>关于福盈</span> <a href="__GROUP__/Index/index">首页</a>&gt;<a href="javascript:void(0);">福盈商学院</a>&gt;<a href="javascript:void(0);">关于福盈</a></div>
                    <div>
                        <div class="gyfy_a gyfy_apic"><img src="<?php echo RES;?>/images/about_c.png" alt=""/></div>
                        <div class="gyfy_a">
                            <h4 class="gyfy_a_h1">立足国内、放眼全球，福盈集团（FXI Group Corporation）以境内外财富管理、投行业务、普惠宜居为三大支柱，主营包括股权私募基金、海外券商、融资租赁、证券保证金融资、新三板保荐、积分电子商城、房地产等核心财富领域，并在全国各地和海外均设有分支机构。</h4>
                            <h4 class="gyfy_a_h2">在中国</h4>
                            <p class="gyfy_a_p1">凭借公司先进的经营理念、深厚的企业管理经验、强大的背景实力以及丰富的金融业和实业投资管理经验，福盈集团创建了完善的治理机构和严格的风控体系，立足于资本市场的发展机遇，着眼于国内基金广阔的发展空间，充分利用深厚的社会资源和广泛的合作关系，努力打造一流的全方位金融服务商。</p>
                            <p class="gyfy_a_p1">福盈集团旗下子公司已成功在上海股权交易中心挂牌上市（企业简称：福盈基金，企业代码：201386），并获批中国证券投资基金业协会私募基金管理人牌照（森恩资管，登记编号：P1033648；金牛泰富，登记编号：P1031744）。</p>
                            <p class="gyfy_a_p1">福盈集团专注于为高净值客户提供全方面的财富管理服务，通过对金融理财产品进行独立筛选和优化，为客户“私人订制”最科学，最合理的资产配置建议，使客户资产增值收益得到最大化。</p>
                            <h4 class="gyfy_a_h2">在世界</h4>
                            <p class="gyfy_a_p1">福盈集团初创于新西兰，目前在新西兰直接控股在亚太地区久负盛名的金融服务商CJ Capital (FSP注册牌照编号：FSP307646),贯彻“公平、透明”的交易原则，致力于为客户创造绿色的交易通道和提供最优质的金融服务，确保客户交易资金的安全。</p>
                            <p class="gyfy_a_p1">福盈控股的CJ Capital接受新西兰金融服务监管局FSP的严格监管，同时加入了FDR计划，其交易系统内的每一笔资金往来均受到该机构的严格审核和监控，以避免出现任何损害投资者利益的行为。</p>
                            <p class="gyfy_a_p1">影响一个行业，影响一代人！福盈集团，值得期待。</p>
                        </div>

                    </div>
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