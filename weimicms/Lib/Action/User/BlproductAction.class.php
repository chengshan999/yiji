<?php
class BlproductAction extends UserAction{
    public function index(){
        if($_POST){
            foreach($_POST['sort'] as $k=>$v){
                M("Bl_product_data")->where("id='$k'")->save(array("sort"=>$v));
            }
            foreach($_POST['type'] as $k=>$v){
                M("Bl_product_data")->where("id='$k'")->save(array("type"=>$v));
            }
            $this->success("成功");
        }else{
            $data=M("Bl_product_data")->select();
            $this->assign("data",$data);
            $this->display();
        }
    }
    
    public function addproduct(){
        if($_POST){
             if($_FILES['vedio']['error']!=4){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=90000000;
                $upload->allowTypes="";
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $k=>$file){
                        $_POST[$file['key']]=$file['savepath'].$file['savename'];
                    }
        
                }
            } 
            $_POST['type']=M("Pinpai")->where("id='{$_POST['type_id']}'")->getField("name");
            $_POST['jiangshi']=M("Jiangshi")->where("id='{$_POST['jiangshi_id']}'")->getField("name");
            $_POST['createtime']=time();
            $_POST['num']=0;
            $db=M("Bl_product_data");
            $re=$db->add($_POST);
            if($re){
                $this->success("保存成功",U('Blproduct/index',array('name'=>'Product')));
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
            $data=M("Bl_product_data")->where("id='$id'")->find();
            $this->assign("id",$id);
            $this->assign("data",$data);
            $this->display();
        }
    }
  
    
    public function update(){
        if($_POST){
             if($_FILES['vedio']['error']!=4){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=90000000;
                $upload->allowTypes='';
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $k=>$file){
                        $_POST['vedio']=$file['savepath'].$file['savename'];
                    }
                }
            }
            $db=M("Bl_product_data");
            $_POST['type']=M("Pinpai")->where("id='{$_POST['type_id']}'")->getField("name");
            $_POST['jiangshi']=M("Jiangshi")->where("id='{$_POST['jiangshi_id']}'")->getField("name");
            $re=$db->where("id='{$_POST['id']}'")->save($_POST);
            if($re){
                $this->success("保存成功",U('Blproduct/index',array('name'=>'Product')));
            }else {
                $this->error("未修改内容");
            }
        }else{
            $jiangshi=M("Jiangshi")->select();
            $this->assign('jiangshi',$jiangshi);
            $list=M("Pinpai")->where("pid=0 and type='kecheng'")->order('pid asc')->select();
            foreach ($list as $k=>$v){
    		    $list[$k]['fenlei']=M("Pinpai")->where("pid='{$v['id']}'")->select();
    		}
            $this->assign('list',$list);
            $id=$_GET['id'];
            $data=M("Bl_product_data")->where("id='$id'")->find();
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
        M("Bl_product_data")->where("id=$id")->delete();
        $this->success('删除成功',U("index",array("name"=>"Product")));
    }
    
    public function taocan(){
        $list=M("Pinpai")->where("type='kecheng'")->select();
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
            $_POST['type']='kecheng';
            M("Pinpai")->add($_POST);
            $this->success("修改成功",U("taocan",array('name'=>'taocan')));
        }else{
            $pinpai=M("Pinpai")->where("pid=0")->select();
            $this->assign('pinpai',$pinpai);
            $this->display();
        }
    }
    
    //修改
    public function taocan_edit(){
        if(IS_POST){
            $_POST['type']='kecheng';
            $id=$_POST['id'];
            $re=M("Pinpai")->where("id='$id'")->save($_POST);
            $this->success("修改成功",U("taocan",array('name'=>'taocan')));
        }else{
            $pinpai=M("Pinpai")->where("pid=0 and type='kecheng'")->select();
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
    
    //留学管理
    public function liuxue(){
        $aozhou=M("Liuxue_img")->where("type_name='澳洲游学'")->count();
        $hanguo=M("Liuxue_img")->where("type_name='韩国游'")->count();
        $kaiye=M("Liuxue_img")->where("type_name='开业典礼'")->count();
        $changjing=M("Liuxue_img")->where("type_name='发布会场景'")->count();
        $xinwen=M("Liuxue_img")->where("type_name='发布会新闻'")->count();
        $aozhou_big=M("Liuxue_img")->where("type_name='澳洲游学a'")->count();
        $hanguo_big=M("Liuxue_img")->where("type_name='韩国游a'")->count();
        $kaiye_big=M("Liuxue_img")->where("type_name='开业典礼a'")->count();
        $changjing_big=M("Liuxue_img")->where("type_name='发布会场景a'")->count();
        $xinwen_big=M("Liuxue_img")->where("type_name='发布会新闻a'")->count();
        $this->assign('aozhou',$aozhou);
        $this->assign('hanguo',$hanguo);
        $this->assign('kaiye',$kaiye);
        $this->assign('changjing',$changjing);
        $this->assign('xinwen',$xinwen);
        $this->assign('aozhou_big',$aozhou_big);
        $this->assign('hanguo_big',$hanguo_big);
        $this->assign('kaiye_big',$kaiye_big);
        $this->assign('changjing_big',$changjing_big);
        $this->assign('xinwen_big',$xinwen_big);
        $this->display();
    }
    
    //添加图片
    public function liuxue_add(){
        if(IS_POST){
            if($_FILES['pic']['error']!=4 && ($_FILES!=null)){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=90000000;
                $upload->allowType=array('image/png','image/jpg','image/jpeg');
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息.
                    
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $k=>$file){
                        $_POST[$file['key']][$k]=$file['savepath'].$file['savename'];
                    }
                }
                foreach ($_POST['pic'] as $v){
                    M("Liuxue_img")->add(array('type_name'=>$_POST['type_name'],'pic'=>$v));
                }
                $this->success("保存成功",U("liuxue",array('name'=>'liuxue')));
            }
        }else{
            $this->display();
        }
    }
    
    //修改留学
    public function liuxue_edit(){
        $type=$_GET['type_name'];
        $img=M("Liuxue_img")->where("type_name='$type'")->select();
        $type=str_replace('a','大图',$type);
        $this->assign('type',$type);
        $this->assign('img',$img);
        $this->display();
    }
    
    public function liuxue_time(){
        if(IS_POST){
            $type_name=$_POST['type_name'];
            $time=$_POST['time'];
            M("Liuxue_img")->where("type_name='$type_name'")->save(array('time'=>$time));
            $this->success('修改成功',U("liuxue",array('name'=>'liuxue')));
        }else{
            $time['aozhou']=M('Liuxue_img')->where("type_name='澳洲游学'")->limit('0,1')->getField('time');
            $time['hanguo']=M('Liuxue_img')->where("type_name='韩国游'")->limit('0,1')->getField('time');
            $time['kaiye']=M('Liuxue_img')->where("type_name='开业典礼'")->limit('0,1')->getField('time');
            $time['changjing']=M('Liuxue_img')->where("type_name='发布会场景'")->limit('0,1')->getField('time');
            $time['xinwen']=M('Liuxue_img')->where("type_name='发布会新闻'")->limit('0,1')->getField('time');
            $this->assign('time',$time);
            $this->display();
        }
    }
    
    public function liuxue_delete(){
        M("Liuxue_img")->where("type_name='{$_GET['name']}'")->delete();
        $this->success("删除成功",U("liuxue",array('name'=>'liuxue')));
    }
    
    //ios照片会旋转的问题
    function liuxue_chuli(){
        $data=M("Liuxue_img")->select();
        foreach($data as $v){
            $src=$v['pic'];
            $dest_file=str_replace(".jpg", "_a.jpg", $src);
            $dest_file=str_replace(".jpeg", "_a.jpeg", $dest_file);
            $dest_file=str_replace(".png", "_a.png", $dest_file);
            $data = imagecreatefromstring(file_get_contents($src));
            $exif = exif_read_data($src);
            if(!empty($exif['Orientation'])) {
                switch($exif['Orientation']) {
                    case 8:
                        $data = imagerotate($data, 90, 0);
                        break;
                    case 3:
                        $data = imagerotate($data, 180, 0);
                        break;
                    case 6:
                        $data = imagerotate($data, -90, 0);
                        break;
                }
            imagejpeg($data, $dest_file);
            M("Liuxue_img")->where("id='{$v['id']}'")->save(array('pic'=>$dest_file));
            }
        }
        $this->success("处理成功",U("liuxue",array('name'=>'liuxue')));
    }
    
}