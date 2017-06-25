<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Hello, World</title>  
<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#l-map{height:100%;width:100%;}
		#allmap{height:0%;}
		#r-result,#r-result table{width: 100%;
    height: 40%;
    overflow: scroll;}
		.button{position:absolute;right:5%;bottom:5%;color:#111;background:#F8F8F8;font-size:14px;padding:2px 5px;;border-radius:5px;border:1px solid #aaa;}
	</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=AcLehAQVKXteyB7LRWyUbZwEsREYjzFQ"></script>
	<script type="text/javascript" src="/tpl/Pc/default/common/js/jquery-1.12.3.js"></script>
</head>  
 
<body>  
<div id="allmap"></div>
<div id="l-map"></div>
<div class="button">显示路线</div>
<div id="r-result" style="display:none;"></div>
<script type="text/javascript">

$('.button').click(function(){
	if($(this).text()=='收起'){
		$("#l-map").css('height','100%');
		$("#r-result").css('display','none');
		$(this).text('显示路线');
	}else{
		$("#l-map").css('height','60%');
		$("#r-result").css('display','block');
		$(this).text('收起');
	}
	
})

//实例化对象
var point_number="<?php echo count($data[point]);?>";
var slist = "<?php echo urlencode(json_encode($data['point']));?>";
var list = eval(decodeURIComponent(slist));

var slists = "<?php echo urlencode(json_encode($point));?>";
var lists = eval(decodeURIComponent(slists));

var map = new BMap.Map("l-map");          // 创建地图实例  
var point = new BMap.Point(list[0]['lt'], list[0]['rt']);  // 创建点坐标  
map.centerAndZoom(point, 16);                 // 初始化地图，设置中心点坐标和地图级别  


var maps = new BMap.Map("allmap");          // 创建地图实例  
var point_a = new BMap.Point(list[0]['lt'], list[0]['rt']);  // 创建点坐标  
maps.centerAndZoom(point, 16);                 // 初始化地图，设置中心点坐标和地图级别  

//创建已经标注的点
function addMarker(point,i){
  var marker = new BMap.Marker(point);
  map.addOverlay(marker);
  var label = new BMap.Label(i+1,{offset:new BMap.Size(3,0)});
  label.setStyle({
      color: "#fff",
      fontSize: "16px",
      backgroundColor: "0.05",
      border: "0",
      fontWeight: "bold"
  });
  marker.setLabel(label);
	
}

for (var i = 0; i < point_number; i ++) {
	var point = new BMap.Point(list[i]['lt'],list[i]['rt']);
	addMarker(point,i);
}

//控件
var navigationControl = new BMap.NavigationControl({
// 靠左上角位置
anchor: BMAP_ANCHOR_TOP_LEFT,
// LARGE类型
type: BMAP_NAVIGATION_CONTROL_LARGE,
// 启用显示定位
enableGeolocation: true
});
map.addControl(navigationControl);
// 添加定位控件
var geolocationControl = new BMap.GeolocationControl();
geolocationControl.addEventListener("locationSuccess", function(e){
// 定位成功事件
var address = '';
address += e.addressComponent.province;
address += e.addressComponent.city;
address += e.addressComponent.district;
address += e.addressComponent.street;
address += e.addressComponent.streetNumber;
alert("当前定位地址为：" + address);
});
geolocationControl.addEventListener("locationError",function(e){
// 定位失败事件
alert(e.message);
});
map.addControl(geolocationControl);


// //定义集合用来存放沿线的坐标值
// var chartData = [];
// $.each(lists,function(i,v){
// 	if(i!=(lists.length-1)){
// 		var p1 = new BMap.Point(lists[i]['lt'],lists[i]['rt']);
// 		var p2 = new BMap.Point(lists[i+1]['lt'],lists[i+1]['rt']);
// 		var walking = new BMap.WalkingRoute(maps, {
// 			renderOptions:{map: maps, autoViewport: true},
// 		});
// 		walking.search(p1, p2);
// 		//划线
// 		walking.setSearchCompleteCallback(function (rs) {
// 		    var pts = walking.getResults().getPlan(0).getRoute(0).getPath();
// 		    console.log(pts);
// 		    for (var i = 0; i < pts.length; i++) {
// 		        chartData.push(new BMap.Point(pts[i].lat, pts[i].lng));
		        
// 		    }
// 		});
		
// 	}
	
// })
var jindu="<?php echo ($jindu); ?>";
var jindu2=parseFloat(jindu)+1;
var p1 = new BMap.Point(list[jindu]['lt'],list[jindu]['rt']);
var p2 = new BMap.Point(list[jindu2]['lt'],list[jindu2]['rt']);
var walking = new BMap.WalkingRoute(maps, {
	renderOptions:{map: map, panel: "r-result", autoViewport: true},
});
walking.search(p1, p2);

//对坐标点重新定义
function a(){
	var chartData=[];
	var jindu="<?php echo ($jindu); ?>";
	$.ajax({
		url:"__URL__/get_point_detail",
		data:{num:jindu,id:1},
		dataType:"json",
		type:"POST",
		success:function(data){
			chartData=data;
			console.log(data);
			$.each(chartData, function (item, value) {
				
			var newChartData = [];
				$.each(value, function (k, v) {
				    newChartData.push(new BMap.Point(v['rt'],v['lt']));
				});
			if(item>jindu){
				var polyline = new BMap.Polyline(newChartData, { strokeColor: "#A6A6A6", strokeWeight: 7, strokeOpacity: 0.6 });
			}else{
				var polyline = new BMap.Polyline(newChartData, { strokeColor: "#39B1F5", strokeWeight: 7, strokeOpacity: 1 });
			}		
			map.addOverlay(polyline);
			});
			//把步行线路的坐标集合转化成折线
			
		}
	})
	
}
a();

</script>  
</body>  
</html>