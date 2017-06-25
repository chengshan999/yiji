<?php
class WechatAction extends UserAction{
	public function _initialize(){
		parent::_initialize();
	}
	public function index(){
		$res=M('Wxuser')->find();
		$this->assign('info',$res);
		$this->display();
	}
	public function upsave(){
		S('wxuser_'.$this->token,NULL);
		M('Diymen_set')->where(array('token'=>$this->token))->save(array('appid'=>trim($this->_post('appid')),'appsecret'=>trim($this->_post('appsecret'))));
		//
		$db=D('Wxuser');
		if (isset($_POST['demoStep'])){
			$back='/bindHelp?id='.intval($_POST['id']);
		}else {
			$back='';
		}
		if($db->create()===false){
			$this->error($db->getError());
		}else{
			$id=$db->save();
			if($id){
				if (isset($_POST['demoStep'])){
					header('Location:'.$this->siteUrl.U('Index/bindHelp',array('id'=>intval($_POST['id']))));
				}else {
					$this->success('操作成功',U('Wechat/index'));
				}
	
			}else{
				$this->error('操作失败',U('Wechat/index'));
			}
		}
	
	}
	public function apiInfo(){
		$thisWx=apiInfo::info($this->user['id'],intval($_GET['id']));
		$this->assign('info',$thisWx);
		$fuwu = FALSE;
		if (is_file($_SERVER['DOCUMENT_ROOT']."/weimicms/Lib/Action/Fuwu/FuwuAction.class.php")) {
			$fuwu = TRUE;
		}
		$this->assign('fuwu',$fuwu);
		$this->display();
	}
}

?>