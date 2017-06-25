<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>咨询聊天</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/style.css">
    <!--引入的css文件end-->
    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>
    <!--引入的jquery文件end-->
   <style>
        .textarea{
            width: 100%;
            height: 12rem;
            margin-top: 10%;
            padding: 0.5rem 1rem;
            box-sizing: border-box;
            font-size: 1rem;
            color: #3f3f3f;
        }
           /*----3-20--------*/
        .problem-module-3 .hd .wdms{
            max-width: 70%;
            box-sizing: border-box;
            float: left;
            padding: 0.5rem;
            background: #fff;
            border-radius: 5px;
            color: #000;

        }
        .problem-module-3 .hd{
            overflow: hidden;
            margin: 1rem 0;
        }

        .problem-module-3 .hd span{
            width: 15%;
            height: auto;
            float: left;
            box-sizing: border-box;
            padding-right: 1rem;
            padding-left: 0;

        }
        .problem-module .problem-module-3 .hd span img{
            width: 100%;
            border-radius: 50%;

        }
        .problem-module-3 .hd p span{
            display: inline-block;
            width: auto;
            float: inherit;
        }
        .problem-module-3 .hd p span:first-child{

            width: 40%;
            float: left;
            font-size: 0.8rem;
            box-sizing: border-box;

        }
        .problem-module-3 .hd p span:last-child{

            width: 60%;
            float: right;
            font-size: 0.8rem;
        }
        .problem-module-3 .hd p{
            overflow: auto;
            padding-right: 20%;
        	padding-left:0 !important;
        }
        .problem-module-3 .hd.right p{
            padding-left: 20%;
            padding-right: 0;
        }

        .problem-module-3 .hd.right .wdms{
            max-width: 70%;
            box-sizing: border-box;
            float: right;
            padding: 0.5rem;
            background: #fff;
            border-radius: 5px;
            color: #000;
        }

        /*----3-20-end-------*/
        .problem-module-3 .hd{
            overflow: hidden;
            margin: 1rem 0;
        }
        .problem-module-3 .hd.right span{
            width: 15%;
            height: auto;
            float: right;
            box-sizing: border-box;
            padding-left: 1rem;
            padding-right: 0;

        }
        .problem-module .problem-module-3 .hd.right span img{
            width: 100%;
            border-radius: 50%;

        }
        .problem-module-3 .hd.right .wdms{
            max-width: 80%;
            box-sizing: border-box;
            float: right;
            padding: 0.5rem;
            background: #fff;
            border-radius: 5px;
            color: #000;
        }
        .problem-module-3 .hd.right p{
            text-align: right;
            /*padding-right: 20%;*/
        }
        .problem-module-3 .hd p{
            padding-left: 20%;
        }
        .wd-p{
            font-size: 1.3rem;
        }

        /*--3-17--------*/
        .fixed-tj{
            position: fixed;
            left: 0;
            bottom: 0rem;
            height: 4rem;
            overflow: auto;
            width: 100%;
            line-height: 4rem;
        }
        .fixed-tj input{
             width: 80% !important;
             float: left;
            height: 4rem !important;
            border: 0;
            font-size: 1.2rem;
         }
        .fixed-tj button{
            width: 20%;
            float: left;
            height: 4rem;
            border: 0;
            font-size: 1.2rem;
        }

        /*---3-17-------*/
        .problem-module-3 .hd.right p span{
            display: inline-block;
            width: auto;
            float: inherit;
        }
        .problem-module-3 .hd.right p span:first-child{
            width: 60%;
            float: left;
            font-size: 0.8rem;

        }
        .problem-module-3 .hd.right p span:last-child{
            width: 40%;
            float: right;
            font-size: 0.8rem;
            padding-right:0.5rem
            box-sizing: border-box;
        }
        #form .problem-module .problem-module-1 .wd-p span:first-child{
            width: 15%;
            float: left;
        }
        #form  .problem-module .problem-module-1 .wd-p span:last-child{
            max-width: 85%;
            float: left;
            padding: 0.5rem;
        }

       /*---4-6---*/
        .content-question{
            margin-bottom: 1rem;
        }
        .content-img ul li{
            width: 50%;
            float: left;
            padding: 1%;
            box-sizing: border-box;
        }
        .content-img ul li img{
            width: 100%;

        }
        .content-question p{
            padding-bottom: 0.5rem;
            border-bottom: 1px dotted #fff!important;
            font-size: 1rem;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="case_container" id="height">
        <h3>在线咨询</h3>
        <form action="" method="post" id="form">
            <div class="problem-module">
                <div class="problem-module-1">

                    <p class="wd-p"><span><img style="border-radius:50%;" src="<?php echo ($question["headimgurl"]); ?>" alt=""></span><span style="font-size: 0.8em;">病人:<?php echo ($question["xingming"]); ?></span></p>
                    <div class="clear"></div>
                    <p><?php echo ($question["title"]); ?></p>
                </div>
                <div class="content-question" >
                    <div class="content-img">
                        <ul>
                        	<?php if(is_array($question["pic"])): foreach($question["pic"] as $key=>$v): ?><li><img src="<?php echo ($v); ?>" alt=""></li><?php endforeach; endif; ?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <p>具体病情：<?php echo ($question["question"]); ?></p>
                </div>
                <div class="problem-module-3">
                	<?php if(is_array($zhiding)): foreach($zhiding as $key=>$v): if($v[user_id] == $question[user_id]): ?><div class="hd">
                        <p><span><?php echo ($v["xingming"]); ?></span><span><?php echo (date('Y-m-d',$v["createtime"])); ?></span></p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div>
                	<?php else: ?>
                    <div class="hd right">
                        <p><span><?php echo (date('Y-m-d',$v["createtime"])); ?></span><span><?php echo ($v["xingming"]); ?></span></p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div><?php endif; endforeach; endif; ?>
                	<?php if(is_array($reply)): foreach($reply as $key=>$v): if($v[user_id] == $question[user_id]): ?><div class="hd">
                        <p><span><?php echo ($v["xingming"]); ?></span><span><?php echo (date('Y-m-d',$v["createtime"])); ?></span></p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div>
                	<?php else: ?>
                    <div class="hd right">
                        <p><span><?php echo (date('Y-m-d',$v["createtime"])); ?></span><span><?php echo ($v["xingming"]); ?></span></p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div><?php endif; endforeach; endif; ?>
                </div>
            </div>

            <div class="fixed-tj">
            <input type="hidden" name="qid" value="<?php echo ($question["id"]); ?>" />
                <input type="text" name="content" placeholder="我来解答.."><button onclick="tijiao();">提交</button>
            </div>

        </form>
    </div>
</div>

<script>
    window.onload = function () {
        gaoDu();
    }

    function gaoDu() {
        var _height1 = document.body.clientHeight;
        var _height2 = document.body.scrollHeight;
        var _case = document.getElementById('height');
        if(_height1 > _height2){
            _case.style.height = _height1 + 'px';
        }else{
            _case.style.height = _height2 + 'px';
        }
    }
    function tijiao(){
    	var answer=$("input[name=content]").val();
    	if(!answer){
    		alert("未回复内容！");
    		$("input[name=content]").focus();
    		return false;
    	}else{
    		$("form").submit();
    	}
    }
</script>
</body>
   <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</html>
<script>
var appid="wx9fdd9ee66e8219cd";
var curl=location.href;
$.ajax({
	type:'POST',
	url:"index.php?g=Wap&m=User&a=c_yaoqing",
	data:{curl:curl},
	dataType:'json',
	success:function(json){
		var timestamps = json.timestamp;
		var wxnonceStrs = json.wxnonceStr;
		var wxSha1s = json.wxSha1;
		var ccc=json.wxOri;
		wx.config({	
	   		 debug: false, 
	
	    	 appId: appid, 
	
	    	 timestamp: timestamps, 
	
	     	 nonceStr: wxnonceStrs, 
	
	    	 signature: wxSha1s,
	
	    	 jsApiList: ['previewImage'] // 功能列表，我们要使用JS-SDK的什么功能
	    	 
		 });
			$(".content-img img").click(function(){
				var src='http://chx.shopst.com/'+$(this).attr('src');
				var srcs=[];
				var j=$(".content-img img").length;
				for (i=0;i<j;i++){
					srcs.push('http://chx.shopst.com/'+$(".content-img img").eq(i).attr('src'));
				}
				wx.previewImage({
				    current: src, // 当前显示图片的http链接
				    urls: srcs // 需要预览的图片http链接列表
				});
			});
				
	}
}); 
</script>