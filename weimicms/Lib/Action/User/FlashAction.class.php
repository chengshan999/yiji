<?php
/**
 *首页幻灯片回复
**/
class FlashAction extends UserAction{
	public $tip;
	public function _initialize(){
		parent::_initialize();
	}
	public function index(){
		$db=M('Flash');
		$name=$_GET['name'];
		$this->assign('name',$name);
		//tip区分是幻灯片还是背景图
		$where['uid']=session('uid');
		
		$count=$db->where($where)->count();
		$page=new Page($count,25);
		$info=$db->where($where)->limit($page->firstRow.','.$page->listRows)->order('id DESC')->select();
		$this->assign('page',$page->show());
		$this->assign('info',$info);
		$this->display();
	}
	public function add(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		$this->display();
	}
	public function edit(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		$where['id']=$this->_get('id','intval');
		$where['uid']=session('uid');
		$res=M('Flash')->where($where)->find();
		$this->assign('info',$res);
		$this->assign('id',$this->_get('id','intval'));
		$this->display();
	}
	public function del(){
		$where['id']=$this->_get('id','intval');
		$where['token']=$this->token;
		if(D(MODULE_NAME)->where($where)->delete()){
			$this->success('操作成功',U(MODULE_NAME.'/index',array('name'=>"Flash")));
		}else{
			$this->error('操作失败',U(MODULE_NAME.'/index',array('name'=>"Flash")));
		}
	}
	public function insert(){
		$flash=M('Flash');
		$arr=array();
		$arr['token']=$this->token;
		$arr['img']=$this->_post('img');
		$arr['url']=$_POST['url'];
		$arr['info']=$this->_post('info');
		$arr['tip']=$this->_post('tip');
		$flash->add($arr);
		$this->success('操作成功',U(MODULE_NAME.'/index',array('name'=>"Flash")));
	}
	public function upsave(){
		$flash=M('Flash');
		$id=$this->_get('id','intval');
		$arr=array();
		$arr['img']=$this->_post('img');
		$arr['url']=$_POST['url'];
		$arr['info']=$this->_post('info');
		$flash->where(array('id'=>$id))->save($arr);
		$this->success('操作成功',U(MODULE_NAME.'/index',array('tip'=>$this->tip,'name'=>"Flash")));
	}
	public function usort(){
	    $tip=$_GET['tip'];
	    $flash=M('Flash');
	    foreach ($_POST['udisplay'] as $k=>$v){
	        $data['display']=$v;
	        $data['sort']=$_POST['usort'][$k];
	        $flash->where("id='$k'")->save($data);
	    }
	    $this->success('操作成功',U(MODULE_NAME.'/index',array('name'=>"Flash")));
	}

}
?>