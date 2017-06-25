<?php
class LoginAction extends BaseAction{
	public function _initialize(){
		parent::_initialize();
	}
	public function index(){
		$this->display();
	}
	//用户登出
	public function logout(){
		session(null);
		session_destroy();
		unset($_SESSION);
		redirect(U('Login/index'));
	}
}

?>