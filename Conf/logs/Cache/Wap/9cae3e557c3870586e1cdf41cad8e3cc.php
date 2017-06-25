<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>Boston Scientific</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>//css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>//css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>//css/style.css">
    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>

    <style>
       #form .zc-sf{
            border: 1px solid #fff;
            height: 3rem;
            line-height: 3rem;
            margin-top: 1rem;
            padding: 0 0.5rem;
           color: #fff;
        }
       #form .zc-sf input[type='radio']{
            width:10% !important;
            border: none;
            box-sizing: border-box;
            height: auto;
            padding-left: 0;
            line-height: 0rem;
           display: none;
        }
       #form .zc-sf label span{
           width: 1.2rem;
           height: 1.2rem;
           background: #fff;
           border-radius: 50%;
           display: inline-block;
           padding: 0;
           margin-right: 0.5rem;

       }
       #form .zc-sf label.on span{
           background-image: url("<?php echo RES;?>/images/dui.png");
           background-repeat: no-repeat;
           background-position: center center;
           background-size: 100%;

       }
       #form .zc-sf label {
           margin-right: 0.5rem;

       }
        .zc-span{
            margin-right: 40%;
        }
       #form .problem-module .problem-module-2.input-padding{
           padding-left: 0;

       }
        .problem-module-1 p{
            font-size: 1.1rem;
        }
        .zc-h4 h4{
            border-bottom: 1px dotted #fff;

        }
       .zc-h4 p{
           color: #fff;
       }
        .pef-p{
            border-bottom: 0 !important;
        }
    </style>




</head>
<body>
<div class="main" style="overflow: scroll;">
    <div class="case_container" id="height">
        <ul class="zc-list">
            <li class="active"><a href="javascript:void (0);">哮喘自测</a></li>
            |
            <li><a href="javascript:void (0);">历史记录</a></li>
        </ul>

        <div class="zc-content" style="display: block">
            <form action="" id="form">
                <div class="pef">
                    <span>PEF</span>
                    <input type="text" placeholder="PEF值">
                </div>
                <div class="zc-sf">
                    <div>
                        <span class="zc-span">是否进行哮喘自测</span>
                        <input type="radio" name="xz" id="xz1" value="1">
                        <label for="xz1" ><span></span><b>是</b></label>
                        <input type="radio" name="xz" id="xz2" value="2">
                        <label for="xz2" ><span></span><b>否</b></label>
                    </div>
                </div>
                <div id="zc-content" style="display: none">
                    <div class="zc-module zc-h4" >
                        <h4>ACT问卷（哮喘控制测试）</h4>
                        <p>提示：请您回顾过去四周的情况回答一下问题  （A. 1分 B. 2分 C. 3分 D. 4分 E. 5分）</p>
                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>1.哮喘在多少时间影响日常生活（包括正常睡眠、外出行动、工作学习等）</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="number1" id="number1-1">
                                <label for="number1-1" ><span></span>A.一直</label>
                                <input type="radio" name="number1" id="number1-2">
                                <label for="number1-2"><span></span>B.多次</label>
                                <input type="radio" name="number1" id="number1-3">
                                <label for="number1-3" ><span></span>C.有时</label>
                                <input type="radio" name="number1" id="number1-4">
                                <label for="number1-4"><span></span>D.很少</label>
                                <input type="radio" name="number1" id="number1-5">
                                <label for="number1-5"><span></span>E.无</label>
                            </div>
                        </div>
                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>2.有多少次呼吸困难?</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="number2" id="number2-1">
                                <label for="number2-1" ><span></span>A.>1次/天</label>
                                <input type="radio" name="number2" id="number2-2">
                                <label for="number2-2"><span></span>B.1次/天</label>
                                <input type="radio" name="number2" id="number2-3">
                                <label for="number2-3" ><span></span>C.3-6次/周</label>
                                <input type="radio" name="number2" id="number2-4">
                                <label for="number2-4"><span></span>D.1-2次/月</label>
                                <input type="radio" name="number2" id="number2-5">
                                <label for="number2-5"><span></span>E.无</label>
                            </div>
                        </div>
                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>3.有多少次因为哮喘导致夜间醒来或早上早醒?</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="number3" id="number3-1">
                                <label for="number3-1" ><span></span>A.≥4晚/周</label>
                                <input type="radio" name="number3" id="number3-2">
                                <label for="number3-2"><span></span>B.2-3晚/周</label>
                                <input type="radio" name="number3" id="number3-3">
                                <label for="number3-3" ><span></span>C.1晚/周</label>
                                <input type="radio" name="number3" id="number3-4">
                                <label for="number3-4"><span></span>D.1-2晚/月</label>
                                <input type="radio" name="number3" id="number3-5">
                                <label for="number3-5"><span></span>E.无</label>
                            </div>
                        </div>
                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>4.有多少次使用急救药物(如万托林)?</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="number4" id="number4-1">
                                <label for="number4-1" ><span></span>A.≥3次/天</label>
                                <input type="radio" name="number4" id="number4-2">
                                <label for="number4-2"><span></span>B.2-3次/天</label>
                                <input type="radio" name="number4" id="number4-3">
                                <label for="number4-3" ><span></span>C.1-2次/天</label>
                                <input type="radio" name="number4" id="number4-4">
                                <label for="number4-4"><span></span>D.≤1次/天</label>
                                <input type="radio" name="number4" id="number4-5">
                                <label for="number4-5"><span></span>E.无</label>
                            </div>
                        </div>
                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>5.对哮喘控制情况的自我评价</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="number5" id="number5-1">
                                <label for="number5-1" ><span></span>A.未控制</label>
                                <input type="radio" name="number5" id="number5-2">
                                <label for="number5-2"><span></span>B.控制很差</label>
                                <input type="radio" name="number5" id="number5-3">
                                <label for="number5-3" ><span></span>C.有所控制</label>
                                <input type="radio" name="number5" id="number5-4">
                                <label for="number5-4"><span></span>D.控制良好</label>
                                <input type="radio" name="number5" id="number5-5">
                                <label for="number5-5"><span></span>E.完全控制</label>
                            </div>
                        </div>

                    </div>
                    <div class="zc-module zc-h4">
                        <h4>哮喘严重程度</h4>
                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>1.过去 6 个月,您因哮喘发作急诊或住院的次数</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="zc1" id="zc1-1">
                                <label for="zc1-1" ><span></span>A.>1次</label>
                                <input type="radio" name="zc1" id="zc1-2">
                                <label for="zc1-2"><span></span>B.1次</label>
                                <input type="radio" name="zc1" id="zc1-3">
                                <label for="zc1-3" ><span></span>C.没有</label>
                            </div>
                        </div>

                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>2.您是否长期使用口服激素(如强的松)?</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="zc2" id="zc2-1">
                                <label for="zc2-1" ><span></span>A.是</label>
                                <input type="radio" name="zc2" id="zc2-2">
                                <label for="zc2-2"><span></span>B.否</label>
                            </div>
                        </div>
                        <div class="problem-module">
                            <div class="problem-module-1">
                                <p>3.过去6个月,您是否有因为哮喘症状,短期服 用口服激素超过7天?</p>
                            </div>
                            <div class="problem-module-2 input-padding">
                                <input type="radio" name="zc3" id="zc3-1">
                                <label for="zc3-1" ><span></span>A.是</label>
                                <input type="radio" name="zc3" id="zc3-2">
                                <label for="zc3-2"><span></span>B.否</label>
                            </div>
                        </div>

                    </div>
                </div>

                <input type="submit" value="提交">
            </form>
            

        </div>

        <div class="zc-content" style="display:none;">
            <div class="jl-module">
                <div class="row">
                    <div class="col-xs-4">
                        1.22
                    </div>
                    <div class="col-xs-8">
                        <p>PEF:100</p>
                        <h4>ACT问卷（哮喘控制测试）</h4>
                        <p>你当月的ATC测试得分:17分</p>
                        <p>哮喘情况:未控制</p>
                        <h4>哮喘严重程度</h4>
                        <p>过去6个月，您因哮喘发作急诊或住院的次数 </p>
                        <p>>1次</p>
                        <p>您是否长期使用口服激素（如强的松）？</p>
                        <p>是</p>
                        <p>过去6个月，您是否有因为哮喘症状，短期服用口服激素超过 7 天？ </p>
                        <p>是</p>
                    </div>
                </div>
            </div>
            <div class="jl-module">
                <div class="row">
                    <div class="col-xs-4">1.22</div>
                    <div class="col-xs-8">
                        <p class="pef-p">PEF:100</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="footer-fixed">
    <div class="col-xs-4"><a href="<?php echo U('Active/index');?>">顺易迹</a></div>
    <div class="col-xs-4" id="nav-fixed"><a href="javascript:void (0);">活动天地</a></div>
    <div class="col-xs-4"><a href="<?php echo U('User/center');?>">个人中心</a></div>
</div>
<ul id="menu">
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'最新疗法'));?>">最新疗法</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'患者心声'));?>">患者心声</a></li>
    <li><a href="<?php echo U('User/ceshi');?>">哮喘自测</a></li>
    <li><a href="<?php echo U('Active/zixun');?>">在线咨询</a></li>
</ul>
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


    $(function () {
        $('ul.zc-list li a').click(function () {
            $('ul.zc-list li').removeClass('active');
            $(this).parent('li').addClass('active');
            _index = $(this).parent('li').index();
            $('.zc-content').css('display','none');
            $('.zc-content')[_index].style.display='block';
        })
    })


    $(function () {
        $('#form .zc-sf label').click(function () {
            var val=$(this).prev("input[type='radio']").prop('checked');
            $(this).prevAll().removeClass('on');
            $(this).nextAll().removeClass('on');
            var _text = $(this).prev('input').val();
            if(!val) {
                $(this).addClass('on');
            }
            var _case = document.getElementById('height');
            var _height2 = document.body.scrollHeight;
            if( _text == 1){
                $('#zc-content').css('display','block');
                _case.style.height = '100%';
            }else {
                $('#zc-content').css('display','none');
                _case.style.height = _height2 + 'px';
            }
        })
    })
    $(function () {
        $('#form #zc-content label').click(function () {
            var val=$(this).prev("input[type='radio']").prop('checked');
            $(this).prevAll().removeClass('active');
            $(this).nextAll().removeClass('active');
            if(!val) {
                $(this).addClass('active');
            }
        })
    })
</script>

</body>
</html>