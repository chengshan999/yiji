<?php
class TongjiAction extends UserAction{
	public function _initialize() {
		parent::_initialize();
	}
	public function dazhuanpan($start_time,$stop_time){
		$data=M("Bl_jiaoyi")->where("type=3 and createtime>'$start_time' and createtime<'$stop_time' ")->select();
		foreach($data as $k=>$v){
			$money+=$v['money'];
		}
		$this->assign('dazhuanpan_money',$money);
	}
    public function zhuce($start_time,$stop_time){
    	
    	$zhuce_date=M("Wechat_group_list")->where("status>=2 and zhucetime>'$start_time' and zhucetime<'$stop_time'")->select();
    	
    	$zhuce_date=count($zhuce_date);
    	$this->assign('zhuce_date',$zhuce_date);
    }
    public function renzheng($start_time,$stop_time){
    	$renzheng_date=M("Wechat_group_list")->where("status=4 and renzhengtime>'$start_time' and renzhengtime<'$stop_time'")->select();
    	
    	$renzheng_date=count($renzheng_date);
    	$this->assign('renzheng_date',$renzheng_date);
    }
    public function hangyixian($start_time,$stop_time){
    	$hang_date=M("Bl_baodan")->where("productCode='NSHGGXN' and plan='planA' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	
    	$hang_date=count($hang_date);
    	$this->assign('hang_date',$hang_date);
    }
    public function hangyixianB($start_time,$stop_time){
    	$hangB_date=M("Bl_baodan")->where("productCode='NSHGGXN' and plan='planB' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($hangB_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	
    	$hangB_date=count($hangB_date);
    	$this->assign('hangB_date',$hangB_date);
    	$this->assign('hangB_money',$money);
    }
    
    public function laonianxian($start_time,$stop_time){
    	$laonian_date=M("Bl_baodan")->where("productCode='NGXLNRYWX' and plan='planA' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($laonian_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	$laonian_date=count($laonian_date);
    	$this->assign('laonian_date',$laonian_date);
    	$this->assign('laonain_money',$money);
    }
    
    public function shanzhili($start_time,$stop_time){
    	$shan_date=M("Bl_baodan")->where("productCode='NSZSZLJK' and plan='planA' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($shan_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	$shan_date=count($shan_date);
    	$this->assign('shan_date',$shan_date);
    	$this->assign('shan_money',$money);
    }
    
    public function meilirensheng($start_time,$stop_time){
    	$mei_date=M("Bl_baodan")->where("productCode='DL2502_73' and plan='planA' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($mei_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	$mei_date=count($mei_date);
    	$this->assign('mei_date',$mei_date);
    	$this->assign('mei_money',$money);
    }
    public function meilirenshengB($start_time,$stop_time){
    	$meiB_date=M("Bl_baodan")->where("productCode='DL2502_74' and plan='planB' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($meiB_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	$meiB_date=count($meiB_date);
    	$this->assign('meiB_date',$meiB_date);
    	$this->assign('meiB_money',$money);
    }
    public function anxinshanglv($start_time,$stop_time){
    	$anxin_date=M("Bl_baodan")->where("productCode='DL2502_76' and plan='planA' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($anxin_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	$anxin_date=count($anxin_date);
    	$this->assign('anxin_date',$anxin_date);
    	$this->assign('anxin_money',$money);
    }
    public function changyou($start_time,$stop_time){
    	$chang_date=M("Bl_baodan")->where("productCode='DL2502_77' and plan='planA' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($chang_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	$chang_date=count($chang_date);
    	$this->assign('chang_date',$chang_date);
    	$this->assign('chang_money',$money);
    }
    public function changyouB($start_time,$stop_time){
    	$changB_date=M("Bl_baodan")->where("productCode='DL2502_78' and plan='planB' and createtime>'$start_time' and createtime<'$stop_time'")->select();
    	foreach ($changB_date as $k=>$v){
    		$money+=$v['price'];
    	}
    	$changB_date=count($changB_date);
    	$this->assign('changB_date',$changB_date);
    	$this->assign('changB_money',$money);
    }
    public function index(){
    	$start_time = strtotime($_POST['start_time']);
    	$stop_time = strtotime($_POST['stop_time']);
    	if ($_POST['stop_time'] == null){
    		$stop_time = time();
    	}
    	$sto_time = date('m/d/Y',$stop_time);
    	if ($_POST['start_time'] == null){
    		$sta_time == '';
    	}else {
    		$sta_time = date('m/d/Y',$start_time);
    	}
    	
    	$this->assign('start_time',$sta_time);
    	$this->assign('stop_time',$sto_time);
    	$this->zhuce($start_time,$stop_time);
    	$this->renzheng($start_time,$stop_time);
    	$this->hangyixian($start_time,$stop_time);
    	$this->hangyixianB($start_time,$stop_time);
    	$this->laonianxian($start_time,$stop_time);
    	$this->shanzhili($start_time,$stop_time);
    	$this->meilirensheng($start_time,$stop_time);
    	$this->meilirenshengB($start_time,$stop_time);
    	$this->anxinshanglv($start_time,$stop_time);
    	$this->changyou($start_time,$stop_time);
    	$this->changyouB($start_time,$stop_time);
    	$this->dazhuanpan($start_time,$stop_time);
    	$this->display();
    }
}