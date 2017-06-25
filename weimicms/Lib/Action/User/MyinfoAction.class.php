<?php
class MyinfoAction extends UserAction{
    public function _initialize(){
        parent::_initialize();
    }
    
    //修改密码
    public function index(){
        if(IS_POST){
            if(!$_POST['password']){
                $this->error("请输入新密码");
            }
            $id=session("uid");
           $re=M("Users")->where("id=$id")->save(array('password'=>md5($_POST['password'])));
           if($re){
               $this->success("修改成功，请重新登录",U("Login/logout"));
           }else{
               $this->error("请稍后重试");
           }
        }else{
        $this->display();
        }
    }
}