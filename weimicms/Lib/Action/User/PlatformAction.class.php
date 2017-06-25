<?php
class PlatformAction extends UserAction
{
    public $pay_config_db;
    public function _initialize()
    {
        parent::_initialize();
        $this->pay_config_db = M('Alipay_config');
        if (!$this->token) {
            exit();
        }
    }
    //交易明细
    public function index(){
        $mingxi=M('Bl_jiaoyi');
        $count = $mingxi->count();
        $page = new Page($count, 20);
        //$this->assign('page', $page->show());
        //$datas=$mingxi->join("tp_wechat_group_list on tp_wechat_group_list.openid=tp_bl_jiaoyi.openid")->limit($page->firstRow . ',' . $page->listRows)->order('ids desc')->select();
        //$data=$mingxi->group('openid')->having('count(openid)')->select();//过滤重复信息显示
        
        //$this->assign('datas',$datas);
        $sql="select * from tp_bl_jiaoyi left join tp_wechat_group_list on tp_bl_jiaoyi.openid=tp_wechat_group_list.openid GROUP BY tp_wechat_group_list.openid HAVING count(tp_bl_jiaoyi.openid) ;";
        $data=$mingxi->query($sql);
        //echo $mingxi->getLastSql();
        $this->assign('data',$data);
        $this->display();
        
    }
    //个人交易明细详情
    public function select(){
        $openid=$_GET['openid'];
        $mingxi=M('Bl_jiaoyi');
        $data=$mingxi->where(array('openid'=>$openid))->order('ids desc')->select();
        $group=M('wechat_group_list');
        $datas=$group->where(array('openid'=>$openid))->find();
        $this->assign('data',$data);
        $this->assign('datas',$datas);
        $this->display();
    }
}
?>