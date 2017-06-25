<?php
class QuestionAction extends UserAction{

	public function index(){
	    $question=M("Question")->field("tp_question.*,tp_question_type.name")->join('tp_question_type on tp_question.type_id = tp_question_type.id')->select();
	    foreach ($question as $k=>$v){
	        $question[$k]['question']=htmlspecialchars_decode($v['question']);
	        $question[$k]['answer']=htmlspecialchars_decode($v['answer']);
	    }
	    $this->assign('question',$question);
		$this->display();
	}

	public function add(){
		if(IS_POST){
		    M("Question")->add($_POST);
		    $this->success("添加成功",U("Question/index",array('name'=>'question')));
			//$this->error('功能内测中,您无内测资格！');
		}else{
		    $fenlei=M("Question_type")->select();
		    $this->assign('fenlei',$fenlei);
			$this->display();
		}
	}

	public function update(){
	    if(IS_POST){
	        M("Question")->where("id='{$_POST['id']}'")->save($_POST);
	        $this->success("修改成功",U("Question/index",array('name'=>'question')));
	    }else{
	        $fenlei=M("Question_type")->select();
	        $this->assign('fenlei',$fenlei);
	        $id=$_GET['id'];
	        $data=M("Question")->where("id=$id")->find();
	        $this->assign('data',$data);
	        $this->display();
	    }
	}
	
	public function delete(){
	    $id=$_GET['id'];
	    M("Question")->where("id=$id")->delete();
	    $this->success('删除成功',U("Question/index",array('name'=>'question')));
	}
	
	//分类主页
	public function fenlei_index(){
	    $fenlei=M("Question_type")->select();
	    $this->assign('fenlei',$fenlei);
	    $this->display();
	}
	
	//分类添加页面
	public function fenlei_add(){
	    if(IS_POST){
	        M("Question_type")->add(array('name'=>$_POST['name']));
	        $this->success("添加成功",U("Question/fenlei_index",array('name'=>'question')));
	    }else{
    	    $this->display();
	    }
	}
	//修改分类
	public function type_edit(){
	    if(IS_POST){
	        M("Question_type")->where("id='{$_POST['id']}'")->save(array('name'=>$_POST['name']));
	        $this->success("修改成功",U("Question/fenlei_index",array('name'=>'question')));
	    }else{
	        $id=$_GET['id'];
	        $type=M("Question_type")->where("id=$id")->find();
	        $this->assign('type',$type);
	        $this->display();
	    }
    }

    //删除分类
    public function type_delete(){
        $id=$_GET['id'];
        M("Question_type")->where("id=$id")->delete();
        $this->success("删除成功",U("Question/fenlei_index",array('name'=>'question')));
    }
}



?>