<?php
class BisaiAction extends UserAction{
    public function index(){
        if($_POST){
            foreach($_POST['sort'] as $k=>$v){
                M("Bl_bisai")->where("id='$k'")->save(array("sort"=>$v));
            }
            foreach($_POST['type'] as $k=>$v){
                M("Bl_bisai")->where("id='$k'")->save(array("type"=>$v));
            }
            $this->success("成功");
        }else{
            $data=M("Bl_bisai")->select();
            $this->assign("data",$data);
            $this->display();
        }
    }
    
    public function addproduct(){
        if($_POST){
            foreach ($_POST['color'] as $k=>$v){
                $sale_info[$k]['color']=$_POST['color'][$k];
                $sale_info[$k]['kucun']=$_POST['kucun'][$k];
                $sale_info[$k]['price']=$_POST['price'][$k];
            }
            foreach ($sale_info as $k=>$v){
                if(!$v['color'] and !$v['kucun'] and !$v['price']){
                    unset($sale_info[$k]);
                }
            }
             if($_FILES){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=90000000;
                $upload->allowType=array('image/png','image/jpg','image/jpeg');
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $k=>$file){
                        $_POST[$file['key']][$k]=$file['savepath'].$file['savename'];
                    }
        
                }
            } 
            $_POST['type']=M("Pinpai")->where("id='{$_POST['type_id']}'")->getField("name");
            $_POST['jiangshi']=M("Jiangshi")->where("id='{$_POST['jiangshi_id']}'")->getField("name");
            $_POST['createtime']=time();
            $_POST['num']=0;
            $db=M("Bl_bisai");
            $re=$db->add($_POST);
            if($re){
                $this->success("保存成功",U('Bisai/index',array('name'=>'Bisai')));
            }else {
                $this->error("系统错误");
            }
        }else{
            $jiangshi=M("Jiangshi")->select();
            $this->assign('jiangshi',$jiangshi);
            $list=M("Pinpai")->where("type='kecheng'")->select();
            foreach ($list as $k=>$v){
                if($v['pid']!=0){
                    $list[$k]['name']=M("Pinpai")->where("id='{$v['pid']}'")->getField('name');
                    $list[$k]['type']=$v['name'];
                }
            }
            $this->assign('list',$list);
            $id=$_GET['id'];
            $data=M("Bl_bisai")->where("id='$id'")->find();
            $this->assign("id",$id);
            $this->assign("data",$data);
            $this->display();
        }
    }
  
    
    public function update(){
        if($_POST){
             if($_FILES){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=90000000;
                $upload->allowType=array('image/png','image/jpg','image/jpeg');
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $k=>$file){
                        $_POST[$file['key']][$k]=$file['savepath'].$file['savename'];
                    }
                }
            }
            $db=M("Bl_bisai");
            $_POST['type']=M("Pinpai")->where("id='{$_POST['type_id']}'")->getField("name");
            $_POST['jiangshi']=M("Jiangshi")->where("id='{$_POST['jiangshi_id']}'")->getField("name");
            $re=$db->where("id='{$_POST['id']}'")->save($_POST);
            if($re){
                $this->success("保存成功",U('Bisai/index',array('name'=>'Bisai')));
            }else {
                $this->error("未修改内容");
            }
        }else{
            $jiangshi=M("Jiangshi")->select();
            $this->assign('jiangshi',$jiangshi);
            $list=M("Pinpai")->where("type='kecheng'")->order('pid asc')->select();
            foreach ($list as $k=>$v){
                if($v['pid']!=0){
                    $list[$k]['name']=M("Pinpai")->where("id='{$v['pid']}'")->getField('name');
                    $list[$k]['type']=$v['name'];
                }
            }
            $this->assign('list',$list);
            $id=$_GET['id'];
            $data=M("Bl_bisai")->where("id='$id'")->find();
            $data['sale_info']=json_decode($data['sale_info'],true);
            $data['photo']=json_decode($data['photo'],true);
            $data['photo_canshu']=json_decode($data['photo_canshu'],true);
            $this->assign('canshu_num',count($data['photo_canshu']));
            $this->assign("id",$id);
            $this->assign("data",$data);
            $this->display();
        }
    }
    
    //删除图片
    function unset_pic(){
        $pic=$_POST['pic'];
        $pic=str_replace(C("site_url"), ".", $pic);
        unlink($pic);
    }
    
    
    
    //删除产品
    public function delete(){
        $id=$_GET['id'];
        M("Bl_bisai")->where("id=$id")->delete();
        $this->success('删除成功',U("index",array("name"=>"Product")));
    }
    
    public function taocan(){
        $list=M("Pinpai")->where("type='bisai'")->select();
        foreach ($list as $k=>$v){
            if($v['pid']!=0){
                $list[$k]['name']=M("Pinpai")->where("id='{$v['pid']}'")->getField('name');
                $list[$k]['type_name']=$v['name'];
            }
        }
        $this->assign('list',$list);
        $this->display();
    }
    
    //添加
    public function taocan_add(){
        if(IS_POST){
            $_POST['type']='bisai';
            M("Pinpai")->add($_POST);
            $this->success("修改成功",U("taocan",array('name'=>'Bisai_taocan')));
        }else{
            $pinpai=M("Pinpai")->where("pid=0 and type='bisai'")->select();
            $this->assign('pinpai',$pinpai);
            $this->display();
        }
    }
    
    //修改
    public function taocan_edit(){
        if(IS_POST){
            $_POST['type']='bisai';
            $id=$_POST['id'];
            $re=M("Pinpai")->where("id='$id'")->save($_POST);
            $this->success("修改成功",U("taocan",array('name'=>'Bisai_taocan')));
        }else{
            $pinpai=M("Pinpai")->where("pid=0 and type='bisai'")->select();
            $this->assign('pinpai',$pinpai);
            $id=$_GET['id'];
            $data=M("Pinpai")->where("id='$id'")->find();
            $this->assign('data',$data);
            $this->display();
        }
    }
    
    //积分商城
    public function point(){
        $data=M("Point")->select();
        $this->assign('data',$data);
        $this->display();
    }
    
    //积分商城商品添加
    public function point_add(){
        if(IS_POST){
            if($_FILES['pic']['error']!=4 && ($_FILES!=null)){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=9000000;
                $upload->allowType=array('image/png','image/jpg','image/jpeg');
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $file){
                        $_POST[$file['key']]=$file['savepath'].$file['savename'];
                    }
                }
            }
            M("Point")->add($_POST);
            $this->success("添加成功",U("point",array('name'=>'point')));
        }else{
            $this->display();
        }
    }
    
    //积分商城产品修改
    public function point_edit(){
        if(IS_POST){
            if($_FILES['pic']['error']!=4 && ($_FILES!=null)){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=9000000;
                $upload->allowType=array('image/png','image/jpg','image/jpeg');
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $file){
                        $_POST[$file['key']]=$file['savepath'].$file['savename'];
                    }
                }
            }
            $id=$_POST['id'];
            $re=M("Point")->where("id='$id'")->save($_POST);
            $this->success("修改成功",U("point",array('name'=>'point')));
        }else{
            
            $id=$_GET['id'];
            $data=M("Point")->where("id='$id'")->find();
            $this->assign('data',$data);
            $this->display();
        }
    }
    
    //积分商城商品删除
    public function point_delete(){
        $id=$_GET['id'];
        M("Point")->where("id=$id")->delete();
        $this->success('删除成功',U("point",array("name"=>"point")));
    }
    
 
    
}