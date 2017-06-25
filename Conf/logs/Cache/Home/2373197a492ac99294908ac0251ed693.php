<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

﻿<head>       
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
 <title><?php echo C('site_title');?></title>        
 <meta name="Keywords" content="<?php echo C('site_name');?>" />       
  <link type="text/css" rel="stylesheet" href="<?php echo STATICS;?>/Home/summer/css/reset.css" />        
  <link type="text/css" rel="stylesheet" href="<?php echo STATICS;?>/Home/summer/css/style.css" />        
  <script src="<?php echo STATICS;?>/Home/summer/js/jquery-1.8.3.min.js"></script>       
   <script src="<?php echo STATICS;?>/Home/summer/js/common.js"></script>       
    <script src="<?php echo STATICS;?>/Home/summer/js/jquery.slider.js"></script>        
	<script src="<?php echo STATICS;?>/Home/summer/js/jquery-runbanner.js"></script>       
     <script src="<?php echo STATICS;?>/Home/summer/js/turn4.1.min.js"></script>     
        <!--        防止恶意点击 -->        
	<script type="text/javascript">            var _tsa = _tsa || [];            _tsa.id = 9434;            _tsa.protocol = document.location.protocol == "https:" ? "https://" : "http://";            (function() {                var obj = document.createElement('script');                obj.src = _tsa.protocol + 's.topsem.com/safe.js';                var s = document.getElementsByTagName('script')[0];                s.parentNode.insertBefore(obj, s);            })();        </script>
</head>

<body style="background:#fff;">

﻿<div class="wrap_header">
    <div class="header">
        <div class="navigation">
            <div class="logo"> <a href="/"><img src="<?php echo C('site_logo');?>" alt=""  border="0" /></a>
            </div>
            <ul><li class="current"><a href="/">首页</a></li><li><a href="<?php echo U('Index/index');?>#func">功能</a></li>
          
            <li><a href="<?php echo U('Index/case');?>">案例</a></li><li><a href="<?php echo U('Index/agency');?>">代理</a></li><li><a href="<?php echo U('Index/reg');?>">入驻</a></li><li><a href="http://wm.b2ctui.com">论坛</a></li></ul>
            <div class="login">
                <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>
                  <a href="<?php echo U('Index/reg');?>" <?php if($curr == 'reg' ): ?>class="current"<?php endif; ?>>注册</a>
                <?php else: ?>
                  <a href="<?php echo U('System/Admin/logout');?>">注销</a><a href="<?php echo U('User/Index/index');?>"><?php echo $_SESSION['uname'] ?></a><?php endif; ?>
            </div>
          
        </div>
    </div>
</div>

<div class="banner_reg">
	<div class="banner_reg_main"  style="background:url(<?php echo ($f_drlogo); ?>)">
    	
    </div>
</div>
<div class="bg_reg_main">
	<form action="<?php echo U('Users/checkreg');?>" method="post" id="info_form">
	<div class="reg_main">
    	<div class="title">
        	<i>1</i><h2>账号信息</h2>
        </div>
        <table width="100%" border="0">
          <tr>
            <th>用户名</th>
            <td><input name="username" id="username" type="text" placeholder="请输入用户名" class="focus" /></td>
          </tr>
          <tr>
            <th>密码</th>
            <td><input name="password" id="password" type="password" placeholder="请输入密码" /></td>
          </tr>
          <tr>
            <th>确认密码</th>
            <td><input name="repassword" id="repassword" type="password" placeholder="请确认密码" /></td>
          </tr>
        </table>
        <div class="title">
        	<i>2</i><h2>公司信息</h2>
        </div>
        <table width="100%" border="0">
          <tr>
            <th>邮箱</th>
            <td><input name="email" id="email" type="text" placeholder="请输入邮箱" /></td>
          </tr>
          <tr>
            <th>QQ</th>
            <td><input name="qq" id="qq" type="text" placeholder="请填写qq" /></td>
          </tr>
          <tr>
            <th>电话</th>
            <td><input name="tel" id="phone" type="text" placeholder="请输入电话" /></td>
          </tr>
        </table>

        <input type="submit" value="立即注册" class="btn_reg" />
    </div>
    </form>
</div>
<?php echo ($validate); ?>
<script>
$("#email").formValidator({empty:false}).inputValidator({min:6,max:100,onerror:"格式不正确"}).regexValidator({regexp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",onerror:"格式不正确"});
$("#phone").formValidator({empty:false}).regexValidator({regexp:"^\\d{7,8}|\d{11}$",onerror:"电话号码不正确"});

    /**
     * 选择地区（默认选中已选择的地区）
     */
    function selected_region(){
    	select_region();
    	var province_id=$('select[name="province_id"]').attr('data-value');
    	var city_id = $('select[name="city_id"]').attr('data-value');
    	getCitys(province_id, 'city_id');
    	getCitys(city_id, 'area_id');
    }

    /**
     * 选择地区
     */
    function select_region(){
    	
    	var select_province_id='province_id';
    	var input_province='province';
    	var select_city_id='city_id';
    	var input_city='city';
    	var select_area_id='area_id';
    	var input_area='area';
    	
    	getCitys(0, select_province_id);
    	$("#" + select_province_id).change(function() {
    		var province_id = $('#'+ select_province_id).val();
    		var province = $('#'+ select_province_id).find('option:selected').text();
    		$('#' + input_province).val(province);
    		getCitys(province_id, select_city_id);
    		$("#"+ input_city).val('');
    		$("#"+ select_city_id).empty();
    		$('#'+ select_city_id).append('<option value="">请选择</option>');
    		$("#"+ input_area).val('');
    		$("#"+ select_area_id).empty();
    		$('#'+ select_area_id).append('<option value="">请选择</option>');
    	});
    	$("#" + select_city_id).change(function() {
    		var city_id = $('#'+ select_city_id).val();
    		var city = $('#'+ select_city_id).find('option:selected').text();
    		$('#'+ input_city).val(city);
    		getCitys(city_id, select_area_id);
    		$("#"+ input_area).val('');
    		$("#"+ select_area_id).empty();
    		$('#'+ select_area_id).append('<option value="">请选择</option>');
    	});
    	$("#"+ select_area_id).change(function() {
    		var area = $('#'+ select_area_id).find('option:selected').text();
    		$('#'+ input_area).val(area);
    	});
    }

    /**
     * 获取城市
     */
    function getCitysBak(parent_id,select_id) {
    	$.ajax({
        	type:'post',
            url:'/trend/region/getCitys',
            data:'parent_id=' + parent_id,
            dataType:'json',
            timeout:60000,
            success:function(data){
            	if(data.status==0){
            		var selected_value = $('#'+ select_id).attr('data-value');
            		var selected_html = '';
    	    		$(data.data).each(function(){
    	    			if(selected_value==this.area_id){
    	    				$('#'+ select_id).append('<option value="'+ this.area_id +'" selected="selected">'+ this.title +'</option>');
    	    			}else{
    	    				$('#'+ select_id).append('<option value="'+ this.area_id +'"'+ selected_html +'>'+ this.title +'</option>');
    	    			}
    	    		});
            	}
        	}
        });
    }

    /**
     * 获取城市
     */
    function getCitys(parent_id,select_id) {
    	$.ajax({
    		type:'post',
    		url:'/trend/region/getCitys',
    		data:'parent_id=' + parent_id,
    		dataType:'json',
    		timeout:60000,
    		success:function(data){
    			if(data.status==0){
    				var selected_value = $('#'+ select_id).attr('data-value');
    				var selected_html = '';
    				$(data.data).each(function(){
    					if(selected_value>0 && selected_value==this.region_id ){
    						$('#'+ select_id).append('<option value="'+ this.region_id +'" selected="selected">'+ this.region_name +'</option>');
    					}else{
    						$('#'+ select_id).append('<option value="'+ this.region_id +'"'+ selected_html +'>'+ this.region_name +'</option>');
    					}
    				});
    			}
    		}
    	});
    }
    selected_region();
</script>
<!---底部 begin--->
<div class="joinLine">全国招商热线：0755-61910103</div>
<div class="footer">
    <div class="footer_con">
        <div class="logo">
            <a href="/" style="background:url(<?php echo ($f_logo); ?>) no-repeat"><?php echo C('site_title');?></a>
        </div>
        <div class="link">
            <p>
                
<a href="/">返回首页</a> | 
<a href="<?php echo U('Index/reg');?>">申请入驻</a> |
<a href="<?php echo U('Index/agency');?>"> 加盟代理</a> | 
<a href="<?php echo U('Index/case');?>">成功案例</a> | 
<a href="<?php echo U('Index/contact');?>">关于我们</a>
            </p>
            <p>
                客服专线：0755-61910103   QQ：<?php echo C('site_qq');?>   邮箱：<?php echo C('site_email');?>
            </p>
            <p>地址：<?php echo C('keyword');?></p>
        </div>
        <div class="code"><img src="<?php echo ($f_qrcode); ?>" width="124" height="124" /></div>
    </div>
</div>
<div class="copyright">
    Copyright © 2014 All Rights Reserved <?php echo C('site_name');?> 版权所有 
</div>
<!---底部 begin--->

<!--右侧悬浮 begin-->
<div class="consult" id="consult">

</div>
<!--右侧悬浮 end-->
<div style="display:none">

	<script type="text/javascript" src="http://tajs.qq.com/stats?sId=34654282888" charset="UTF-8"></script>
</div>
<!----注册 end---->
</body>
</html>