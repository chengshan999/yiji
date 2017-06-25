<?php
class DingdanAction extends UserAction{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
        $status[]=array('id'=>1,'name'=>'未付款');
        $status[]=array('id'=>2,'name'=>'已付款');
        $this->assign('status',$status);
        //判断选择
        $name=$_GET['name'];
        $this->assign('name',$name);
        $order=M('Bl_order');
        $count=$order->count();
        $page=new Page($count,20);
        $this->assign('page',$page->show());
        if($_GET['status']){
            $status=$_GET['status']-1;
            if(IS_POST){
                $data=$order->where(" status = '{$status}' and tel like '%{$_POST['keyword']}%'")->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
                $this->assign('keyword',$_POST['keyword']);
            }else {
                $data=$order->where(" status = '{$status}'")->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
            }
        }else{
            if(IS_POST){
                $data=$order->where("tel like '%{$_POST['keyword']}%'")->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
                $this->assign('keyword',$_POST['keyword']);
            }else{
                $data=$order->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
            }
        }
        $this->assign('data',$data);
        //删除无效订单
//         $time=time()-15*60;
//         $order->where("createtime <$time and shouhuo_id = 0")->delete();
        $this->display();
        
        
    }
    
    //更变线下支付状态
    public function change_xianxiazhifu_status(){
        $order_id=$_POST['id'];
        $value=$_POST['value'];
        if($value==2){
            //线下支付反积分
            //查出用户信息
//             $user_id=M("Bl_order")->where("id=$order_id")->getField('user_id');
//             $point=M("Bl_order")->where("id=$order_id")->getField('total_price');
//             $user=M("Wechat_group_list")->where("id=$user_id")->find();
//             $this->jifen_handle($user_id, $point);
            M("Bl_order")->where("id=$order_id")->save(array('xianxia_status'=>$value,'status'=>1));
            echo "已通过付款审核，请尽快发货";
        }else{
            M("Bl_order")->where("id=$order_id")->save(array('xianxia_status'=>$value));
            echo "已驳回请求，请等待用户重新上传支付凭证";
        }
    }
    
    /**
     * @param int $user_id 用户Id
     * @param int $point 反的积分
     */
    function jifen_handle($user_id,$point){
        //用户资料
        $user=M("Wechat_group_list")->where("id=$user_id")->find();
        //查出用户分组
        $group=M("Wechat_group")->where("id='{$user['g_id']}'")->find();
        if($group['name']=='CEO'){
            // 返积分
            $point_old = $user['points'];
            $point_new = $point + $point_old;
            M("Wechat_group_list")->where("id='$user_id'")->save(array('points' => $point_new));
        }elseif ($group['name']=='董事'){
            if($user['superior']==0){
                 // 返积分
                $point_old = $user['points'];
                $point_new = $point + $point_old;
                M("Wechat_group_list")->where("id='$user_id'")->save(array('points' => $point_new));
            }else{
                // 购买人返积分
                $point_old = $user['points'];
                $point_new = $point*0.65 + $point_old;
                M("Wechat_group_list")->where("id='$user_id'")->save(array('points' => $point_new));    
                //上级反积分
                $point_old_ceo = M("Wechat_group_list")->where("id='{$user['superior']}'")->getField('points');
                $point_new_ceo = $point*0.35 + $point_old_ceo;
                M("Wechat_group_list")->where("id='{$user['superior']}'")->save(array('points' => $point_new_ceo));
            }
        }elseif ($group['name']=='总经理'){
            //自己反积分
            $point_old = $user['points'];
            $point_new = $point*0.45 + $point_old;
            M("Wechat_group_list")->where("id='$user_id'")->save(array('points' => $point_new));
            //给上级反积分
            //查出上级用户id
            $user_A=M("Wechat_group_list")->where("id='{$user['superior']}'")->find();
            if($user_A['superior']){
                $this->get_jifen($user_A['superior'], $point, "C");
            }
            $this->get_jifen($user['superior'], $point, "C");
        }elseif($group['name']=='总监'){
            //自己反积分
            $point_old = $user['points'];
            $point_new = $point*0.4 + $point_old;
            M("Wechat_group_list")->where("id='$user_id'")->save(array('points' => $point_new));
            //给上级反积分
            //查出上级用户id
            $user_A=M("Wechat_group_list")->where("id='{$user['superior']}'")->find();
            if($user_A['superior']){
                $this->get_jifen($user_A['superior'], $point, "D");
                $user_B=M("Wechat_group_list")->where("id='{$user_A['superior']}'")->find();
                if($user_B['superior']){
                    $this->get_jifen($user_B['superior'], $point, "D");
                    $user_C=M("Wechat_group_list")->where("id='{$user_B['superior']}'")->find();
                    if($user_C['superior']){
                        $this->get_jifen($user_C['superior'], $point, "D");
                    }
                }
            }
            $this->get_jifen($user['superior'], $point, "D");
            
        }elseif($group['name']=='销售经理'){
            //自己反积分
            $point_old = $user['points'];
            $point_new = $point*0.32 + $point_old;
            M("Wechat_group_list")->where("id='$user_id'")->save(array('points' => $point_new));
            //给上级反积分
            //查出上级用户id
            $user_A=M("Wechat_group_list")->where("id='{$user['superior']}'")->find();
            if($user_A['superior']){
                $this->get_jifen($user_A['superior'], $point, "E");
                $user_B=M("Wechat_group_list")->where("id='{$user_A['superior']}'")->find();
                if($user_B['superior']){
                    $this->get_jifen($user_B['superior'], $point, "E");
                    $user_C=M("Wechat_group_list")->where("id='{$user_B['superior']}'")->find();
                    if($user_C['superior']){
                        $this->get_jifen($user_C['superior'], $point, "E");
                        $user_D=M("Wechat_group_list")->where("id='{$user_C['superior']}'")->find();
                        if($user_D['superior']){
                            $this->get_jifen($user_D['superior'], $point, "E");
                        }
                    }
                }
            }
            $this->get_jifen($user['superior'], $point, "E");
            
        }elseif($group['name']=='销售顾问'){
            //自己反积分
            $point_old = $user['points'];
            $point_new = $point*0.29 + $point_old;
            M("Wechat_group_list")->where("id='$user_id'")->save(array('points' => $point_new));
            //给上级反积分
            //查出上级用户id
            $user_A=M("Wechat_group_list")->where("id='{$user['superior']}'")->find();
            if($user_A['superior']){
                $this->get_jifen($user_A['superior'], $point, "F");
                $user_B=M("Wechat_group_list")->where("id='{$user_A['superior']}'")->find();
                if($user_B['superior']){
                    $this->get_jifen($user_B['superior'], $point, "F");
                    $user_C=M("Wechat_group_list")->where("id='{$user_B['superior']}'")->find();
                    if($user_C['superior']){
                        $this->get_jifen($user_C['superior'], $point, "F");
                        $user_D=M("Wechat_group_list")->where("id='{$user_C['superior']}'")->find();
                        if($user_D['superior']){
                            $this->get_jifen($user_D['superior'], $point, "F");
                            $user_E=M("Wechat_group_list")->where("id='{$user_D['superior']}'")->find();
                            if($user_E['superior']){
                                $this->get_jifen($user_E['superior'], $point, "F");
                            }
                        }
                    }
                }
            }
            $this->get_jifen($user['superior'], $point, "F");
        }
        
        
    }
    
    /**
     * @param int $user_id 用户Id
     * @param int $point 反的积分
     * @param int $grade 初始购买用户等级
     */
    //计算得到的积分
    public function get_jifen($user_id,$point,$grade){
        $user=M("Wechat_group_list")->where("id=$user_id")->find();
        //查出用户等级
        $dengji=M("Wechat_group")->where("id='{$user['g_id']}'")->find();
        if($grade=='C'){
            if($dengji['grade']=="B"){
                $point_get= $point*0.3;
            }elseif($dengji['grade']=='A'){
                $point_get= $point*0.25;
            }
        }elseif($grade=="D"){
            if($dengji['grade']=="B"){
                $point_get= $point*0.2;
            }elseif($dengji['grade']=='A'){
                $point_get= $point*0.15;
            }elseif($dengji['grade']=="C"){
                $point_get= $point*0.25;
            }
        }elseif($grade=="E"){
            if($dengji['grade']=="B"){
                $point_get= $point*0.15;
            }elseif($dengji['grade']=='A'){
                $point_get= $point*0.13;
            }elseif($dengji['grade']=="C"){
                $point_get= $point*0.18;
            }elseif($dengji['grade']=="D"){
                $point_get= $point*0.22;
            }
        }elseif($grade=="F"){
            if($dengji['grade']=="B"){
                $point_get= $point*0.1;
            }elseif($dengji['grade']=='A'){
                $point_get= $point*0.07;
            }elseif($dengji['grade']=="C"){
                $point_get= $point*0.13;
            }elseif($dengji['grade']=="D"){
                $point_get= $point*0.18;
            }elseif($dengji['grade']=="E"){
                $point_get= $point*0.23;
            }
        }
        $point_old=$user['points'];
        $point_new=$point_get+$point_old;
        M("Wechat_group_list")->where("id=$user_id")->save(array('points'=>$point_new));
    }
    
    public function select(){
        $id=$_GET['id'];
        $this->assign('id',$id);
        $order=M('Bl_order');
        $data=$order->where(array('id'=>$id))->order('id desc')->find();
        $kecheng=M("Bl_product_data")->where("id='{$data['product_id']}'")->find();
        $this->assign('kecheng',$kecheng);
        $this->assign('data',$data);
        $this->display();
    }
   
    public function fahuo(){
        //查询出快递
        $kuaidi=M("Kuaidi")->select();
        unset($kuaidi[11]);
        $this->assign('kuaidi',$kuaidi);
        $id=$_GET['id'];
        $this->assign('id',$id);
        $order=M('Bl_order');
        $data=$order->where(array('id'=>$id))->find();
        $product=M("Bl_order_data")->where("order_id='{$data['id']}'")->select();
        //查询跨境产品
        $kuajing_product=M("Bl_product_data")->field('id')->where("is_kuajing=1")->select();
        foreach ($kuajing_product as $v){
            $kuajing_id[]=$v['id'];
        }
        foreach ($product as $k=>$v){
            if(in_array($v['product_id'],$kuajing_id)){
                $product_kuajing[]=$v;
            }else{
                $product_unkuajing[]=$v;
            }
        }
        if($product_kuajing and !$product_unkuajing){
            $this->redirect('fahuo_ueq',array('id'=>$id));
        }
        if($product_kuajing and $product_unkuajing){
            $this->redirect('fahuo_all',array('id'=>$id));
        }
        $this->assign('data',$data);
        $this->display();
    }
    
    //ueq发货
    public function fahuo_ueq(){
        $id=$_GET['id'];
        $this->assign('id',$id);
        $order=M('Bl_order');
        $data=$order->where(array('id'=>$id))->find();
        $this->assign('data',$data);
        $this->display();
    }
    
    //两种发货
    public function fahuo_all(){
        $kuaidi=M("Kuaidi")->select();
        unset($kuaidi[11]);
        $this->assign('kuaidi',$kuaidi);
        $id=$_GET['id'];
        $this->assign('id',$id);
        $order=M('Bl_order');
        $data=$order->where(array('id'=>$id))->find();
        $this->assign('data',$data);
        $this->display();
    }
    
    public function save_kuaidi(){
        $id=$_GET['id'];
        M('Bl_order')->where(array('id'=>$id))->save(array('kuaidi_id'=>$_POST['kuaidi_id'],'status'=>2,'ueq'=>1,'fahuo_time'=>time(),'ueq_id'=>$_POST['ueq_id'],'kuaidi_name'=>$_POST['kuaidi_name']));
        $this->success("成功",U("Dingdan/index",array('name'=>"Dingdan")));
    }
    
    public function query_wuliu(){
        $id=$_GET['id'];
        $order=M('Bl_order')->where(array('id'=>$id))->find();
        $product=M("Bl_order_data")->where("order_id='{$order['id']}'")->select();
        //查询跨境产品
        $kuajing_product=M("Bl_product_data")->field('id')->where("is_kuajing=1")->select();
        foreach ($kuajing_product as $v){
            $kuajing_id[]=$v['id'];
        }
        foreach ($product as $k=>$v){
            if(in_array($v['product_id'],$kuajing_id)){
                $this->assign('ueq_exist',1);
            }else{
                $this->assign('kuaidi_exist',1);
            }
        }
        if(!$order['ueq'] and !$order['ueq_id']){
            $this->assign('ueq_data',array(array('context'=>'请先进行发货操作')));
            if(!$order['kuaidi_name'] and !$order['kuaidi_id'] ){
                $this->assign('data',array(array('context'=>'请先进行发货操作')));
            }
        }
        elseif(!$order['kuaidi_name'] and !$order['kuaidi_id'] ){
            $this->assign('data',array(array('context'=>'请先进行发货操作')));
            if(!$order['ueq'] and !$order['ueq_id']){
                $this->assign('ueq_data',array(array('context'=>'请先进行发货操作')));
            }
        }
        if($order['ueq']==1 and !$order['kuaidi_id']){
            import("@.ORG.Ueq");
            $ueq=new Ueq();
            $result=$ueq->queryOrder($order['ueq_id']);
            foreach ($result as $k=>$v){
                $data[$k]['time']=$v['optime'];
                $data[$k]['context']=$v['notes'];
            }
            rsort($data);
            $this->assign('ueq_data',$data);
        }elseif($order['ueq']==0 and $order['kuaidi_id']){
            $code=$order['kuaidi_name'];
            $kuaidi_id=$order['kuaidi_id'];
            $url="http://api.kuaidi.com/openapi.html?id=2697fa4f7ec15210f79cdc28167ac3fa&com=$code&nu=$kuaidi_id";
            $data=$this->https_request($url);
            $data=json_decode($data,true);
            $this->assign('data',$data['data']);
        }elseif ($order['kuaidi_id'] and $order['ueq']){
            import("@.ORG.Ueq");
            $ueq=new Ueq();
            $result=$ueq->queryOrder($order['ueq_id']);
            foreach ($result as $k=>$v){
                $ueq_data[$k]['time']=$v['optime'];
                $ueq_data[$k]['context']=$v['notes'];
            }
            rsort($ueq_data);
            $this->assign('ueq_data',$ueq_data);
            $code=$order['kuaidi_name'];
            $kuaidi_id=$order['kuaidi_id'];
            $url="http://api.kuaidi.com/openapi.html?id=2697fa4f7ec15210f79cdc28167ac3fa&com=$code&nu=$kuaidi_id";
            $data=$this->https_request($url);
            $data=json_decode($data,true);
            $this->assign('data',$data['data']);
        }
            $this->display();
    }
    
    //生成ueq订单
    public function create_ueq(){
        if(IS_POST){
            import("@.ORG.Ueq");
            $ueq=new Ueq();
            foreach ($_POST['tiaoxingma'] as $k=>$v){
                $_POST['orderList'][$k]['tiaoxingma']=$v;
                $_POST['orderList'][$k]['productName']=$_POST['productName'][$k];
                $_POST['orderList'][$k]['price']=$_POST['price'][$k];
                $_POST['orderList'][$k]['num']=$_POST['num'][$k];
                $_POST['orderList'][$k]['product_total_price']=$_POST['product_total_price'][$k];
            }
            $re=$ueq->createOrder($_POST);
            if($re['code']=='1'){
                M("Bl_order")->where("id='{$_POST['id']}'")->save(array('kuaidi_content'=>$re['ueqExpressCode'],'ueq_id'=>$re['ueqExpressCode'],'ueq'=>1));
                $this->success('生成成功，已自动为您保存生成的快递单号，请点击发货操作进行确认发货',U("Dingdan/index",array('name'=>"Dingdan")));
            }else{
                $this->error("生成订单失败，错误信息：{$re['desc']}",U("Dingdan/index",array('name'=>"Dingdan")));
            }
        }else{
            $id=$_GET['id'];
            $order=M('Bl_order')->where(array('id'=>$id))->find();
            $this->assign('order',$order);
            $user=M("Wechat_group_list")->where("id='{$order['user_id']}'")->find();
            $this->assign('user',$user);
            $product=M("Bl_order_data")->where("order_id='{$order['id']}'")->select();
            //查询跨境产品
            $kuajing_product=M("Bl_product_data")->field('id')->where("is_kuajing=1")->select();
            foreach ($kuajing_product as $v){
                $kuajing_id[]=$v['id'];
            }
            foreach ($product as $k=>$v){
                if(in_array($v['product_id'],$kuajing_id)){
                    $product[$k]['zhiyou_price']=M("Bl_product_data")->where("id='{$v['product_id']}'")->getField("zhiyou_price");
                    $product[$k]['kuaidi_price']=M("Bl_product_data")->where("id='{$v['product_id']}'")->getField("kuaidi_price");
                    $product[$k]['tiaoxingma']=M("Bl_product_data")->where("id='{$v['product_id']}'")->getField("tiaoxingma");
                    $product[$k]['product_total_price']=$product[$k]['zhiyou_price']*$v['number'];
                    $all_price+=$product[$k]['product_total_price'];
                }else{
                    unset($product[$k]);
                }
            }
            $this->assign('all_price',$all_price);
            $this->assign('product',$product);
            $shouhuo=M("Shouhuo")->where("id='{$order['shouhuo_id']}'")->find();
            $this->assign('shouhuo',$shouhuo);
            $this->display();
        }
    }
    
    function jifen_order(){
        $status[]=array('id'=>1,'name'=>'待发货');
        $status[]=array('id'=>2,'name'=>'待收货');
        $status[]=array('id'=>4,'name'=>'已退回');
        $this->assign('status',$status);
        //判断选择
        $name=$_GET['name'];
        $this->assign('name',$name);
        $order=M('Bl_jifen_order');
        $count=$order->count();
        $page=new Page($count,20);
        $this->assign('page',$page->show());
        if($_GET['status']){
            $status=$_GET['status'];
            if(IS_POST){
                $data=$order->where("shouhuo_id != 0 and status = '{$status}' and orderid like '%{$_POST['keyword']}%'")->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
                $this->assign('keyword',$_POST['keyword']);
            }else {
                $data=$order->where("shouhuo_id != 0 and status = '{$status}'")->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
            }
        }else{
            if(IS_POST){
                $data=$order->where("shouhuo_id != 0 and orderid like '%{$_POST['keyword']}%'")->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
                $this->assign('keyword',$_POST['keyword']);
            }else{
                $data=$order->where("shouhuo_id != 0")->limit($page->firstRow . ',' . $page->listRows)->order('id desc')->select();
            }
        }
        foreach ($data as $k=>$v){
            $data[$k][tel]=M("Wechat_group_list")->where("id='{$v['user_id']}'")->getField("tel");
        }
        foreach ($data as $k=>$v){
            if($v['is_tixing']==1 and $v['status']==1){
                $data_tixing[$k]=$v;
            }else{
                $data_wei_tixing[$k]=$v;
            }
        }
        $this->assign('data_tixing',$data_tixing);
        $this->assign('data_wei_tixing',$data_wei_tixing);
        $this->assign('data',$data);
        //删除无效订单
        $time=time()-15*60;
        $order->where("createtime <$time and shouhuo_id = 0")->delete();
        $this->display();
    }
    
    function jifen_fahuo(){
        $kuaidi=M("Kuaidi")->select();
        unset($kuaidi[11]);
        $this->assign('kuaidi',$kuaidi);
        $id=$_GET['id'];
        $this->assign('id',$id);
        $this->display();
    }
    
    public function save_jifen_kuaidi(){
        $id=$_GET['id'];
        M('Bl_jifen_order')->where(array('id'=>$id))->save(array('kuaidi_id'=>$_POST['kuaidi_id'],'status'=>2,'kuaidi_name'=>$_POST['kuaidi_name']));
        $this->success("成功",U("Dingdan/jifen_order",array('name'=>"Dingdan")));
    }
    
    public function jifen_query_wuliu(){
        $id=$_GET['id'];
        $order=M('Bl_jifen_order')->where(array('id'=>$id))->find();
        if(!$order['kuaidi_name'] and !$order['kuaidi_id'] ){
            $this->assign('data',array(array('context'=>'请先进行发货操作')));
        }else{
            $code=$order['kuaidi_name'];
            $kuaidi_id=$order['kuaidi_id'];
            $url="http://api.kuaidi.com/openapi.html?id=2697fa4f7ec15210f79cdc28167ac3fa&com=$code&nu=$kuaidi_id";
            $data=$this->https_request($url);
            $data=json_decode($data,true);
            $this->assign('data',$data['data']);
            $this->display();
        }
    }
}