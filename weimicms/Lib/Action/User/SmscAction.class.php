<?php
class SmscAction extends UserAction{
    public function _initialize() {
        parent::_initialize();
    }
    public function index(){
        $list=M("Sms")->select();
        $this->assign('list',$list);
        $this->display();
    }
    //添加短信用户
    public function add(){
        if(IS_POST){
            M("Sms")->add($_POST);
            $this->success("修改成功",U("index"));
        }else{
            $this->display();
        }
    }
    
    //修改
    public function edit(){
        if(IS_POST){
            $id=$_POST['id'];
            $re=M("Sms")->where("id='$id'")->save($_POST);
            $this->success("修改成功",U("index"));
        }else{
            $id=$_GET['id'];
            $data=M("Sms")->where("id='$id'")->find();
            $this->assign('data',$data);
            $this->display();
        }
    }
}