<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易迹-后台管理系统</title>
<meta title="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta title="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=AcLehAQVKXteyB7LRWyUbZwEsREYjzFQ"></script>
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">
	
<div id="wp" class="wp">
	<?php if($usertplid == 0): ?><link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style.css?id=103" rel="stylesheet" type="text/css" />
	<?php else: ?>
		<link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style-<?php echo ($usertplid); ?>.css?id=103" rel="stylesheet" type="text/css" /><?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style_2_common.css?BPm" />
<style>
a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:#000;border:1px solid #AAA;padding:2px 8px 2px 8px;text-shadow: 0 1px #FFFFFF;font-size: 14px;line-height: 1.5;
}
#l-map{height:500px;width:100%;}
		#r-result,#r-result table{width:100%;}
.pages{padding:3px;margin:3px;text-align:center;}
.pages a{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#036cb4;text-decoration:none;}
.pages a:hover{border:#999 1px solid;color:#666;}
.pages a:active{border:#999 1px solid;color:#666;}
.pages .current{border:#036cb4 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#036cb4;}
.pages .disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
</style>
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
 <?php if(session('isQcloud') == true): ?><link type="text/css" rel="stylesheet" href="http://qzonestyle.gtimg.cn/qcloud/app/open/v1/css/wxcloud.min.css" />


<style>
.px {
	background:#fff;

	border-color:#c9c9c9;

}


input[type=radio] {

	border-radius:55px;

	border: none;

}
.btnGreen {
	border:1px solid #FFFFFF;
	box-shadow:0 1px 1px #0A8DE4;
	-moz-box-shadow:0 1px 1px #0A8DE4;
	-webkit-box-shadow:0 1px 1px #0A8DE4;
	padding:5px 20px;
	cursor:pointer;
	display:inline-block;
	text-align:center;
	vertical-align:bottom;
	overflow:visible;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
*zoom:1;
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #107BAD  3%, #18C2D1 97%, #18C2D1 100%);
	background-image:-moz-linear-gradient(bottom, #107BAD  3%, #0A8DE40 97%, #18C2D1 100%);
	background-image:-webkit-linear-gradient(bottom, #107BAD  3%,#0A8DE4 97%, #18C2D1 100%);
	color:#fff; font-size:14px; line-height: 1.5;
}
.btnGreen:hover {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-moz-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-webkit-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	color:#fff
}
.btnGreen:active {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-moz-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-webkit-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	color:#fff
}

.btnGreen{border:1px solid #3d810c;box-shadow:0 1px 1px #aaa;-moz-box-shadow:0 1px 1px #aaa;-webkit-box-shadow:0 1px 1px #aaa;padding:5px 20px;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;*zoom:1;background-color:#5ba607;background-image:linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);color:#fff;font-size:14px;line-height:1.5;}.btnGreen:hover{background-color:#5ba607;background-image:linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);color:#fff}.btnGreen:active{background-color:#5ba607;background-image:linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);color:#fff}

</style><?php endif; ?>
<?php
if (!isset($_SESSION['isQcloud'])){ ?>

<div class="topbg">
<div class="top">
<div class="toplink">
<style>
.topbg{BACKGROUND-IMAGE: url(<?php echo RES;?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:24px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 24px;
}
.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo RES;?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo RES;?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
a.a_upload{color:#f30}
</style>
<div class="welcome">欢迎使用易迹后台管理平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Login/index');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<!-- <a href="<?php echo U('Index/login');?>">注册</a> -->
			<?php else: ?>
			你好,<a  hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="<?php echo U('Login/logout');?>" >退出</a><?php endif; ?>	
	</div>
</div>
   
    </div>
</div>
<div id="aaa"></div>
<?php
} ?>

  <!--中间内容-->

  <div class="contentmanage"<?php if (isset($_SESSION['isQcloud'])){?> style="width:100%"<?php }?>>
  <?php
if (!isset($_SESSION['isQcloud'])){ ?>
    <div class="developer">
      <!--左侧功能菜单-->


<style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
background: #fff;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  background: #fff;
}

ul#menu a {
  display: block;
  text-decoration: none;
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;

}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.w2{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
.tableContent .content{min-height: 1328px;}

a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}
</style>

<?php
} ?>
      <div class="tableContent">
        <?php
if (!isset($_SESSION['isQcloud'])){ ?>
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<?php
$node=M('bl_node'); $value=$node->select(); foreach($value as $m=>$n){ $ms[]=$value[$m]['name']; } $parms=$_SERVER['QUERY_STRING']; $parms1=explode('&',$parms); $parmsArr=array(); if ($parms1){ foreach ($parms1 as $p){ $parms2=explode('=',$p); $parmsArr[$parms2[0]]=$parms2[1]; } } $subMenus=array(); $t=0; $currentMenuID=0; $currentParentMenuID=0; foreach ($menus as $m){ $loopContinue=1; if ($m['subs']){ $st=0; foreach ($m['subs'] as $s){ $includeArr=1; if ($s['selectedCondition']){ foreach ($s['selectedCondition'] as $condition){ if (!in_array($condition,$parmsArr)){ $includeArr=0; break; } } } if ($includeArr){ if ($s['exceptCondition']){ foreach ($s['exceptCondition'] as $epkey=>$eptCondition){ if ($epkey=='a'){ $parm_a_values=explode(',',$eptCondition); if ($parm_a_values){ if (in_array($parmsArr['a'],$parm_a_values)){ $includeArr=0; break; } } }else { if (in_array($eptCondition,$parmsArr)){ $includeArr=0; break; } } } } } if ($includeArr){ $currentMenuID=$st; $currentParentMenuID=$t; $loopContinue=0; break; } $st++; } if ($loopContinue==0){ break; } } $t++; } foreach ($menus as $m){ $displayStr=''; if ($currentParentMenuID!=0||0!=$currentMenuID){ $m['display']=0; } if (!$m['display']){ $displayStr=' style="display:none"'; } if ($currentParentMenuID==$i){ $displayStr=''; } $aClassStr=''; if ($displayStr){ $aClassStr=' nav-header-current'; } if($i == 0){ echo '<a class="nav-header'.$aClassStr.'" style="border-top:none !important;"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; }else{ echo '<a class="nav-header'.$aClassStr.'"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; } if ($m['subs']){ $j=0; foreach ($m['subs'] as $s){ $selectedClassStr='subCatalogList'; if ($s['Nname']==$_GET['name']){ $selectedClassStr='selected'; } if (file_exists($_SERVER['DOCUMENT_ROOT'].'/weimicms/Lib/Action/User/WallAction.class.php')&&file_exists($_SERVER['DOCUMENT_ROOT'].'/weimicms/Lib/Action/User/ShakeAction.class.php')){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; } } } echo '</ul>'; $i++; } ?>

<div style="clear:both"></div>
</ul>
</div>
</div>
<?php
} ?>
<script type="text/javascript">
$(document).ready(function(){
		$(".nav-header").mouseover(function(){
			$(this).addClass('navHover');
		}).mouseout(function(){
			$(this).removeClass('navHover');
		}).click(function(){
			$(this).toggleClass('nav-header-current');
			$(this).next('.ckit').slideToggle();
		})
	}); 


</script>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<link href="<?php echo RES;?>/css/activity.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/tpl/User/default/common/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<div class="content">
<div class="cLineB">
<h4 class="left">问卷调查</h4>
<div class="clr"></div>
</div>
<!--tab start-->
<div class="tab">
<ul>
<li class="tabli" id="tab0"><a href="<?php echo U('Research/index', array('name' => 'Wenjuan'));?>">问卷列表</a></li>
<li class="current tabli" id="tab0"><a href="<?php echo U('Research/saveInfo', array('name' => 'Wenjuan'));?>">修改问卷</a></li>
</ul>
</div>
<!--tab end-->
<div class="indexout">
<div class="new_pub">
            <div class="activity">
            <form id="survey_form" method="post">  
            <input type="hidden" class="txt" id="rid" name="rid" value="<?php echo ($research['id']); ?>">
            <ul class="activity_list">
                <li>
                    问卷标题：
                    <input type="text" class="txt" id="questionnaire_til" name="title" value="<?php echo ($research['title']); ?>">
                </li>
                                <li>
                    问卷图片：
                    <input type="text" class="px"  name="pic" id="pic" value="<?php echo ($research['pic']); ?>" style="width:580px;"  />  <script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic')">预览</a>
                </li>
                <li id="explanation" style="display: list-item;">
                    问卷说明：
                    <p>
                        <textarea class="txt" id="description" name="description"><?php echo ($research['description']); ?></textarea>
                    </p>
                </li>
                <li>
                    开始时间：
                    <span class="up_time" style="width:150px;">
                        <u id="t">
                        <input type="text" value="<?php echo ($research['starttime']); ?>" id="starttime" style="margin-top:6px;width:125px;border:0px;" name="starttime" class="hasDatepicker" onClick="WdatePicker({dateFmt:'yyyy-MM-dd  HH:mm:ss'})">
                        </u>                            
                    </span>
                </li>
                <li>
                    截至时间：
                    <span class="up_time" style="width:150px;">
                        <u id="t">
                        <input type="text" value="<?php echo ($research['dateline']); ?>" id="deadline" style="margin-top:6px;width:125px;border:0px;" name="deadline" class="hasDatepicker" onClick="WdatePicker({dateFmt:'yyyy-MM-dd  HH:mm:ss'})">
                        </u>                            
                    </span>
                </li>
                <li id="defen">
                    得分评价：
                    <input type="text" class="txt" style="width:25px" value="<?php echo ($research['pingjia'][0]['kaishi']); ?>" name="kaishi[]" >~ <input type="text" class="txt" value="<?php echo ($research['pingjia'][0]['jieshu']); ?>" style="width:25px" name="jieshu[]" >分 : <input type="text" class="txt" value="<?php echo ($research['pingjia'][0]['info']); ?>" style="width:450px" name="info[]" >
                    <a href="javascript:;" class="btnGrayS vm bigbtn add_defen"><img src="<?php echo RES;?>/images/product/add.png" width="16" class="vm">添加选项</a>
                    <?php if(is_array($research["pingjia"])): foreach($research["pingjia"] as $key=>$v): if($key != 0): ?><div><br /> <input  type="text" class="txt" style="width:25px;margin-left:9%" value="<?php echo ($v["kaishi"]); ?>" name="kaishi[]" >~ <input type="text" class="txt" value="<?php echo ($v["jieshu"]); ?>" style="width:25px" name="jieshu[]" >分 : <input type="text" class="txt" value="<?php echo ($v["info"]); ?>" style="width:450px" name="info[]" >
                    	<a class="defen_delete" style="width: 24px;height: 24px;margin: 3px 0 0;text-decoration: none;color: #f00;font: 22px/24px microsoft yahei;" href="javascript:;" title="删除这个选项">×</a></div><?php endif; endforeach; endif; ?>
                </li>
                
            </ul>
            <div class="topic_box">
            		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ques): $mod = ($i % 2 );++$i;?><div class="question_box" id="question_info_<?php echo ($i); ?>">
                    <p class="question_info">
                        <span>问题<u><?php echo ($i); ?></u>：</span>
                        <input type="text" class="txt" name="question[<?php echo ($i); ?>]" value="<?php echo ($ques['name']); ?>">
                        <input type="hidden" class="hide_qid" name="qid[<?php echo ($i); ?>]" id="qid[<?php echo ($i); ?>]" value="<?php echo ($ques['id']); ?>">
                        <?php if($i != 1): ?>&nbsp;&nbsp;<a href="javascript:;" class="box_del">删除</a><?php endif; ?>
                    </p>
                    <ul id="<?php echo ($i); ?>" class="optionul">
                    	<?php if(is_array($ques['answer'])): $k = 0; $__LIST__ = $ques['answer'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$answer): $mod = ($k % 2 );++$k;?><li>
                            <span>A</span><u>选项：</u>
                            <input type="hidden" class="hide_txt" name="oid[<?php echo ($i); ?>][<?php echo ($k); ?>]" value="<?php echo ($answer['id']); ?>">
                            <input type="text" class="txt" name="option[<?php echo ($i); ?>][<?php echo ($k); ?>]" value="<?php echo ($answer['name']); ?>">
                            <u>分值：</u><input type="text" style="width:50px;" class="txt" value="<?php echo ($answer['point']); ?>" name="point[<?php echo ($i); ?>][<?php echo ($k); ?>]">
                            <a class="list_del" href="javascript:;" title="删除这个选项">×</a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                     </ul>
                <p class="bot_add"><a href="javascript:;" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/product/add.png" width="16" class="vm">再添加一个选项</a></p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <p class="add_questio"><a href="javascript:;" title="添加" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/product/add.png" width="16" class="vm">再添加一题</a></p>
            </div>
           
            <ul>            
		<ul class="pub_list">
		<li class="bot">
      	<input class="btnGreen" type="button" id="submit_survey" value="保存"> &nbsp; <a href="<?php echo U('Research/index',array('token'=>$token));?>" class="btnGray vm">取消</a>
      	</li>
		</ul>
</ul>     
</form>
</div>
</div>
</div>

</div>
<script type="text/javascript">
$(document).ready(function(e) {
	//dateformat(7);
	number();
    $("#submit_survey").click(function(){
         var cid = $('#contentid').val();
         var title = $('#questionnaire_til').val();
         if (title == '您可以在这里创建您的调研题目，同时对调研活动加以说明') {
        	 title = '';
         }
         if (title == '') {
        	 alert('请填写调研标题');
        	 return false;
         }
		 save_survey();
		 return false;
    });
    
    $(".del").live("click",function(){
    	delimage($(this));   	
    });
    
    $(".optionul li .pic").live('mouseenter',function(){
    	$(this).children("img").show();
    });
    
    $(".optionul li .pic").live('mouseleave',function(){
    	$(this).children("img").hide();
    });

    /*投票截至时间*/
    $(".activity_list li .up_select").click(function(){
        $(this).children("div").show();
    });
    
    $(".activity_list li .up_select div").mouseleave(function(){
        $(this).hide();
    });
    
    $(".activity_list li .up_select div a").live("click",function(){
        var t = $(this).text();
        $(".activity_list li .up_select div").hide();
        $(".activity_list li .up_select u").text(t);
        $(".activity_list li .up_time").hide();
    });
});

function delimage(obj){
	obj.parent().addClass("hidden");
	obj.parent().prev("span").removeClass("hidden");
	obj.parent().parent().find("input[class='image_class']").val("");
}
function save_survey()
{
    $.post("<?php echo U('Research/saveInfo',array('token' => $token));?>", $('#survey_form').serialize(), function(response){
        if (response.error_code) {
        	alert(response.msg);	
            return false;
        } else {
        	location.href="<?php echo U('Research/index',array('token' => $token));?>";
			return false; 
        } 
    }, 'json'); 
}

function clear_form()
{
	$("input").val(''); 
	$("textarea").val(''); 
	$("select").val('');
	$("#infotype").val(3);
    $("#tag_image_show").hide();
    $("#explanation").hide();
}

/*添加选项*/
function number(){
	var i = 0;
    $(".optionul li").each(function(){
        $(this).find("input[name='userfile']").attr("id","userfile_" + i).live("change",function(){
        	uploadimage($(this).attr("id"));
        });
        i ++;
    })  
}
$(".orange_tips a.close").click(function(){
    $(".orange_tips").remove();
})

/*添加选项*/
var a = new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
function letters(){
    $(".question_box ul li").each(function(){
        $(this).find("span:first").html(a[$(this).index()]);  
        $(this).find(".txt:first").attr('name', 'option['+$(this).parent().attr('id')+']['+$(this).index()+']');
        $(this).find(".txt:last").attr('name', 'point['+$(this).parent().attr('id')+']['+$(this).index()+']');
        $(this).find(".hide_txt").attr('name', 'oid['+$(this).parent().attr('id')+']['+$(this).index()+']');
        $(this).find(".image_class").attr('name', 'image['+$(this).parent().attr('id')+']['+$(this).index()+']');
    }); 
    $(".topic_box .question_box").each(function(){
        $(this).find(".question_info span u").html($(this).index() + 1);
    }); 
    $('#question_info_1 .box_del').remove();
    $('.question_box ul li .txt').focus(function(){
        $(this).next().show();
    });

}

letters();

$(".question_box ul li .list_del").live('click',function(){												 
	$(this).parents("li").remove();
	letters();
});  

    
$(".question_box .bot_add a.btnGrayS").live('click',function(){
    var t = '<li><span>A</span><u>选项：</u><input type="hidden" class="hide_txt"> <input type="text" class="txt"/><u>分值：</u><input type="text" style="width:50px;" class="txt" ><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>';
    if($(this).parents(".question_box").find("ul li").size() <= 25){
        $(this).parents(".question_box").find("ul").append(t);
        letters();
        number();
    }else{
        alert("您添加的数量够您用一辈子了！");
    }
})
/*添加选项结束*/

/*添加题目和删除题目*/
$(".add_questio a").click(function(){
    var t = '<div class="question_box"><p class="question_info"><span>问题<u>1</u>：</span><input type="text" class="txt" value="请填写问题的题目" />'
           +'&nbsp;&nbsp;<a href="javascript:;" class="box_del">删除</a></p>'
           +'<span class="insert_pic hidden">图片建议尺寸：150*100</span><ul id="1" class="optionul"><li><span>A</span><u>选项：</u><input type="hidden" class="hide_txt"> <input type="text" class="txt" /><u>分值：</u><input type="text" style="width:50px;" class="txt" ><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>'
           +'<li><span>B</span><u>选项：</u><input type="hidden" class="hide_txt" > <input type="text" class="txt" /><u>分值：</u><input type="text" style="width:50px;" class="txt" ><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>'
           +'<li><span>C</span><u>选项：</u><input type="hidden" class="hide_txt" > <input type="text" class="txt" /><u>分值：</u><input type="text" style="width:50px;" class="txt" ><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>'
           +'</ul><p class="bot_add"><a href="javascript:;" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/product/add.png" width="16" class="vm">再添加一个选项</a></p></div>';
    $(".add_questio").before(t);
    $(".question_box:last").find("li:eq(2)").nextAll().remove();
    $(".question_box").each(function() {
        //$(this).find("u").html($(this).index());
        $(this).find(".question_info .txt").attr('name', 'question['+$(this).index()+']');
        $(this).find(".question_info .checkd").attr('name', 'ismulti['+$(this).index()+']');
        $(this).find(".question_info .checkd").attr('id', 'ismulti_'+$(this).index());
        $(this).find(".question_info label").attr('for', 'ismulti_'+$(this).index());
        $(this).find(".question_info .hide_qid").attr('name', 'qid['+$(this).index()+']');
        $(this).find("ul").attr('id', $(this).index());
    }); 
    letters();
    number();
})
$(".box_del").live('click',function(){
    $(this).parents(".question_box").remove();
    $(".question_box").each(function() {
        //$(this).find("u").html($(this).index());
    }); 
    letters();
    number();
})
/*添加题目和删除题目结束*/

/*input默认文字显示、消失*/
$("#questionnaire_til").focusin(function(){
    if($(this).val() == "您可以在这里创建您的调研题目，同时对调研活动加以说明"){
        $(this).val("");
		$(this).css("color","#666");
    }
}).focusout(function(){
    if($(this).val() == ""){
        $(this).val("您可以在这里创建您的调研题目，同时对调研活动加以说明");
		$(this).css("color","#999");
    }
})
$(".question_box p .txt").live('focusin',function(){
    if($(this).val() == "请填写问题的题目"){
        $(this).val("");
		$(this).css("color","#666");
    }
}).live('focusout',function(){
    if($(this).val() == ""){
        $(this).val("请填写问题的题目");
		$(this).css("color","#999");
    }
});


function dateformat(day){
 var date = new Date();
 date.setDate(date.getDate()+day);
 var deadline = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate()+' '+date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
 $("#deadline").val(deadline);
}

$(".add_defen").click(function(){
	$("#defen").append('<div><br /> <input  type="text" class="txt" style="width:25px;margin-left:9%" name="kaishi[]" >~ <input type="text" class="txt" style="width:25px" name="jieshu[]" >分 : <input type="text" class="txt" style="width:450px" name="info[]" ><a class="defen_delete" style="width: 24px;height: 24px;margin: 3px 0 0;text-decoration: none;color: #f00;font: 22px/24px microsoft yahei;" href="javascript:;" title="删除这个选项">×</a></div>');
	$(".defen_delete").click(function(){
		$(this).parent().remove();
	})
})
</script>
</div>
</div>
</div>

<style>
.IndexFoot {
	WIDTH: 100%; HEIGHT: 30px
}
.foot{ width:988px; margin:0px auto; font-size:14px; line-height:30px;}
.foot .foot_page{ float:left; width:600px;color:#000;}
.foot .foot_page a{ color:#000;}
#copyright{ float:right; width:380px; text-align:right; font-size:14px; color:#000;}
</style>
<div class="IndexFoot" style="height:58px;clear:both;padding-top:8px;">
<div class="foot">
<div class="foot_page" >
<a style="padding-left:90px" href="<?php echo ($f_siteUrl); ?>">易迹</a>
</div>
<div id="copyright" style="color:#000;">
	易迹(c)版权所有 <a href="http://www.miibeian.gov.cn" target="_blank" style="color:#000"><?php echo C('ipc');?></a>

</div>
    </div>
</div>

<div style="display:none">
<?php echo ($alert); ?>
<?php echo base64_decode(C('countsz'));?>

 
 </div>

</body>

<?php if(MODULE_NAME == 'Function' && ACTION_NAME == 'welcome'){ ?>
<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>

<script type="text/javascript">


    var myChart = echarts.init(document.getElementById('main')); 
   

    var option = {
        title : {
            text: '<?php if($charts["ifnull"] == 1): ?>本月关注和文本请求数据统计示例图(您暂时没有数据)<?php else: ?>本月关注和文本请求数据统计<?php endif; ?>',
            x:'left'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['文本请求数','关注数'],
            x: 'right'
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: false},
                dataView : {show: false, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: false} ,
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : [<?php echo ($charts["xAxis"]); ?>]
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'文本请求数',
                type:'line',
                tiled: '总量',
                data: [<?php echo ($charts["text"]); ?>]
            },    
            {
                "name":'关注数',
                "type":'line',
                "tiled": '总量',
                data:[<?php echo ($charts["follow"]); ?>]
            }
       

        ]

    };                   

    myChart.setOption(option); 


    var myChart2 = echarts.init(document.getElementById('pieMain')); 
               
    var option2 = {
        title : {
            text: '<?php if($pie["ifnull"] == 1): ?>7日内粉丝行为分析示例图(您暂时没有数据)<?php else: ?>7日内粉丝行为分析<?php endif; ?>',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'粉丝行为统计',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            show : false
                        },
                        labelLine : {
                            show : false
                        }
                    },
                    emphasis : {
                        label : {
                            show : true,
                            position : 'center',
                            textStyle : {
                                fontSize : '18',
                                fontWeight : 'bold'
                            }
                        }
                    }
                },
                data:[ 
                    <?php echo ($pie["series"]); ?>
                
                ]
            }
        ]
    };
     myChart2.setOption(option2,true); 


    var myChart3 = echarts.init(document.getElementById('pieMain2')); 
    var option3 = {
        title : {
            text: '<?php if($sex_series["ifnull"] == 1): ?>会员性别统计示例图(您暂时没有数据)<?php else: ?>会员性别统计<?php endif; ?>',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'会员性别统计',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            show : false
                        },
                        labelLine : {
                            show : false
                        }
                    },
                    emphasis : {
                        label : {
                            show : true,
                            position : 'center',
                            textStyle : {
                                fontSize : '18',
                                fontWeight : 'bold'
                            }
                        }
                    }
                },
                data:[
                  <?php echo ($sex_series['series']); ?>
                ]
            }
        ]
    };                     

  myChart3.setOption(option3,true); 



    </script>
<?php } ?>
</html>