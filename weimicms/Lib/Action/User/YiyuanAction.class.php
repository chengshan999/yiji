<?php
class YiyuanAction extends UserAction{
    //医院管理
    public function index(){
        $diqu=M("Yiyuan")->where("pid=0")->select();
        foreach ($diqu as $k=>$v){
            $q['name']=$v['name'];
            $q['yiyuan']=M("Yiyuan")->where("pid='{$v['id']}'")->select();
            $q['rowspan']=count($q['yiyuan']);
            $list[] = $q;
        }
        $this->assign('list',$list);
        $this->display();
        
        
        
    }
    
    //添加地区
    public function diqu_add(){
        if(IS_POST){
            $_POST['createtime']=time();
            $_POST['pid']=0;
            M("Yiyuan")->add($_POST);
            $this->success('添加成功',U("Yiyuan/index",array('name'=>'Yiyuan')));
        }else{
            $this->display();
        }
    }
    
    //添加医院
    public function yiyuan_add(){
      if(IS_POST){
          $_POST['createtime']=time();
          M("Yiyuan")->add($_POST);
          $this->success('添加成功',U("Yiyuan/index",array('name'=>'Yiyuan')));
      }else{
          $diqu=M("Yiyuan")->where('pid=0')->select();
          $this->assign('diqu',$diqu);
          $this->display();
      }
        
    }
    
    public function yiyuan_edit(){
        if(IS_POST){
            M("Yiyuan")->where("id='{$_POST['id']}'")->save($_POST);
            $this->success('修改成功',U("Yiyuan/index",array('name'=>'Yiyuan')));
        }else{
            $id=$_GET['id'];
            $diqu=M("Yiyuan")->where("pid=0")->select();
            $this->assign('diqu',$diqu);
            $yiyuan=M("Yiyuan")->where("id=$id")->find();
            $this->assign('yiyuan',$yiyuan);
            $this->display();
        }
    }
    
    //删除医院
    public function delete_yiyuan(){
        $id=$_GET['id'];
        M("Yiyuan")->where("id=$id")->delete();
        $this->success('删除成功',U("Yiyuan/index",array('name'=>'Yiyuan')));
    }
    
    
    public function yisheng(){
        $yisheng=M("Yisheng")->select();
        foreach ($yisheng as $k=>$v){
            $yisheng[$k]['yiyuan']=M("Yiyuan")->where("id='{$v['yiyuan_id']}'")->getField("name");
        }
        $this->assign('yisheng',$yisheng);
        $this->display();
    }
    
    //添加医生
    public function yisheng_add(){
        if(IS_POST){
            $_POST['createtime']=time();
            M("Yisheng")->add($_POST);
            $this->success('添加成功',U("Yiyuan/yisheng",array('name'=>'Yisheng')));
        }else{
            $diqu=M("Yiyuan")->where('pid=0')->select();
            foreach ($diqu as $k=>$v){
                $diqu[$k]['yiyuan']=M("Yiyuan")->where("pid='{$v['id']}'")->select();
            }
            $this->assign('diqu',$diqu);
            $this->display();
        }
    
    }
    
    //医生修改
    public function yisheng_edit(){
        if(IS_POST){
            M("Yisheng")->where("id='{$_POST['id']}'")->save($_POST);
            $this->success('修改成功',U("Yiyuan/yisheng",array('name'=>'Yisheng')));
        }else{
            $id=$_GET['id'];
            $data=M("Yisheng")->where("id=$id")->find();
            $this->assign('data',$data);
            $diqu=M("Yiyuan")->where('pid=0')->select();
            foreach ($diqu as $k=>$v){
                $diqu[$k]['yiyuan']=M("Yiyuan")->where("pid='{$v['id']}'")->select();
            }
            $this->assign('diqu',$diqu);
            $this->display();
        }
    }
    
    public function delete_yisheng(){
        $id=$_GET['id'];
        M("Yisheng")->where("id=$id")->delete();
        $this->success('删除成功',U("Yiyuan/yisheng",array('name'=>'Yisheng')));
    }
}