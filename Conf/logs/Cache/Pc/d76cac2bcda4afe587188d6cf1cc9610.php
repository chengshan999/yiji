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
    <!-- 轮播 end-->
    <!-- content start-->
    <div class="content">
        <div class="center_content">
           <div class="center_left">
               <div><span class="span_vip">我的资料</span></div>
               <div><span class="">我的课程</span></div>
               <div><span class="">我的活动</span></div>
               <div><span class="">我的消息</span></div>
               <div><span class="">修改密码</span></div>
           </div>
           <div class="center_right">
               <div style="display: block;">
                   <!--首次登陆-->
                   <?php if($user["isfirst"] == 0): ?><form id="form1" action="__URL__/save_info_first" method="post">
                   <div class="center_ziliao">
                       <div class="center_ziliao_photo"><img src="<?php echo RES;?>/img/center_photo.png" alt=""/>用户名：<?php echo ($user["tel"]); ?></div>
                       <div class="center_ziliao_name"><span>姓名：</span><span class="ti"><?php echo ($user["xingming"]); ?></span></div>
                       <div class="center_ziliao_name"><span>手机号码：</span><span class="ti"><?php echo ($user["tel"]); ?></span></div>
                       <div class="center_ziliao_name"><span>邮箱：</span><span class="ti"><?php echo ($user["email"]); ?></span></div>
                       <div class="center_ziliao_name"><span>性别：</span><span class="tisex" >
                           <select  style="width: 30%;" name="sex" id="sex">
                               <option value="1">男</option>
                               <option value="2">女</option>
                           </select></span>
                       </div>
                       <div class="center_ziliao_name"><span>身份证号：</span><span class="ti"><input name="card_num" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>出生日期：</span><span class="ti"><input name="birth" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>现居地址：</span><span class="ti"><input name="home" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>学历：</span>
                           <span >
                           <select  style="width: 10%;" name="xueli" id="education" >
                               <option value="初中">初中</option>
                               <option value="中专">中专</option>
                               <option value="高中">高中</option>
                               <option value="专科">专科</option>
                               <option value="本科">本科</option>
                               <option value="硕士">硕士</option>
                               <option value="博士及以上">博士及以上</option>
                            </select>
                           </span>
                           <span class="ti1">
                               毕业院校：<input name="biye_yuanxiao" type="text"/>
                           </span>
                             <span class="ti1">
                               毕业时间：<input name="biye_time" type="text"/>
                           </span>
                       </div>
                       <div class="center_ziliao_name  center_ziliao_submit"><span></span><span class="ti"><input type="button" onclick="tijiao(1);" value="提交"/></span></div>

                   </div>
                   </form>
                   <?php else: ?>
                   <!--正常登陆-->
                   <div class="center_ziliao">
                       <div class="center_ziliao_photo"><img src="<?php echo RES;?>/img/center_photo.png" alt=""/>用户名：<?php echo ($user["tel"]); ?></div>
                       <div class="center_ziliao_name"><span>姓名：</span><span class="ti"><?php echo ($user["xingming"]); ?></span></div>
                       <div class="center_ziliao_name"><span>手机号码：</span><span class="ti"><?php echo ($user["tel"]); ?></span></div>
                       <div class="center_ziliao_name"><span>邮箱：</span><span class="ti"><?php echo ($user["email"]); ?></span></div>
                       <div class="center_ziliao_name"><span>性别：</span><span class="ti"><?php if($user['sex']==1){echo '男';}else{echo '女';} ?></span>
                       </div>
                       <div class="center_ziliao_name"><span>身份证号：</span><span class="ti"><?php echo ($user["card_num"]); ?></span></div>
                       <div class="center_ziliao_name"><span>出生日期：</span><span class="ti"><?php echo ($user["birth"]); ?></span></div>
                       <div class="center_ziliao_name"><span>现居地址：</span><span class="ti"><?php echo ($user["home"]); ?></span></div>
                       <div class="center_ziliao_name"><span>学历：</span><span class="ti"><?php echo ($user["xueli"]); ?></span></div>
                       <div class="center_ziliao_name  center_ziliao_submit"><span></span><span class="ti"><input id="edit" type="button" value="修改"/></span></div>

                   </div><?php endif; ?>
                   <!--修改-->
                   		<form action="__URL__/save_info" id="form2" method="post">
                   <div class="center_ziliao" style="display:none;">
                       <div class="center_ziliao_photo"><img src="<?php echo RES;?>/img/center_photo.png" alt=""/>用户名：<?php echo ($user["tel"]); ?></div>
                       <div class="center_ziliao_name"><span>姓名：</span><span class="ti"><input name="xingming" value="<?php echo ($user["xingming"]); ?>" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>手机号码：</span><span class="ti"><input name="tel" value="<?php echo ($user["tel"]); ?>" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>邮箱：</span><span class="ti"><input name="email" value="<?php echo ($user["email"]); ?>" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>性别：</span><span class="tisex"  >
                           <select  style="width: 30%;" name="sex" id="sex">
                           		<?php if($user["sex"] == 1): ?><option value="1">男</option>
                               <option value="2">女</option>
                           		<?php else: ?>
                           		<option value="1">男</option>
                               <option value="2" selected>女</option><?php endif; ?>
                           </select></span>
                       </div>
                       <div class="center_ziliao_name"><span>身份证号：</span><span class="ti"><input name="card_num" value="<?php echo ($user["card_num"]); ?>" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>出生日期：</span><span class="ti"><input name="birth" value="<?php echo ($user["birth"]); ?>" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>现居地址：</span><span class="ti"><input name="home" value="<?php echo ($user["home"]); ?>" type="text"/></span></div>
                       <div class="center_ziliao_name"><span>学历：</span>
                           <span >
                           <select  style="width: 10%;" name="xueli" id="education" >
                               <option value="初中" <?php if($user['xueli']=='初中'){echo 'selected';} ?>>初中</option>
                               <option value="中专" <?php if($user['xueli']=='中专'){echo 'selected';} ?>>中专</option>
                               <option value="高中" <?php if($user['xueli']=='高中'){echo 'selected';} ?>>高中</option>
                               <option value="专科" <?php if($user['xueli']=='专科'){echo 'selected';} ?>>专科</option>
                               <option value="本科" <?php if($user['xueli']=='本科'){echo 'selected';} ?>>本科</option>
                               <option value="硕士" <?php if($user['xueli']=='硕士'){echo 'selected';} ?>>硕士</option>
                               <option value="博士及以上" <?php if($user['xueli']=='博士及以上'){echo 'selected';} ?>>博士及以上</option>
                           </select>
                           </span>
                           <span class="ti1">
                               毕业院校：<input name="biye_yuanxiao" value="<?php echo ($user["biye_yuanxiao"]); ?>" type="text"/>
                           </span>
                           <span class="ti1">
                               毕业时间：<input name="biye_time" value="<?php echo ($user["biye_time"]); ?>" type="text"/>
                           </span>
                       </div>
                       <div class="center_ziliao_name  center_ziliao_submit"><span></span><span class="ti"><input type="button" onclick="tijiao(2)" value="提交"/></span></div>
                   </div>
                   </form>
               </div>
               <div >
                   <div class="center_course_top">
                       <div class="center_course_top_l"><span class="center_course_s_v">待确认</span></div>
                       <div class="center_course_top_l"><span class="">进行中</span></div>
                       <div class="center_course_top_l"><span class="">已完成</span></div>
                       <div class="clear"></div>
                   </div>
                   <div class="center_course_detail">
                       <div style="display:block;">
                       		<?php if(is_array($weifukuan)): foreach($weifukuan as $key=>$v): ?><div class="courses_box_box center_course_box">
                               <div class="courses_box_box_left">
                                   <h4><?php echo ($v["productName"]); ?></h4>
                                   <span class="courses_left_name"> <span><?php echo ($v["jiangshi"]); ?></span>/<?php echo ($v["time"]); ?></span> <br/>
                                           <span class="courses_left_pj">
                                               <a href=""><img src="<?php echo RES;?>/img/teachter.png" alt=""/>&nbsp;<?php echo ($v["baoming"]); ?></a>&nbsp;&nbsp;
                                               <a href=""><img src="<?php echo RES;?>/img/teacher_pj.png" alt=""/>&nbsp;56</a>
                                           </span><br/>
                                            <span class="teacher_pf courses_left_pf center_pf" >热门程度
                                                <input  type="hidden"   class="xing" value="<?php echo ($v["xingji"]); ?>">
                                                <img  class="xing1" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing2" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing3" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing4" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing5" src="<?php echo RES;?>/img/xing2.png">
                                            </span>
                                   <p><?php echo ($v["jianjie"]); ?></p>
                                   <span class="courses_left_learn center_course_learn"><a href="__GROUP__/Product/pay/order_id/<?php echo ($v["order_id"]); ?>"><input type="button" value="去付款"/></a></span>
                               </div>
                               <div class="courses_box_box_right center_box_right" ><img src="<?php echo RES;?>/img/courses_a.jpg" alt=""/></div>
                           </div><?php endforeach; endif; ?>
                       </div>
                       <div style="display: none;">
                            <?php if(is_array($weifukuan)): foreach($weifukuan as $key=>$v): ?><div class="courses_box_box center_course_box">
                               <div class="courses_box_box_left">
                                   <h4><?php echo ($v["productName"]); ?></h4>
                                   <span class="courses_left_name"> <span><?php echo ($v["jiangshi"]); ?></span>/<?php echo ($v["time"]); ?></span> <br/>
                                           <span class="courses_left_pj">
                                               <a href=""><img src="<?php echo RES;?>/img/teachter.png" alt=""/>&nbsp;<?php echo ($v["baoming"]); ?></a>&nbsp;&nbsp;
                                               <a href=""><img src="<?php echo RES;?>/img/teacher_pj.png" alt=""/>&nbsp;56</a>
                                           </span><br/>
                                            <span class="teacher_pf courses_left_pf center_pf" >热门程度
                                                <input  type="hidden"   class="xing" value="<?php echo ($v["xingji"]); ?>">
                                                <img  class="xing1" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing2" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing3" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing4" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing5" src="<?php echo RES;?>/img/xing2.png">
                                            </span>
                                   <p><?php echo ($v["jianjie"]); ?></p>
                                   <span class="courses_left_learn center_course_learn"><a href="javascript:void(0);"><input type="button" value="立即学习"/></a></span>
                               </div>
                               <div class="courses_box_box_right center_box_right" ><img src="<?php echo RES;?>/img/courses_a.jpg" alt=""/></div>
                           </div><?php endforeach; endif; ?>
                            
                       </div>
                       <div style="display: none;">
                            <?php if(is_array($weifukuan)): foreach($weifukuan as $key=>$v): ?><div class="courses_box_box center_course_box">
                               <div class="courses_box_box_left">
                                   <h4><?php echo ($v["productName"]); ?></h4>
                                   <span class="courses_left_name"> <span><?php echo ($v["jiangshi"]); ?></span>/<?php echo ($v["time"]); ?></span> <br/>
                                           <span class="courses_left_pj">
                                               <a href=""><img src="<?php echo RES;?>/img/teachter.png" alt=""/>&nbsp;<?php echo ($v["baoming"]); ?></a>&nbsp;&nbsp;
                                               <a href=""><img src="<?php echo RES;?>/img/teacher_pj.png" alt=""/>&nbsp;56</a>
                                           </span><br/>
                                            <span class="teacher_pf courses_left_pf center_pf" >热门程度
                                                <input  type="hidden"   class="xing" value="<?php echo ($v["xingji"]); ?>">
                                                <img  class="xing1" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing2" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing3" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing4" src="<?php echo RES;?>/img/xing2.png">
                                                <img  class="xing5" src="<?php echo RES;?>/img/xing2.png">
                                            </span>
                                   <p><?php echo ($v["jianjie"]); ?></p>
                               </div>
                               <div class="courses_box_box_right center_box_right" ><img src="<?php echo RES;?>/img/courses_a.jpg" alt=""/></div>
                           </div><?php endforeach; endif; ?>
                            
                       </div>
                   </div>
               </div>
               <div>
                   <div class="center_matches_top">
                       <div class="center_matches_top_l"><span class="center_course_s_v">进行中</span></div>
                       <div class="center_matches_top_l"><span class="">已完成</span></div>
                       <div class="clear"></div>
                   </div>
                   <div class="center_matches_detail">
                       <div style="display:block;">
                               <div class="center_matches_box">
                                   <div class="matches_box_pic"><img src="<?php echo RES;?>/img/matches_a.jpg" alt=""/></div>
                                   <div class="matches_box_name">
                                       <h4>篮球比赛</h4>
                                       <span>2016.01.01</span>
                                   </div>
                                   <div class="matches_box_detail" >
                                       <p>个人时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。</p>
                                   </div>
                                   <div class="matches_box_more"><a href=""><span>查看更多</span></a></div>
                               </div>
                               <div class="center_matches_box">
                                   <div class="matches_box_pic"><img src="<?php echo RES;?>/img/matches_b.jpg" alt=""/></div>
                                   <div class="matches_box_name">
                                       <h4>足球比赛</h4>
                                       <span>2016.01.01</span>
                                   </div>
                                   <div class="matches_box_detail" >
                                       <p>个人时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。能够成功实施时间管理策略能够成功实施时间管理策略个时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。能够成功实施时间管理策略能够成功实施时间管理策略</p>
                                   </div>
                                   <div class="matches_box_more"><a href=""><span>查看更多</span></a></div>
                               </div>
                               <div class="center_matches_box">
                                   <div class="matches_box_pic"><img src="<?php echo RES;?>/img/matches_b.jpg" alt=""/></div>
                                   <div class="matches_box_name">
                                       <h4>足球比赛</h4>
                                       <span>2016.01.01</span>
                                   </div>
                                   <div class="matches_box_detail" >
                                       <p>个人时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。能够成功实施时间管理策略能够成功实施时间管理策略个时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。能够成功实施时间管理策略能够成功实施时间管理策略</p>
                                   </div>
                                   <div class="matches_box_more"><a href=""><span>查看更多</span></a></div>
                               </div>
                               <div class="clear"></div>
                       </div>
                       <div style="display: none;">
                           <div class="center_matches_box">
                               <div class="matches_box_pic"><img src="<?php echo RES;?>/img/matches_a.jpg" alt=""/></div>
                               <div class="matches_box_name">
                                   <h4>篮球比赛</h4>
                                   <span>2016.01.01</span>
                               </div>
                               <div class="matches_box_detail" >
                                   <p>个人时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。</p>
                               </div>
                               <div class="matches_box_more"><a href=""><span>查看更多</span></a></div>
                           </div>
                           <div class="center_matches_box">
                               <div class="matches_box_pic"><img src="<?php echo RES;?>/img/matches_b.jpg" alt=""/></div>
                               <div class="matches_box_name">
                                   <h4>足球比赛</h4>
                                   <span>2016.01.01</span>
                               </div>
                               <div class="matches_box_detail" >
                                   <p>个人时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。能够成功实施时间管理策略能够成功实施时间管理策略个时间,管理哦技能在任何生活领域的专业和个人的成功是必不可少的。能够成功实施时间管理策略能够成功实施时间管理策略</p>
                               </div>
                               <div class="matches_box_more"><a href=""><span>查看更多</span></a></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                   </div>
               </div>
               <div>
                   <div class="center_mm_top">
                       我的消息
                   </div>
                       <div class="center_xx_detail">
                           <div>1.您的科技课程有了新的练习</div>
                           <div>2.您的科技课程有了新的练习</div>
                           <div>3.您的科技课程有了新的练习</div>
                       </div>
               </div>
               <div>
                   <div class="center_mm_top">
                       修改密码
                   </div>
                   <form action="__URL__/mima" method="post" id="form3">
                       <div class="center_mm_detail">
                           <div><span>原密码：</span><input name="password" type="password"/></div>
                           <div><span>重置密码：</span><input name="new_password" type="password"/></div>
                           <div><span>确认密码：</span><input name="re_new_password" type="password"/></div>
                           <div><span></span><input type="button" id="xiugaimima" value="提交"/></div>

                       </div>
                   </form>
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
<script>
	function tijiao(o){
		if(o==1){
			$("#form1").submit();
		}else if(o==2){
			$("#form2").submit();
		}
	}
	$("#edit").click(function(){
		$(".center_ziliao").eq(0).hide();
		$(".center_ziliao").eq(1).show();
	})
	$("#xiugaimima").click(function(){
		var mima1=$("input[name=new_password]").val();
		var mima2=$("input[name=re_new_password]").val();
		var mima=$("input[name=password]").val();
		if(!mima || !mima1 ||!mima2){
			alert("请输入密码");
			return false;
		}
		if(mima1 != mima2){
			alert("两次密码不一致");
			return false;
		}
		$("#form3").submit();
	})
	var type="<?php echo ($_GET['type']); ?>";
	if(type=='baoming'){
		$(".center_left>div").eq(3).click();
	}
</script>