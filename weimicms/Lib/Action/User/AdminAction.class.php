<?php
class AdminAction extends UserAction{
	public function _initialize(){
		parent::_initialize();
	}
	public function index(){
		$db=M('Users');
		$count=$db->count();
		$page=new Page($count,20);
		$list=$db->order('createtime desc')->limit($page->firstRow.','.$page->listRows)->select();
		$dbgroup=M('bl_group');
		foreach ($list as $key=>$val){
			$group=$dbgroup->find($val['hid']);
			$list[$key]['group']=$group['name'];
		}
		$show=$page->show();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}
	public function add(){
		if (IS_POST) {
			$_POST['createtime']=time();
			$_POST['password']=md5($_POST['password']);
			$_POST['createip']=get_client_ip();
			$data=$_POST;
			$db=D('Users');
			if ($db->create()) {
				if ($db->add($data)) {
					$this->success('添加成功！',U('Admin/index',array('token'=>$this->token)));
				}else{
					$this->error('添加失败');
				}
			}else{
				$this->error($db->getError());
			}
		}else{
			$group=M('bl_group');
			$glist=$group->where('status=1')->select();
			$this->assign('glist',$glist);
			$this->display();
		}
	}
	public function edit(){
		$db=D('Users');
		$data=$_POST;
		if (IS_POST){
			if ($db->create()) {
				if ($db->save($data)) {
					$this->success('修改成功！',U('Admin/index',array('token'=>$this->token)));
				}else{
					$this->error('修改失败');
				}
			}else{
				$this->error($db->getError());
			}
			
		}else{
			$id = $this->_get('id','intval',0);
			if (!$id||$id==1) {
				$this->error('参数错误');
			}
			$info=$db->find($id);
			$this->assign('info',$info);
			$group=M('bl_group');
			$glist=$group->order('id asc')->select();
			$this->assign('glist',$glist);
			$this->display();
		}
	}
	public function del(){
		$id = $this->_get('id','intval',0);
		if (!$id||$id==1) {
			$this->error('参数错误');
		}
		$res=M('Users')->delete($id);
		if ($res) {
			$this->success('删除成功！',U('Admin/index',array('token'=>$this->token)));
		}else{
			$this->error('删除失败');
		}
	}
}

?>