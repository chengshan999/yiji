<?php
/**
 *首页幻灯片回复
**/
class FlashsAction extends UserAction{
	public $tip;
	public function _initialize(){
 		parent::_initialize();
		$this->tip=2;
 		$this->assign('tip',$this->tip);
	}
	public function index(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		$db=M('Flash');
		//tip区分是幻灯片还是背景图
		$tip=$this->tip;
		$where['uid']=session('uid');
		if(session('token')==null){
		    $token=$_GET['token'];
		    session('token',$token);
		}
		$where['token']=session('token');
		
		$where['tip']=$tip;
		$count=$db->where($where)->count();
		$page=new Page($count,25);
		$info=$db->where($where)->limit($page->firstRow.','.$page->listRows)->order('id DESC')->select();
		$this->assign('page',$page->show());
		$this->assign('info',$info);
		$this->assign('tip',$tip);
		$this->display();
	}
	public function add(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		$tip=$this->tip;
		$this->assign('tip',$tip);
		$this->display();
	}
	public function edit(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		$where['id']=$this->_get('id','intval');
		$where['uid']=session('uid');
		$res=M('Flash')->where($where)->find();
		$this->assign('info',$res);

		$tip=$this->tip;
		$this->assign('tip',$tip);
		$this->assign('id',$this->_get('id','intval'));
		$this->display();
	}
	public function del(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		$tip=$this->tip;
		$where['id']=$this->_get('id','intval');
		$where['token']=$this->token;
		if(D('Flash')->where($where)->delete()){
			$this->success('操作成功',U(MODULE_NAME.'/index',array('tip'=>$tip,'name'=>$name)));
		}else{
			$this->error('操作失败',U(MODULE_NAME.'/index',array('tip'=>$tip,'name'=>$name)));
		}
	}
	public function insert(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		$flash=M('Flash');
		$arr=array();
		$arr['token']=$this->token;
		$arr['img']=$this->_post('img');
		$arr['url']=$_POST['url'];
		$arr['info']=$this->_post('info');
		$arr['tip']=$this->tip;
		$flash->add($arr);
		$this->success('操作成功',U(MODULE_NAME.'/index',array('tip'=>$this->tip,'name'=>$name)));
	}
	public function upsave(){
		$flash=M('Flash');
		$name=$_GET['name'];
		$this->assign('name',$name);
		$id=$this->_get('id','intval');
		$tip=$this->tip;
		$arr=array();
		$arr['img']=$this->_post('img');
		$arr['url']=$_POST['url'];
		$arr['info']=$this->_post('info');
		$flash->where(array('id'=>$id))->save($arr);
		$this->success('操作成功',U(MODULE_NAME.'/index',array('tip'=>$this->tip,'name'=>$name)));
	}
	public function usort(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
	    $tip=$_GET['tip'];
	    $flash=M('Flash');
	    foreach ($_POST['udisplay'] as $k=>$v){
	        $data['display']=$v;
	        $data['sort']=$_POST['usort'][$k];
	        $flash->where("id='$k'")->save($data);
	    }
	    $this->success('操作成功',U(MODULE_NAME.'/index',array('tip'=>$tip,'name'=>$name)));
	}

}
?>