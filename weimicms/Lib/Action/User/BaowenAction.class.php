<?php
class BaowenAction extends UserAction{
	public function _initialize(){
		parent::_initialize();
	}
	public function index(){
		$name=$_GET['name'];
		$this->assign('name',$name);
		$Baowen=M('Baowen');
		$count=$Baowen->count();
		$page=new Page($count,20);
		$this->assign('page',$page->show());
		$data=$Baowen->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
		$this->assign('data',$data);
		$this->display();
	}
	public function select(){
		$id=$_GET['id'];
		$Baowen=M('Baowen');
		$data=$Baowen->where(array('id'=>$id))->find();
		$data['content']=htmlspecialchars($data['content']);
		$data['content']=nl2br($data['content']);
		$this->assign('data',$data);
		$this->display();
	}
	 
}