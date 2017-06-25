<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>青峰-后台管理系统</title>
<meta name="keywords" content="<?php echo C('h_keyword');?>"/>
<meta name="description" content="<?php echo C('h_content');?>"/>
<link rel="stylesheet" type="text/css" href="{pigcms::RES}/css/style.css"/>
<link rel="stylesheet" type="text/css" href="{pigcms::RES}/css/index.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="{pigcms::RES}/css/ie6.css"/>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="{pigcms::RES}/js/lang.js"></script>
<script type="text/javascript" src="{pigcms::RES}/js/config.js"></script>
<script type="text/javascript" src="{pigcms::RES}/js/jquery.js"></script>
<script type="text/javascript" src="{pigcms::RES}/js/common.js"></script>
<script type="text/javascript" src="{pigcms::RES}/js/page.js"></script>
<script type="text/javascript" src="{pigcms::RES}/js/jquery.lazyload.js"></script>
<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
</head>
<body>
<div class="main">
<style>

.contaier{ zoom: 1; }
.contaier:after{ content : '.'; display: block; width: 0; height: 0; visibility: hidden; line-height: 0; font-size: 0; clear: both; }
/*基础*/
body{ font-size:16px; font-family: Century Gothic, \5FAE\8F6F\96C5\9ED1,\5E7C\5706, Arial, Verdana; color: #323232; background:#e4e5ea; }
select,input,textarea{ outline: none; font-family: Century Gothic, \5FAE\8F6F\96C5\9ED1,\5E7C\5706, Arial, Verdana; font-size: 16px;color:#323232 }
textarea{ resize: none; overflow: auto;}
a{ text-decoration: none; color: #007DDB; }
a:hover{ text-decoration: underline; }
/*布局*/
.header{ width: 100%; height: 54px; background-color: #323232; line-height: 54px; color: #fff; position: fixed!important; position: absolute; top: 0; left: 0; z-index: 5;border-bottom:1px solid silver }
.wp{ max-width: 500px!important; width: auto!important; width: 980px; padding: 0 12px; margin: 0 auto; position:relative;}
.contaier{ padding-bottom: 18px; padding-top: 24px; background: #e4e5ea; height: auto!important; min-height: 500px; height: 500px;margin-top:50px;}

.header{ width: 100%; height: 54px; background-color: #323232; line-height: 54px; color: #fff; position: fixed!important; position: absolute; top: 0; left: 0; z-index: 5;border-bottom:1px solid silver }
.think-login,.think-register{ border: 0px solid #e4e5ea; background:#fff; }
.think-login,.think-register,.login-other{ margin-top: 0px; min-width: 320px; margin-left:90px;}
.think-login .head,.think-register .head,.login-other .head{ height: 36px; line-height: 36px; text-align:center; margin-top:10px;color:#aaa;}
.think-login .head strong,.think-register .head strong{ font-weight: normal; font-size: 20px; vertical-align: bottom;  }
.think-login .head span,.think-register .head span{ margin-left: 24px; color: #999; }
.think-login .head a,.think-register .head a{ color: #007DDB; margin-left: 6px; text-decoration: underline; }
.think-login .body,.think-register .body{ padding-top: 12px; }
.think-login,.think-register{ float: left; }
.think-form{ padding-bottom: 36px;}
.think-form .must{ font-style: normal; color: #c00; margin-right: 3px; }
.think-form th{ padding: 0px 0px; color:#aaa;}
.think-form td{ padding: 0px 0px 10px; color:#aaa;}
.think-form th{ font-weight: normal; vertical-align: top; line-height: 20px; padding-right: 9px; text-align: left; font-size:13px}
.think-form .text{ height: 24px; width: 350px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.think-form .text:focus{ box-shadow: 0 0 5px rgba(52,143,212,.6); border-color: #348FD4; }
.think-form .checkbox{ margin-right: 6px; }
.think-form .submit{ background: #237ca4; color: #fff; font-size: 16px; height: 30px; line-height: 21px; padding: 0 24px; vertical-align: middle; border: 0; cursor: pointer; }
.think-form .submit:hover{ background-color: #2F81BF; }
.think-form select{ height: 32px; padding: 3px; border: 1px solid #ccc; }
.think-form .login .text { height: 24px; width: 250px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.think-form .login .verify { height: 24px; width: 150px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.login-other{ float: left; padding-left: 60px; margin-left: -1px; display: inline; border-left: 1px solid #ddd; }
.login-other .head strong{ font-weight: normal; color: #999; }
.login-change{width:320px;margin-left:0px;margin-top:5px;}
.login-change li{width:50%;float:left; border:0; font-size:12px;padding:3px 0}
.login-change li.cur{background:#fff;}
</style>
<div class="abody">
  <div align="center" class="contaier wp cf">
<!-- 	<div style="width:100%"><img src="<?php echo STATICS;?>/Home/summer/images/login/logo.png" width="50%" alt="" /></div> -->
    <div class="think-login">
        <div class="head">
            <strong>易迹后台管理系统</strong>
        </div>
        <div align="center" class="body think-form ">
            <form action="<?php echo U('Users/checklogin');?>" method="post" class="login">
                <table cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                    <th>用户名</th>
                    </tr>
                    <tr> 
                        <td>
                            <input class="text" type="text" name="username"/>
                        </td>
                    </tr>
                    <tr>
                    <th>密　码</th>
                    </tr>
                    <tr>
                        
                        <td>
                            <input class="text" type="password" name="password"/>
                        </td>
                    </tr>
                    
                    <tr>
                        
                        <td align="right">
                            <input class="submit" type="submit" value="登录">
                        </td>
                    </tr>
					
					   
                </tbody></table>
            </form>
        </div>
    </div>
</div>
</div>
    </div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
	</div>
</body>
</html>