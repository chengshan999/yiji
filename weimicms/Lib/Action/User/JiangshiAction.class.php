<?php
class JiangshiAction extends UserAction{
    public function index(){
        $list=M("Jiangshi")->select();
        $this->assign('data',$list);
        $this->display();
 
    }
    
    public function add_jiangshi(){
        if(IS_POST){
            if($_FILES['video']['error']!=4){
                import("@.ORG.UploadFile");
                $upload=new UploadFile();
                $date=date("Y-m-d",time());
                $upload->maxSize=9000000;
                $upload->allowTypes="";
                $upload->savePath="./uploads/".$date."/";
                $info=$upload->upload();
                if(!$info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getErrorMsg());
                }else{
                    // 上传成功 获取上传文件信息
                    $info=$upload->getUploadFileInfo();
                    foreach($info as $file){
                        $_POST['video']=$file['savepath'].$file['savename'];
                    }
                }
            }
            M("Jiangshi")->add($_POST);
            $this->success("保存成功",U("Jiangshi/index",array('name'=>'Jiangshi')));
        }else{
            $this->display();
        }
    }
    
    public function edit(){
        if(IS_POST){
            if($_FILES['video']['error']!=4 || ($_FILES!=null)){
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
            $id=$_GET['id'];
            M("Jiangshi")->where("id=$id")->save($_POST);
            $this->success("保存成功",U("Jiangshi/index",array('name'=>'Jiangshi')));
        }else{
            $id=$_GET['id'];
            $data=M("Jiangshi")->where("id=$id")->find();
            $this->assign('data',$data);
            $this->display();
        }
    }
    
    public function delete(){
        $id=$_GET['id'];
        M("Jiangshi")->where("id=$id")->delete();
        $this->success('删除成功',U("index",array("name"=>"Jiangshi")));
    }
}