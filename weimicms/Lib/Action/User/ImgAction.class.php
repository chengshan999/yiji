<?php
class ImgAction extends ImgBaseAction{
	public function _initialize() {
		parent::_initialize();
	}
	public function index(){
		parent::index();
		$name=$_GET['name'];
		$this->assign('name',$name);
		$this->display();

	}
	
	public function add(){
		parent::add();
		$name=$_GET['name'];
		$this->assign('name',$name);
		//查出分类
		$fenlei=M("Img_fenlei")->where('pid=0')->select();
		foreach ($fenlei as $k=>$v){
		    $fenlei[$k]['fenlei']=M("Img_fenlei")->where("pid='{$v['id']}'")->select();
		}
		$this->assign('fenlei',$fenlei);
		$this->display();
	}

	
	
	public function edit(){
	    if(IS_POST){
	        if($_FILES['ppt']['error']!=4 && ($_FILES!=null)){
	            import("@.ORG.UploadFile");
	            $upload=new UploadFile();
	            $date=date("Y-m-d",time());
	            $upload->maxSize=20000000;
	            $upload->allowTypes='';
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
	        $_POST['uptatetime']=time();
	        $_POST['classname']=M("Img_fenlei")->where("id='{$_POST['classid']}'")->getField("name");
	        M("Img")->where("id=$id")->save($_POST);
	        $this->success("保存成功",U("Img/index",array('name'=>'Img')));
	    }else{
    		$name=$_GET['name'];
    		$this->assign('name',$name);
    		$id=$_GET['id'];
    		$data=M("Img")->where("id=$id")->find();
    		$this->assign('info',$data);
    		//查出分类
    		$fenlei=M("Img_fenlei")->where('pid=0')->select();
    		foreach ($fenlei as $k=>$v){
    		    $fenlei[$k]['fenlei']=M("Img_fenlei")->where("pid='{$v['id']}'")->select();
    		}
    		$this->assign('fenlei',$fenlei);
    		$this->display();
	    }
	}
	
	
	public function del(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		M("Img")->where("id='{$_GET['id']}'")->delete();
		$this->success("删除成功",U("Img/index",array('name'=>'Img')));
	}
	public function insert(){
	    if($_FILES['ppt']['error']!=4 && ($_FILES!=null)){
	        import("@.ORG.UploadFile");
	        $upload=new UploadFile();
	        $date=date("Y-m-d",time());
	        $upload->maxSize=20000000;
	        $upload->allowTypes='';
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
	    $_POST['createtime']=time();
	    $_POST['classname']=M("Img_fenlei")->where("id='{$_POST['classid']}'")->getField("name");
		M("Img")->add($_POST);
		$this->success("添加成功",U("Img/index",array('name'=>'Img')));
	}
	
	public function fenlei(){
	    if(IS_POST){
            M("Img_fenlei")->add($_POST);
            $this->success("添加成功",U("Img/index",array('name'=>'Img')));
	    }else{
	        $fenlei=M("Img_fenlei")->where("pid=0")->select();
	        $this->assign('fenlei',$fenlei);
    	    $this->display();
	    }
	}
	public function upsave(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		parent::upsave();
	}
	
	public function editClass(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		parent::editClass();
		$this->display();
	}
	
	public function editUsort(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		parent::editUsort();
	}
	
	public function multiImgDel(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		parent::multiImgDel();
	}
	
	public function multi(){
		parent::multi();
		$name=$_GET['name'];
		$this->assign('name',$name);
		$this->display();
	}
	
	
	public function multiSave(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
		parent::multiSave();
	}
	
	public function change(){
	    $name=$_GET['name'];
	    $this->assign('name',$name);
	    $id=$_POST['id'];
	    $val=$_POST['val'];
	    $img=M("Img");
	    $img->where("id='$id'")->save(array('display'=>$val));
	}
}
?>