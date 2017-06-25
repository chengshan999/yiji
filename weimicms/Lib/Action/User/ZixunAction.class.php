<?php
class ZixunAction extends UserAction{
    public function index(){
        $data=M("Question")->where("type=1")->order('createtime desc')->select();
        $this->assign('data',$data);
        $this->display();
    }
    
    public function zixun_detail(){
        $qid=$_GET['id'];
        $question=M("Question")->where("id=$qid")->find();
        $question['pic']=json_decode($question['pic'],true);
        $this->assign('question',$question);
        $reply=M("Question_reply")->where("qid=$qid")->select();
        foreach ($reply as $k=>$v){
            if($v['zhiding']==1){
                $zhiding[$k]=$v;
            }else{
                $reply[$k]=$v;
            }
        }
        $this->assign('reply',$reply);
        $this->assign('zhiding',$zhiding);
        $this->display();
    }
    
    public function delete_zixun_detail(){
        $id=$_POST['id'];
        M("Question_reply")->where("id=$id")->delete();
    }
    
    public function niwenwoda(){
        $data=M("Question")->where("type=0")->order('createtime desc')->select();
        $this->assign('data',$data);
        $this->display();
    }
    
    public function niwenwoda_detail(){
        $qid=$_GET['id'];
        $question=M("Question")->where("id=$qid")->find();
        $this->assign('question',$question);
        $reply=M("Question_reply")->where("qid=$qid")->select();
        foreach ($reply as $k=>$v){
            if($v['zhiding']==1){
                $zhiding[$k]=$v;
            }else{
                $reply[$k]=$v;
            }
        }
        $this->assign('reply',$reply);
        $this->assign('zhiding',$zhiding);
        $this->display();
    }
    
    public function delete_niwenwoda(){
        $id=$_GET['id'];
        M("Question")->where("id=$id")->delete();
        M("Question_reply")->where("qid=$id")->delete();
        $this->success("删除成功！",U("Zixun/niwenwoda",array('name'=>'Wenda')));
    }
    
    public function zhiding(){
        $id=$_GET['id'];
        M("Question")->where("id=$id")->save(array('zhiding'=>1));
        $this->success("成功！",U('Zixun/niwenwoda',array('name'=>'Wenda')));
    }
    
    public function quxiao_zhiding(){
        $id=$_GET['id'];
        M("Question")->where("id=$id")->save(array('zhiding'=>0));
        $this->success("成功！",U('Zixun/niwenwoda',array('name'=>'Wenda')));
    }
    
    public function zhiding_detail(){
        $id=$_POST['id'];
        M("Question_reply")->where("id=$id")->save(array('zhiding'=>1));
    }
    
    public function quxiao_zhiding_detail(){
        $id=$_POST['id'];
        M("Question_reply")->where("id=$id")->save(array('zhiding'=>0));
    }
    
    
}