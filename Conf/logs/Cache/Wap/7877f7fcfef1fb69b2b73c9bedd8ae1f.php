<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>易迹</title>

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo RES;?>/images/icon.jpg">

    <!--引入的css文件begin-->
    <link rel="stylesheet" href="<?php echo RES;?>/css/carousel.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/boston.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/style.css">

    <!--引入的css文件end-->

    <!--引入的jquery文件begin-->
    <script src="<?php echo RES;?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo RES;?>/js/boston.js"></script>


    <style>
        .consult_center_container .row{
            width: 100%;
            margin: 1rem 0;
        }
        #consult_center_container .row .col-xs-4{
            width: 34%;
            float: left;
            color: #fff;
            font-size: 1rem;
        	padding-left:0.5rem;
        	box-sizing: border-box;
        }
         #consult_center_container .row .col-xs-4:last-child{
	        width: 32%;
            float: left;
            color: #fff;
            font-size: 1rem;
        	padding-right:0.5rem;
        	box-sizing: border-box; 
         	text-align:right;  
         }
        .consult_center_container .module-my p{
            width: 100%;
            height: 3rem;
            background: #fff;
            border-radius: 3px;
            color: #157fad;
            text-align: center;
            line-height: 3rem;
            font-size: 1.2rem;
        }
        .consult_center_container .module-my {
           border: 1px solid #fff;
            border-radius: 3px;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        .fixed-img{
            position: fixed;
            width: 20%;
            left: 0;
            bottom: 0rem;
        }
        #my{
            margin-bottom: 10%;
        }
    </style>


</head>
<body style="background: #00a8d5">
<div style="position: absolute;width: 100%;height: 100%;z-index: -1;background-color: #f3f3f4">
    <img src="<?php echo RES;?>/images/nw-bj.jpg" style="width: 100%;height: 100%">
</div>
<div class="main">

    <div class="consult_center_container" id='consult_center_container'>
        <h3>名医名院</h3>
        <div id="my">
        	<?php if(is_array($diqu)): foreach($diqu as $key=>$v): ?><div class="module-my clearfix">
                <p><?php echo ($v["name"]); ?></p>
                <?php if(is_array($v[yiyuan])): foreach($v[yiyuan] as $key=>$val): ?><div class="row clearfix">
                    <div class="col-xs-4"><?php echo ($val["name"]); ?></div>
                    <div class="col-xs-4"><?php echo ($val["addr"]); ?></div>
                    <div class="col-xs-4"><?php echo ($val["tel"]); ?></div>
                </div><?php endforeach; endif; ?>
            </div><?php endforeach; endif; ?>
           <!-- <div class="module-my clearfix">
                <p>北京</p>
                <div class="row clearfix">
                    <div class="col-xs-4">北京中日友好医院</div>
                    <div class="col-xs-4">樱花东街2号</div>
                    <div class="col-xs-4">010-84205566</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">北京大学附属第一医院</div>
                    <div class="col-xs-4">西城区西什库大街8号</div>
                    <div class="col-xs-4">010-83572211</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">北京301医院</div>
                    <div class="col-xs-4">海淀区复兴路28号</div>
                    <div class="col-xs-4">010-68182255</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">京煤医院</div>
                    <div class="col-xs-4">门头沟区黑山大街18号</div>
                    <div class="col-xs-4">010-69842525</div>
                </div>
            </div>
             <div class="module-my clearfix">
                <p>上海</p>
                <div class="row clearfix">
                    <div class="col-xs-4">上海第十人民医院</div>
                    <div class="col-xs-4">闸北区延长中路301号</div>
                    <div class="col-xs-4">021-66300588</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">瑞金医院</div>
                    <div class="col-xs-4">黄浦区瑞金二路197号</div>
                    <div class="col-xs-4">021-64370045</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">复旦大学附属中山医院</div>
                    <div class="col-xs-4">徐汇区枫林路180号</div>
                    <div class="col-xs-4">021-64041990</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">上海胸科医院</div>
                    <div class="col-xs-4">长宁区淮海西路241号</div>
                    <div class="col-xs-4">021-22200000</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">上海华东医院</div>
                    <div class="col-xs-4">上海市静安区延安西路221号</div>
                    <div class="col-xs-4">021-62483180</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">长海医院</div>
                    <div class="col-xs-4">杨浦区长海路168号</div>
                    <div class="col-xs-4">021-31166666</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>广东省 广州市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">广州医科大学附属第一医院</div>
                    <div class="col-xs-4">越秀区沿江路151号</div>
                    <div class="col-xs-4">020-83062114</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">中山大学附属第六医院</div>
                    <div class="col-xs-4">天河区员村二横路19号</div>
                    <div class="col-xs-4">020-38254000</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">南方医院</div>
                    <div class="col-xs-4">广州大道北1838号</div>
                    <div class="col-xs-4">020-61641888</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>浙江省 杭州市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">浙江大学附属第二医院 总院</div>
                    <div class="col-xs-4">上城区解放路88号（总院）</div>
                    <div class="col-xs-4">0571-87783777</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">浙江大学附属第二医院 滨江分院</div>
                    <div class="col-xs-4">滨江区江虹路1511号（滨江分院）</div>
                    <div class="col-xs-4"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">浙江大学附属第一医院</div>
                    <div class="col-xs-4">上城区庆春路79号</div>
                    <div class="col-xs-4">0571-87236114</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">浙江大学医学院附属邵逸夫医院</div>
                    <div class="col-xs-4">经济技术开发区下沙路368号(下沙院区)</div>
                    <div class="col-xs-4">0571-86006030</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>山东省 青岛市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">青岛医学院附属医院 总院</div>
                    <div class="col-xs-4">市南区江苏路16号（总院）</div>
                    <div class="col-xs-4">0532-82911847（总）</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">青岛医学院附属医院 东部分院</div>
                    <div class="col-xs-4">崂山区海尔路59号(东部分院)</div>
                    <div class="col-xs-4">0532-82913225（东）</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>四川省 成都市，攀枝花市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">四川大学附属华西医院</div>
                    <div class="col-xs-4">武侯区国学巷37号</div>
                    <div class="col-xs-4">028-85422114</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">攀枝花中西医结合医院</div>
                    <div class="col-xs-4">市东区炳草岗桃源街27号</div>
                    <div class="col-xs-4">0812-3347772</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>重庆市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">新桥医院</div>
                    <div class="col-xs-4">沙坪坝区新桥正街183号</div>
                    <div class="col-xs-4">023-68755114</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">重庆医科大学第一附属医院</div>
                    <div class="col-xs-4">渝中区袁家岗友谊路1号</div>
                    <div class="col-xs-4">023-68811360</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>辽宁省 沈阳市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">中国医科大学附属第一医院</div>
                    <div class="col-xs-4">和平区南京街155号</div>
                    <div class="col-xs-4">024-83283333</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>陕西省 西安市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">第四军医大学西京医院</div>
                    <div class="col-xs-4">新城区长乐西路15号</div>
                    <div class="col-xs-4">029-84774114</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">第四军医大学唐都医院</div>
                    <div class="col-xs-4">灞桥区新寺路1号</div>
                    <div class="col-xs-4">029-84777777</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>福建省 泉州市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">福建大学第二附属医院</div>
                    <div class="col-xs-4">鲤城区中山北路34号</div>
                    <div class="col-xs-4">0595-22791140</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>甘肃省 兰州市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">甘肃省第二人民医院</div>
                    <div class="col-xs-4">城关区和政西街1号</div>
                    <div class="col-xs-4">0931-4922457</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>河北省 石家庄市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">河北胸科医院</div>
                    <div class="col-xs-4">桥东区胜利北街372号</div>
                    <div class="col-xs-4">0311-86911162</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>河南省 郑州市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">河南省人民医院</div>
                    <div class="col-xs-4">纬五路七号</div>
                    <div class="col-xs-4">0371-65580014</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>湖北省 武汉市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">武汉市中心医院</div>
                    <div class="col-xs-4">江岸区胜利街26号</div>
                    <div class="col-xs-4">027-82811080</div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-4">宜昌市中心医院</div>
                    <div class="col-xs-4">夷陵大道183号</div>
                    <div class="col-xs-4">0717-6486947</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>湖南省 长沙市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">湘雅大学第二附属医院</div>
                    <div class="col-xs-4">开福区人民中路139号</div>
                    <div class="col-xs-4">0731-85295888</div>
                </div>
            </div>
            <div class="module-my clearfix">
                <p>贵州省 贵阳市</p>
                <div class="row clearfix">
                    <div class="col-xs-4">贵州省人民医院</div>
                    <div class="col-xs-4">贵州省贵阳市中山东路83号</div>
                    <div class="col-xs-4">0851-85922979</div>
                </div>
            </div> -->
        </div>

    </div>
</div>
<div class="fixed-img">
    <a href="<?php echo U('Active/zixun_ask');?>"><img src="<?php echo RES;?>/images/zixun-icon.png" alt=""></a>
</div>
<div class="footer-fixed">
    <div class="col-xs-4"><a href="<?php echo U('Active/index');?>">顺易迹</a></div>
    <div class="col-xs-4" id="nav-fixed"><a href="javascript:void (0);">活动天地</a></div>
    <div class="col-xs-4"><a href="<?php echo U('User/center');?>">个人中心</a></div>
</div>
<ul id="menu">
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'治疗原理'));?>">治疗原理</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'疾病介绍'));?>">疾病介绍</a></li>
    <li><a href="<?php echo U('Active/zixun_list',array('name'=>'最新活动患者端'));?>">最新活动</a></li>
    <li><a href="<?php echo U('User/ceshi');?>">患者自测</a></li>
    <li><a href="<?php echo U('Active/zixun');?>">名医名院</a></li>
</ul>
</body>
</html>