<?php
class MapAction extends UserAction{
	public $token;
	public $apikey;
	public function _initialize() {
		parent::_initialize();
		$this->token=session('token');
		$this->assign('token',$this->token);
		$this->apikey=C('baidu_map_api');
		$this->assign('apikey',$this->apikey);
	}
	public function setLatLng(){
		if(IS_POST){
			
		}else{
			if (C('baidu_map')){
				$this->display();
			}else {
				$amap=new amap();
				$this->assign('key',$amap->key);
				$this->display('setLatLng_amap');
			}
		}
	}
	//公司静态地图
	public function staticCompanyMap(){
		//店铺信息
		$company_model=M('Company');
		$where=array('token'=>$this->token);
		$companies=$company_model->where($where)->order('isbranch ASC')->select();
		//
		if ($companies){
			$lngLatStr='';
			$numStr='';
			$i=1;
			$sep='';
			foreach ($companies as $c){
				$lngLatStr.=$sep.$c['longitude'].','.$c['latitude'];
				$numStr.=$sep.'m,'.$i;
				$sep='|';
				$i++;
			}
		}
		$imgUrl='http://api.map.baidu.com/staticimage?center='.$companies[0]['longitude'].','.$companies[0]['latitude'].'&width=400&height=300&zoom=11&markers='.$lngLatStr.'&markerStyles='.$numStr;
		return array(array(array($companies[0]['name'].'地图','点击查看详细',$imgUrl,$data['url'])),'news');
	}
	
	//地图活动
	public function index(){
	    $data=M("Bl_map")->select();
	    $this->assign('data',$data);
	    $this->display();
	}
	
	//保存创建的标记点
	public function save_point(){
	    $id=$_POST['id'];
	    $data=M("Bl_map")->where("id=$id")->find();
	    $point=json_decode($data['point'],true);
	    $point[]=array('lt'=>$_POST['lt'],'rt'=>$_POST['rt']);
	    $point_save=json_encode($point);
	    M("Bl_map")->where("id=$id")->save(array('point'=>$point_save));
	    echo count($point);
	}
	
	//删除点
	public function del_point(){
	    $id=$_POST['id'];
	    $data=M("Bl_map")->where("id=$id")->find();
	    $point=json_decode($data['point'],true);
	    foreach ($point as $k=>$v){
	        if($v['lt']==$_POST['lt'] and $v['rt']==$_POST['rt']){
	            
	        }else{
	            $point_new[]=$v;
	        }
	    }
	    $point_save=json_encode($point_new);
	    $re=M("Bl_map")->where("id=$id")->save(array('point'=>$point_save));
	    echo M("Bl_map")->getLastSql();
	}
	
	//活动添加页面
	public function huodong_add(){
	    if(IS_POST){
	        $_POST['createtime']=time();
	        M("Bl_map")->add($_POST);
	        $this->success("添加成功",U("index",array('name'=>'map')));
	    }else{
	        $this->display();
	    }
	}
	//活动修改页面
	public function huodong_edit(){
	    if(IS_POST){
	        $id=$_GET['id'];
	        M("Bl_map")->where("id=$id")->save($_POST);
	        $this->success('修改成功',U("index",array('name'=>'map')));
	    }else{
	        $id=$_GET['id'];
	        $data=M("Bl_map")->where("id=$id")->find();
	        $data['point']=json_decode($data['point'],true);
	        $this->assign('data',$data);
	        $this->display();
	    }
	}
	
	//活动删除
	public function huodong_del(){
	    $id=$_GET['id'];
	    M("Bl_map")->where("id=$id")->delete();
	    $this->success("删除成功",U("index",array('name'=>'map')));
	}
	
	//得到详细坐标
	public function get_point(){
	    $id=$_POST['id'];
	    $data=M("Bl_map")->where("id=$id")->find();
	    $data['point']=json_decode($data['point'],true);
	    $num=$_POST['num'];
	    $num_end=$num+1;
	    $re[0]=$data['point'][$num];
	    $re[1]=$data['point'][$num_end];
	    echo json_encode($re);
	}
	
	//保存点
	public function save_point_arr(){
	    $id=$_POST['id'];
	    $data=M("Bl_map")->where("id=$id")->find();
	    $data['point_detail']=json_decode($data['point_detail'],true);
	    $num=$_POST['num'];
	    $point_arr=htmlspecialchars_decode($_POST['point_arr']);
	    $point_arr=json_decode($point_arr);
	    $data['point_detail'][$num-1]=$point_arr;
	    $data['point_detail']=json_encode($data['point_detail']);
	    M("Bl_map")->where("id=$id")->save(array('point_detail'=>$data['point_detail']));
	}
	
	//保存前先清空点
	public function del_point_detail(){
	    $id=$_POST['id'];
	    $data=M("Bl_map")->where("id=$id")->save(array('point_detail'=>""));
	}
}


?>