<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>你问我答</title>

    <link type="image/x-icon" rel="shortcut icon" href="/tpl/Wap/default/common/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="/tpl/Wap/default/common/css/carousel.css">
    <link rel="stylesheet" href="/tpl/Wap/default/common/css/boston.css">
    <link rel="stylesheet" href="/tpl/Wap/default/common/css/style.css">
    <!--引入的css文件end-->
    <!--引入的jquery文件begin-->
    <script src="/tpl/Wap/default/common/js/boston.js"></script>
    <script src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
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
            width: 33.333%;
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
        .case_container h3{
	     font-size:1.2rem;
        }
        .problem-module-3 .hd p span:nth-child(2){
	      width: 30%;
          float: left;
         font-size: 0.8rem;
        }
        .problem-module-3 .hd p a{
	        display:inline-block;
        	width:10%;
        	float:right;
        	font-size: 0.8rem;
        	color:#fff !important;
        }
         .problem-module-3 .hd.right p span.span1{
	      width: 50%;
          float: left;
         font-size: 0.8rem !important;
        }
        .problem-module-3 .hd.right p span.span2{
	         width:20%;
        }
        .problem-module-3 .hd.right p a{
	        display:inline-block;
        	width:10%;
        	float:left;
        	font-size: 0.8rem;
        	color:#fff !important;
        }
    </style>
    </style>
</head>
<body>
<div class="main" style="    background: linear-gradient(#0c60a0, #00a8d5);">
    <div class="case_container" style="background:none;" >
        <h3>你问我答</h3>
        <form action="" method="post" id="form">
            <div class="problem-module">
                <div class="problem-module-1">
                    <p><?php echo ($question["xingming"]); ?></p>
                    <p class="wd-p"><span><img style="border-radius:50%;" src="<?php echo ($question["headimgurl"]); ?>" alt=""></span><span><?php echo ($question["question"]); ?></span></p>
                    <div class="clear"></div>
                </div>
                <div class="problem-module-3">
                	<?php if(is_array($zhiding)): foreach($zhiding as $key=>$v): if($v[user_id] == $question[user_id]): ?><div class="hd">
                        <p><span><?php echo ($v["xingming"]); ?></span><span><?php echo (date('Y-m-d',$v["createtime"])); ?></span><a href="javascript:void(0);" class="delete" onclick="delete_zixun(<?php echo ($v["id"]); ?>)" >删除</a><a href="javascript:void(0);" onclick="quxiao_zhiding(<?php echo ($v["id"]); ?>)" >取消置顶</a><div style='clear:both'></div> </p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div>
                	<?php else: ?>
                    <div class="hd right">
                        <p><a  onclick="quxiao_zhiding(<?php echo ($v["id"]); ?>)" >取消置顶</a><a href="javascript:void(0);" class="delete" onclick="delete_zixun(<?php echo ($v["id"]); ?>)" href="javascript:void(0);">删除</a><span class='span1'><?php echo (date('Y-m-d',$v["createtime"])); ?></span><span class='span2'><?php echo ($v["xingming"]); ?></span><div style='clear:both'></div></p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div><?php endif; endforeach; endif; ?>
                	
                	<?php if(is_array($reply)): foreach($reply as $key=>$v): if($v[user_id] == $question[user_id]): ?><div class="hd">
                        <p><span><?php echo ($v["xingming"]); ?></span><span><?php echo (date('Y-m-d',$v["createtime"])); ?></span><a href="javascript:void(0);" class="delete" onclick="delete_zixun(<?php echo ($v["id"]); ?>)" >删除</a><a href="javascript:void(0);" onclick="zhiding(<?php echo ($v["id"]); ?>)" >置顶</a><div style='clear:both'></div> </p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div>
                	<?php else: ?>
                    <div class="hd right">
                        <p><a  onclick="zhiding(<?php echo ($v["id"]); ?>)" >置顶</a><a href="javascript:void(0);" class="delete" onclick="delete_zixun(<?php echo ($v["id"]); ?>)" href="javascript:void(0);">删除</a><span class='span1'><?php echo (date('Y-m-d',$v["createtime"])); ?></span><span class='span2'><?php echo ($v["xingming"]); ?></span><div style='clear:both'></div></p>
                        <span><img style="border-radius:50%;" src="<?php echo ($v["headimgurl"]); ?>" alt=""></span>
                        <div class="wdms"><?php echo ($v["content"]); ?></div>
                    </div><?php endif; endforeach; endif; ?>
                </div>
            </div>

        </form>
    </div>
</div>

</body>
</html>
<script>

function delete_zixun(o){
	var id=o;
	$.ajax({
		url:"<?php echo U('Zixun/delete_zixun_detail');?>",
		data:{id:id},
		type:"POST",
		success:function(){
		}
	})
}
$(".delete").click(function(){
	$(this).parent().parent().hide();
})

function zhiding(o){
	var id=o;
	$.ajax({
		url:"<?php echo U('Zixun/zhiding_detail');?>",
		data:{id:id},
		type:"POST",
		success:function(){
			alert("置顶成功");
			return false;
		}
	})
}
function quxiao_zhiding(o){
	var id=o;
	$.ajax({
		url:"<?php echo U('Zixun/quxiao_zhiding_detail');?>",
		data:{id:id},
		type:"POST",
		success:function(){
			alert("已取消置顶");
			return false;
		}
	})
}


</script>