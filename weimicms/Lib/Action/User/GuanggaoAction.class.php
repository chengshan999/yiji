<?php
class GuanggaoAction extends UserAction{
public $tip;
	public function _initialize(){
		parent::_initialize();
		if (isset($_GET['tip'])){
			$this->tip=$this->_get('tip','intval');
		}else {
			$this->tip=3;
		}
		$this->assign('tip',$this->tip);
	}
	public function index(){
		$db=M('Flash');
		//tip区分是幻灯片还是背景图
		$name=$_GET['name'];
		$this->assign('name',$name);
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
		$tip=$this->tip;
		$name=$_GET['name'];
		$this->assign('name',$name);
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
		if(D(MODULE_NAME)->where($where)->delete()){
			$this->success('操作成功',U(MODULE_NAME.'/index',array('tip'=>$tip)));
		}else{
			$this->error('操作失败',U(MODULE_NAME.'/index',array('tip'=>$tip)));
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
		$arr['title']=$_POST['title'];
		$arr['content']=$_POST['content'];
		$flash->add($arr);
		$this->success('操作成功',U(MODULE_NAME.'/index',array('tip'=>$this->tip,'name'=>$name)));
	}
	public function upsave(){
		$name=$_GET['name'];
		$this->assign('name',$name);
		$flash=M('Flash');
		$id=$this->_get('id','intval');
		$tip=$this->tip;
		$arr=array();
		$arr['img']=$this->_post('img');
		$arr['url']=$_POST['url'];
		$arr['info']=$this->_post('info');
		$arr['title']=$_POST['title'];
		$arr['content']=$_POST['content'];
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