<?php
class LotteryAction extends LotteryBaseAction{
	public function _initialize() {
		parent::_initialize();
		$this->canUseFunction('lottery');
	}
	public function piwik(){
		$this->success('跳转中...','piwik/index.php');
	}
	public function cheat(){
		parent::cheat();
		$this->display();
	}
	public function index(){
		$list=M('magic_config')->select();
		$this->assign('list',$list);
		$this->display();
	}
	public function sn(){
		$type=isset($_GET['type'])?intval($_GET['type']):1;
		parent::sn($type);
		$this->display();
	}
	public function add(){
		
		$this->display();
	}
	public function add_post(){
		if (!empty($_POST)){
			$re=M('magic_config')->add($_POST);
			if($re){
				$this->success("奖项添加成功！",U('index.php?g=User&m=Lottery&a=index'));
			}else {
				$this->error("奖项添加失败！",U('index.php?g=User&m=Lottery&a=add'));
			}
		}else{
			$this->error("请添加内容！");
		}
	}
	public function edit(){
		$list=M('magic_config')->where(array('id'=>$_GET['id']))->find();
		$this->assign('list',$list);
		$this->display();
	}
	public function edit_post(){
		$re=M("magic_config")->where(array('id'=>$_POST['id']))->save($_POST);
		if($re){
			$this->success("修改成功！",U('index.php?g=User&m=Lottery&a=index'));
		}else{
			$this->error("修改失败！");
		}
	}
	public function delete(){
		$re=M("magic_config")->where(array('id'=>$_GET['id']))->delete();
		if($re){
			$this->success("删除成功！");
		}else{
			$this->error("删除失败！");
		}
	}
	public function record(){
		$count = M('magic_record')->count();
		$page = new Page($count, 10);
		$this->assign('page', $page->show());
		$list=M('magic_record')->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
		foreach ($list as $k=>$v){
			$list[$k]['date']=date("Y-m-d H:i",$v['date']);
		}
		$this->assign('list',$list);
		$this->display();
	}
}


?>