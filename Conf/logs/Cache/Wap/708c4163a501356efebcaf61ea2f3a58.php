<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
		#l-map{height:100%;width:78%;float:left;border-right:2px solid #bcbcbc;}
		#r-result{height:100%;width:20%;float:left;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=AcLehAQVKXteyB7LRWyUbZwEsREYjzFQ"></script>
	<script type="text/javascript" src="/tpl/Pc/default/common/js/jquery-1.12.3.js"></script>
	<title>地图</title>
</head>
<body>
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(121.420495, 31.241983);
	map.centerAndZoom(point, 15);
	var marker = new BMap.Marker(point);// 创建标注
	//map.addOverlay(marker);             // 将标注添加到地图中
	marker.enableDragging();
	
	//右击删除
	var removeMarker = function(e,ee,marker){
		map.removeOverlay(marker);
	}

	//定位到本地
	function myFun(result){
		var cityName = result.name;
		map.setCenter(cityName);
	}
	var myCity = new BMap.LocalCity();
	myCity.get(myFun);
	var menu = new BMap.ContextMenu();
	var txtMenuItem = [
		{
			text:'创建起点',
			callback:function(a){
				console.log(a);
				var num;
				$.ajax({
					url:"__URL__/save_point",
					data:{lt:a.lng,rt:a.lat},
					type:"POST",
					async:false,
					success:function(data){
						num=data;
					}
				})
				var point = new BMap.Point(a.lng,a.lat);
			  	var marker = new BMap.Marker(point);
				map.addOverlay(marker);
				var label = new BMap.Label(num,{offset:new BMap.Size(20,-10)});
				marker.setLabel(label);
				//创建右键菜单
				var markerMenu=new BMap.ContextMenu();
				markerMenu.addItem(new BMap.MenuItem('删除',removeMarker.bind(marker)));
				marker.addContextMenu(markerMenu);
				
			}
		}
		
	];
	for(var i=0; i < txtMenuItem.length; i++){
		menu.addItem(new BMap.MenuItem(txtMenuItem[i].text,txtMenuItem[i].callback,100));
	}
	map.addContextMenu(menu);
	//创建右键菜单
	var markerMenu=new BMap.ContextMenu();
	markerMenu.addItem(new BMap.MenuItem('删除',removeMarker.bind(marker)));
	marker.addContextMenu(markerMenu);
	
	
</script>