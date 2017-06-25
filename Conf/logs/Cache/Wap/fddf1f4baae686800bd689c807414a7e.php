<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta
	content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"
	name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta content="email=no" name="format-detection">
<title>易迹</title>

<link type="image/x-icon" rel="shortcut icon"
	href="<?php echo RES;?>/images/icon.jpg">

<!--引入的css文件begin-->
<link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
<link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
<link rel="stylesheet" href="<?php echo RES;?>/css/style.css">
<!--引入的css文件end-->

<!--引入的jquery文件begin-->
<script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
<script src="<?php echo RES;?>/js/boston.js"></script>

<style>
#form .zc-sf {
	border: 1px solid #fff;
	height: 3rem;
	line-height: 3rem;
	margin-top: 1rem;
	padding: 0 0.5rem;
	color: #fff;
}

#form .zc-sf input[type='radio'] {
	width: 10% !important;
	border: none;
	box-sizing: border-box;
	height: auto;
	padding-left: 0;
	line-height: 0rem;
	display: none;
}

#form .zc-sf label span {
	width: 1.2rem;
	height: 1.2rem;
	background: #fff;
	border-radius: 50%;
	display: inline-block;
	padding: 0;
	margin-right: 0.5rem;
}

#form .zc-sf label.on span {
	background-image: url("<?php echo RES;?>/images/dui.png");
	background-repeat: no-repeat;
	background-position: center center;
	background-size: 100%;
}

#form .zc-sf label {
	margin-right: 0.5rem;
}

.zc-span {
	margin-right: 40%;
}

#form .problem-module .problem-module-2.input-padding {
	padding-left: 0;
}

.problem-module-1 p {
	font-size: 1.1rem;
}

.zc-h4 h4 {
	border-bottom: 1px dotted #fff;
}

.zc-h4 p {
	color: #fff;
}

.pef-p {
	border-bottom: 0 !important;
}

/*----3-20----*/
.zc-module {
	position: relative;
}

.zc-module h4 {
	text-align: left;
	padding-left: 1rem;
	padding-right: 1rem;
	border: 0;
}

.zc-module h4 a {
	float: right;
	color: #fff;
	font-size: 1rem;
}

.zc-module {
	border: 1px solid #fff;
	margin: 1rem 0;
}

#form .zc-sf {
	padding: 0.5rem 0;
	border: 0;
}

#zc-module-1, #zc-module-2 {
	padding: 0 1rem;
	border-top: 1px dotted #fff;
}

/*---3-23---*/
p.p-title{
	line-height: 2;
}
p.p-title-3.p-title{
	text-align: left;
	font-size: 1.2rem;
	line-height: 1.5;
}
p.p-title-3.p-title span{
	font-size: 0.8rem;
}


.title-content{
	padding: 0 0.5rem;
}
</style>


</head>
<body style="background: #00a8d5">
	<div
		style="position: absolute; width: 100%; height: 100%; z-index: -1;">
		<img src="<?php echo RES;?>/images/nw-bj.jpg"
			style="width: 100%; height: 100%">
	</div>
	<div class="main">
		<div class="case_container" id="height" style="margin-bottom: 4rem">
			<ul class="zc-list">
				<li class="active"><a href="javascript:void (0);">哮喘自测</a></li> |
				<li><a href="javascript:void (0);">历史记录</a></li>
			</ul>

			<div class="zc-content" style="display: block">
				<form action="" method="post" id="form">
					<div class="pef">
						<span>PEF</span> <input type="text" name="pef" placeholder="PEF值">
					</div>
					<div class="zc-sf" style="height: auto">
						<div id="zc-content">
							<div class="zc-module zc-h4 clearfix">
								<h4>
									哮喘控制测试(ACT问卷)<a href="javascript:show()" id="ks">开始测试+</a>
								</h4>
								<div class="title-content">
									<p class="p-title-1 p-title">
										哮喘多大程度上影响了您的生活?<br/>
										使用免费、保密的哮喘评估问卷来了解:<br/>
										本测试已获得临床公认，并已得到验证1。全世界的医师都在使用这一测试评估患者的哮喘病情是否已得到控制.
										请选择您认为最合适的答案来完成该测试.
										设计本问卷是为了帮助描述您的哮喘状况，以及哮喘对您的感觉和您进行各种活动的能力.
										的影响。请选择最符合您情况来完成问卷。
									</p>
									<p class="p-title-2 p-title">
										Asthma Control Test (ACT™) © 2012 QualityMetric Incorporated. All rights reserved.<br/>
										ACT™ is a trademark of QualityMetric Incorporated.
									</p>
									<p class="p-title-3 p-title">
										<span style="font-size: 1.2rem">参考文献:</span><br/>
										<span class="p-title-4">Schatz, et al. Chest. 2012; 141:66-72.</span>
									</p>
								</div>
								<div id="zc-module-1" style="display:none;">
									<div class="problem-module">
										<div class="problem-module-1">
											<p>1.哮喘在多少时间影响日常生活（包括正常睡眠、外出行动、工作学习等）</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="1" value="A" id="number1-1">
											<label for="number1-1"><span></span>A.一直</label> <input
												type="radio" name="1" value="B" id="number1-2"> <label
												for="number1-2"><span></span>B.多次</label> <input
												type="radio" name="1" value="C" id="number1-3"> <label
												for="number1-3"><span></span>C.有时</label><br /> <input
												type="radio" name="1" value="D" id="number1-4"> <label
												for="number1-4"><span></span>D.很少</label> <input
												type="radio" name="1" value="E" id="number1-5"> <label
												for="number1-5"><span></span>E.无</label>
										</div>
									</div>
									<div class="problem-module">
										<div class="problem-module-1">
											<p>2.有多少次呼吸困难?</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="2" value="A" id="number2-1">
											<label for="number2-1"><span></span>A.>1次/天</label> <input
												type="radio" name="2" value="B" id="number2-2"> <label
												for="number2-2"><span></span>B.1次/天</label> <input
												type="radio" name="2" value="C" id="number2-3"> <label
												for="number2-3"><span></span>C.3-6次/周</label><br /> <input
												type="radio" name="2" value="D" id="number2-4"> <label
												for="number2-4"><span></span>D.1-2次/月</label> <input
												type="radio" name="2" value="E" id="number2-5"> <label
												for="number2-5"><span></span>E.无</label>
										</div>
									</div>
									<div class="problem-module">
										<div class="problem-module-1">
											<p>3.有多少次因为哮喘导致夜间醒来或早上早醒?</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="3" value="A" id="number3-1">
											<label for="number3-1"><span></span>A.≥4晚/周</label> <input
												type="radio" name="3" value="B" id="number3-2"> <label
												for="number3-2"><span></span>B.2-3晚/周</label> <input
												type="radio" name="3" value="C" id="number3-3"> <label
												for="number3-3"><span></span>C.1晚/周</label><br /> <input
												type="radio" name="3" value="D" id="number3-4"> <label
												for="number3-4"><span></span>D.1-2晚/月</label> <input
												type="radio" name="3" value="E" id="number3-5"> <label
												for="number3-5"><span></span>E.无</label>
										</div>
									</div>
									<div class="problem-module">
										<div class="problem-module-1">
											<p>4.有多少次使用急救药物(如万托林)?</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="4" value="A" id="number4-1">
											<label for="number4-1"><span></span>A.≥3次/天</label> <input
												type="radio" name="4" value="B" id="number4-2"> <label
												for="number4-2"><span></span>B.2-3次/天</label> <input
												type="radio" name="4" value="C" id="number4-3"> <label
												for="number4-3"><span></span>C.1-2次/天</label><br /> <input
												type="radio" name="4" value="D" id="number4-4"> <label
												for="number4-4"><span></span>D.≤1次/天</label> <input
												type="radio" name="4" value="E" id="number4-5"> <label
												for="number4-5"><span></span>E.无</label>
										</div>
									</div>
									<div class="problem-module">
										<div class="problem-module-1">
											<p>5.对哮喘控制情况的自我评价</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="5" value="A" id="number5-1">
											<label for="number5-1"><span></span>A.未控制</label> <input
												type="radio" name="5" value="B" id="number5-2"> <label
												for="number5-2"><span></span>B.控制很差</label> <input
												type="radio" name="5" value="C" id="number5-3"> <label
												for="number5-3"><span></span>C.有所控制</label><br /> <input
												type="radio" name="5" value="D" id="number5-4"> <label
												for="number5-4"><span></span>D.控制良好</label> <input
												type="radio" name="5" value="E" id="number5-5"> <label
												for="number5-5"><span></span>E.完全控制</label>
										</div>
									</div>
								</div>
							</div>
							<div class="zc-module zc-h4 clearfix">
								<h4>
									哮喘严重程度测试<a href="javascript:show1()" id="ks1">开始测试+</a>
								</h4>
								<div id="zc-module-2" style="display:none;">
									<div class="problem-module">
										<div class="problem-module-1">
											<p>1.过去 6 个月,您因哮喘发作急诊或住院的次数</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="zc1" value=">1次" id="zc1-1">
											<label for="zc1-1"><span></span>A.>1次</label> <input
												type="radio" name="zc1" value="1次" id="zc1-2"> <label
												for="zc1-2"><span></span>B.1次</label> <input type="radio"
												name="zc1" value="没有" id="zc1-3"> <label for="zc1-3"><span></span>C.没有</label>
										</div>
									</div>

									<div class="problem-module">
										<div class="problem-module-1">
											<p>2.您是否长期使用口服激素(如强的松)?</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="zc2" value="是" id="zc2-1">
											<label for="zc2-1"><span></span>A.是</label> <input
												type="radio" name="zc2" value="否" id="zc2-2"> <label
												for="zc2-2"><span></span>B.否</label>
										</div>
									</div>
									<div class="problem-module">
										<div class="problem-module-1">
											<p>3.过去6个月,您是否有因为哮喘症状,短期服 用口服激素超过7天?</p>
										</div>
										<div class="problem-module-2 input-padding">
											<input type="radio" name="zc3" value="是" id="zc3-1">
											<label for="zc3-1"><span></span>A.是</label> <input
												type="radio" name="zc3" value="否" id="zc3-2"> <label
												for="zc3-2"><span></span>B.否</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<input type="button" onclick="tijiao();"
						style="font-size: 1.2rem; color: #1286af; background: #fff; border-radius: 3px; margin-top: 2rem; width: 100%; height: 3rem;"
						value="提交">
				</form>


			</div>

			<div class="zc-content" style="display: none; margin-bottom: 0">
				<?php if(is_array($ceshi)): foreach($ceshi as $key=>$v): ?><div class="jl-module">
					<div class="row">
						<div class="col-xs-4">
							<?php echo (date('m.d',$v["createtime"])); ?></div>
						<div class="col-xs-8">
							<?php if($v["pef"] != 0): ?><p>PEF:<?php echo ($v["pef"]); ?></p><?php endif; ?>
							<?php if($v["act"] != 0): ?><h4>ACT问卷（哮喘控制测试）</h4>
							<p>你当月的ACT测试得分:<?php echo ($v["act"]); ?>分</p>
							<p>
								哮喘情况:
								<?php if($v[act] < 20): ?>未控制 
								<?php elseif($v[act] > 25): ?> 良好控制 <?php else: ?> 部分控制<?php endif; ?>
							</p><?php endif; ?>
							<?php if($v["q_one"] != null): ?><h4>哮喘严重程度</h4>
							<p>过去6个月，您因哮喘发作急诊或住院的次数</p>
							<p><?php echo ($v["q_one"]); ?></p>
							<p>您是否长期使用口服激素（如强的松）？</p>
							<p><?php echo ($v["q_two"]); ?></p>
							<p>过去6个月，您是否有因为哮喘症状，短期服用口服激素超过 7 天？</p>
							<p><?php echo ($v["q_three"]); ?></p><?php endif; ?>
						</div>
					</div>
				</div><?php endforeach; endif; ?>
			</div>
		</div>
	</div>

	<div class="footer-fixed">
		<div class="col-xs-4">
			<a href="<?php echo U('Active/index');?>">顺易迹</a>
		</div>
		<div class="col-xs-4" id="nav-fixed">
			<a href="javascript:void (0);">活动天地</a>
		</div>
		<div class="col-xs-4">
			<a href="<?php echo U('User/center');?>">个人中心</a>
		</div>
	</div>
	<ul id="menu">
		<li><a
			href="<?php echo U('Active/zixun_list',array('name'=>'治疗原理'));?>">治疗原理</a></li>
		<li><a
			href="<?php echo U('Active/zixun_list',array('name'=>'疾病介绍'));?>">疾病介绍</a></li>
		<li><a href="<?php echo U('User/ceshi');?>">患者自测</a></li>
		<li><a href="<?php echo U('Active/zixun');?>">名医名院</a></li>
	</ul>
	<script>
    window.onload = function () {
        // gaoDu();
    }

    function gaoDu() {
        var _height1 = document.body.clientHeight;
        var _height2 = document.body.scrollHeight;
        var _case = document.getElementById('height');
        if (_height1 >= _height2) {
            _case.style.height = _height1 + 'px';
        } else {
            _case.style.height = _height2 + 'px';
        }
    }

    function h() {
        return
    }

    $(function () {
        $('ul.zc-list li a').click(function () {
            $('ul.zc-list li').removeClass('active');
            $(this).parent('li').addClass('active');
            _index = $(this).parent('li').index();
            $('.zc-content').css('display', 'none');
            $('.zc-content')[_index].style.display = 'block';
            var _height1 = $(window).height();
            var height3 = $(document).height();
            // setTimeout(h(),2000);
            console.log(_height1, height3);
            var _case = document.getElementById('height');


            if (_height1 >= height3) {
                _case.style.height = _height1 + 'px';
            } else {
                _case.style.height = 'auto';
            }


        })
    })
    /*setTimeout(function () {
     $(window).height();
     },500)*/

    $(function () {
        $('#form .zc-sf label').click(function () {
            var _height1 = $(window).height();
            var val = $(this).prev("input[type='radio']").prop('checked');
            $(this).prevAll().removeClass('on');
            $(this).nextAll().removeClass('on');
            var _text = $(this).prev('input').val();
            var _case = document.getElementById('height');
            if (!val) {
                $(this).addClass('on');
            }
            if (_text == 1) {
                $('#zc-content').css('display', 'block');
                _case.style.height = 'auto';
            } else if (_text == 2) {
                console.log(_height1);
                $('#zc-content').css('display', 'none');
                _case.style.height = _height1 + 'px';
                console.log(_height1);
            }
        })
    })
    $(function () {
        $('#form #zc-content label').click(function () {
            var val = $(this).prev("input[type='radio']").prop('checked');
            $(this).prevAll().removeClass('active');
            $(this).nextAll().removeClass('active');
            if (!val) {
                $(this).addClass('active');
            }
        })
    })

    function show() {
        document.getElementById("zc-module-1").style.display = "block";
        document.getElementById("ks").innerHTML = "收起-";
        document.getElementById("ks").href = "javascript:hide()";
    }
    function hide() {
        document.getElementById("zc-module-1").style.display = "none";
        document.getElementById("ks").innerHTML = "展开+";
        document.getElementById("ks").href = "javascript:show()";
    }
    function show1() {
        document.getElementById("zc-module-2").style.display = "block";
        document.getElementById("ks1").innerHTML = "收起-";
        document.getElementById("ks1").href = "javascript:hide1()";
    }
    function hide1() {
        document.getElementById("zc-module-2").style.display = "none";
        document.getElementById("ks1").innerHTML = "展开+";
        document.getElementById("ks1").href = "javascript:show1()";
    }
    function tijiao() {
        var pef = $("input[name=pef]").val();
        var act1 = $("input[name=1]:checked").val();
        var act2 = $("input[name=2]:checked").val();
        var act3 = $("input[name=3]:checked").val();
        var act4 = $("input[name=4]:checked").val();
        var act5 = $("input[name=5]:checked").val();
        var zc1 = $("input[name=zc1]:checked").val();
        var zc2 = $("input[name=zc2]:checked").val();
        var zc3 = $("input[name=zc3]:checked").val();
        if (!act1 && !act2 && !act3 && !act4 && !act5) {

        } else if (act1 && act2 && act3 && act4 && act5) {

        } else {
            alert("您的哮喘控制测试（ACT问卷）没有完成，请先完成");
            return false;
        }
        if (!zc1 && !zc2 && !zc3) {

        } else if (zc1 && zc2 && zc3) {

        } else {
            alert("您的哮喘严重程度测试没有完成，请先完成");
            return false;
        }
        if (!act1 && !act2 && !act3 && !act4 && !act5 && !zc1 && !zc2 && !zc3 && !pef) {
            alert("请输入PEF值或回答问卷");
            return false;
        }
        $("form").submit();
    }


</script>

</body>
</html>