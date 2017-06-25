<?php

class TixianAction extends UserAction {

    public function _initialize() {
        parent::_initialize();
    }

    //正常提现用户 
    //查询条件： 过滤掉 2016-03-22 00:00:00 到 2016-03-24 23:59:59 
    //提现金额累计大于等于50元 抽奖记录10次以上 以及相关的人员提现记录
    public function index() {
        $name = $_GET['name'];
        $this->assign('name', $name);
        $openid = $this->_post('openid');
        $this->assign('openid', $openid);
        $where = "(t.ids is NULL or t.ids = '')";
        $where.="  AND tixian.type = 2";
        $where.=" AND tixian.jine != 0.00";
        if ($openid) {
            $where.=" AND tixian.openid='$openid'";
        }
        $model = new Model();
        $data = $model->query("SELECT tixian.* FROM tp_bl_tixian tixian
        LEFT JOIN (
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT t.openid, SUM(t.jine) AS leiji FROM tp_bl_tixian t WHERE t.type = 2 GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE t.leiji >= 50 AND tixian.type = 2
	UNION
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT count(*) AS cishu, t.openid FROM tp_magic_record t WHERE t.date >= UNIX_TIMESTAMP('2016-03-22 00:00:00') AND t.date <= UNIX_TIMESTAMP('2016-03-24 23:59:59') AND t.openid IS NOT NULL AND t.openid != '' GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE tixian.type = 2 AND t.cishu >= 10
        ) t on t.ids = tixian.ids 
        WHERE $where");
        $count = count($data);
        $page = new Page($count, 30);
        $this->assign('page', $page->show());
        $datas = $model->query("SELECT tixian.* FROM tp_bl_tixian tixian
        LEFT JOIN (
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT t.openid, SUM(t.jine) AS leiji FROM tp_bl_tixian t WHERE t.type = 2 GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE t.leiji >= 50 AND tixian.type = 2
	UNION
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT count(*) AS cishu, t.openid FROM tp_magic_record t WHERE t.date >= UNIX_TIMESTAMP('2016-03-22 00:00:00') AND t.date <= UNIX_TIMESTAMP('2016-03-24 23:59:59') AND t.openid IS NOT NULL AND t.openid != '' GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE tixian.type = 2 AND t.cishu >= 10
        ) t on t.ids = tixian.ids 
        WHERE $where ORDER BY tixian.time desc limit $page->firstRow, $page->listRows");


        foreach ($datas as $k => $v) {
            $data_p = M("Wechat_group_list")->where("openid='{$v['openid']}'")->find();
            $datas[$k]['money'] = $data_p['money'];
        }
        foreach ($data as $k => $v) {
            $z_money+=$v['jine'];
        }
        $moneys = number_format(floatval($z_money), 2);
        $this->assign('moneys', $moneys);
        $this->assign('data', $datas);
        $this->display();
    }

    //提现黑名单用户： 
    //查询条件： 2016-03-22 00:00:00 到 2016-03-24 23:59:59 
    //提现金额累计大于等于50元 抽奖记录10次以上 以及相关的人员提现记录
    public function index_new() {
        $name = $_GET['name'];
        $this->assign('name', $name);
        $openid = $this->_post('openid');
        $this->assign('openid', $openid);
        $where=" t.type = 2";
        if ($openid) {
            $where.=" AND t.openid='$openid' ";
        }
        $model = new Model();
        $data = $model->query("SELECT * FROM (
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT t.openid, SUM(t.jine) AS leiji FROM tp_bl_tixian t WHERE t.type = 2 GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE t.leiji >= 50 AND tixian.type = 2
	UNION
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT count(*) AS cishu, t.openid FROM tp_magic_record t WHERE t.date >= UNIX_TIMESTAMP('2016-03-22 00:00:00') AND t.date <= UNIX_TIMESTAMP('2016-03-24 23:59:59') AND t.openid IS NOT NULL AND t.openid != '' GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE tixian.type = 2 AND t.cishu >= 10
        ) t WHERE $where");
        $count = count($data);
        $page = new Page($count, 30);
        $this->assign('page', $page->show());
        $datas = $model->query("SELECT * FROM (
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT t.openid, SUM(t.jine) AS leiji FROM tp_bl_tixian t WHERE t.type = 2 GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE t.leiji >= 50 AND tixian.type = 2
	UNION
	SELECT tixian.* FROM tp_bl_tixian tixian LEFT JOIN ( SELECT count(*) AS cishu, t.openid FROM tp_magic_record t WHERE t.date >= UNIX_TIMESTAMP('2016-03-22 00:00:00') AND t.date <= UNIX_TIMESTAMP('2016-03-24 23:59:59') AND t.openid IS NOT NULL AND t.openid != '' GROUP BY t.openid ) t ON t.openid = tixian.openid WHERE tixian.type = 2 AND t.cishu >= 10
        ) t WHERE $where ORDER BY t.time desc  limit $page->firstRow, $page->listRows");
        foreach ($datas as $k => $v) {
            $data_p = M("Wechat_group_list")->where("openid='{$v['openid']}'")->find();
            $datas[$k]['money'] = $data_p['money'];
        }
        foreach ($data as $k => $v) {
            $z_money+=$v['jine'];
        }
        $moneys = number_format(floatval($z_money), 2);
        $this->assign('moneys', $moneys);
        $this->assign('data', $datas);
        $this->display();
    }

    //购买者
    public function index_goumai() {
        $openid = array('oA5aqwdIyU_PYEE93J1yRDI9snKY',
            'oA5aqwfqUOheYvrMJAnmaL8Mx2q0',
            'oA5aqwXo0hvX9-7NHNO6pp0dZero',
            'oA5aqwWTV2R97FIWFGnsOA6e4Y04',
            'oA5aqwTkH7k_kT2FDi3wD94c2lgo',
            'oA5aqwRrz9S3-HEqCJVDE1FNnjRE',
            'oA5aqwWJZueQpoP--m_2gJK8nkPA',
            'oA5aqwW_S36HJ7LVhFrNC24gbAw0',
            'oA5aqwYK7CRy62kf__Y7AFHSzFv0',
            'oA5aqwRgKgBlBcoClPDquOxnG1Ac',
            'oA5aqwcddc1F6k0eo28qpxNf06J4',
            'oA5aqwY7_X-8aTZIG5rddudKXbbQ',
            'oA5aqwfGfoTLeunOWgAiTLedlQVs',
            'oA5aqwX1S4_GmCXJVgi1cJek2G3M',
            'oA5aqwQGU_-Vfz69Tds564Z_qdJE',
            'oA5aqweyIjETGNntwtJyxhhr-z6s',
            'oA5aqwfWyf4PF8d6t-gsNb4g97Do',
            'oA5aqwdFR1Z8vBdbt-EWQgocsFYE',
            'oA5aqwSZmObhN-idw89pbabngQQ8',
            'oA5aqwV0EudBVG1mjWwEyew9sNsE',
            'oA5aqwZQpewbiIabziZh4hTe_Vjo',
            'oA5aqwbLJOoyBYZy0FJCAEeg8h4Y',
            'oA5aqwRLbvwHRDgehmvjSh4blSoE',
            'oA5aqwSQp1kAV0o2mzuvicwczKn0',
            'oA5aqwROiofEIe-0B8xK5J_3Ahzw',
            '`oA5aqwYrvp4gE2UWm7ivO0SrLCsY',
            'oA5aqwexHt4peiiYKYbz1ei0C1KQ');
        $map['openid'] = array('in', $openid);
        $map['type'] = 2;
        $tixian = M('bl_tixian');
        $count = $tixian->where($map)->count();
        $page = new Page($count, 20);
        $this->assign('page', $page->show());
        $datas = $tixian->where($map)->limit($page->firstRow . ',' . $page->listRows)->order('time desc')->select();
        $money = $tixian->where($map)->select();
        foreach ($datas as $k => $v) {
            $data_p = M("Wechat_group_list")->where("openid='{$v['openid']}'")->find();
            $datas[$k]['money'] = $data_p['money'];
        }
        foreach ($money as $k => $v) {
            $z_money+=$v['jine'];
        }
        $moneys = number_format(floatval($z_money), 2);
        $this->assign('moneys', $moneys);
        $this->assign('data', $datas);
        $this->display();
    }

    public function index_back() {
        $name = $_GET['name'];
        $this->assign('name', $name);
        $tixian = M('bl_tixian');
        $count = $tixian->where(array('type' => '2'))->count();
        $page = new Page($count, 20);
        $this->assign('page', $page->show());
        //$data=$tixian->join("tp_wechat_group_list on tp_wechat_group_list.openid=tp_bl_tixian.openid")->limit($page->firstRow . ',' . $page->listRows)->order('time desc')->where(array('type'=>'2'))->select();
        $datas = $tixian->where(array('type' => '2'))->limit($page->firstRow . ',' . $page->listRows)->order('time desc')->select();
        $money = $tixian->where(array('type' => '2'))->select();
        foreach ($datas as $k => $v) {
            $data_p = M("Wechat_group_list")->where("openid='{$v['openid']}'")->find();
            $datas[$k]['money'] = $data_p['money'];
        }
        foreach ($money as $k => $v) {
            $z_money+=$v['jine'];
        }
        $moneys = number_format(floatval($z_money), 2);
        $this->assign('moneys', $moneys);
        $this->assign('data', $datas);
        $this->display();
    }

    public function add() {
        $name = $_GET['name'];
        $this->assign('name', $name);
        import("@.ORG.WxPay");
        //获取的appid,商户,密钥,证书信息
        $wechat = new WechatCoPay(
                'wx4afc6043ae331956', //绑定支付的APPID
                '1264117101', //商户号
                'aV0fLzsnYz4ebznV0lDJ7GsrwMXJ2ckd', //商户支付密钥
                '/var/www/bl/weimicms/Lib/ORG/Wxpay/cert/apiclient_cert.pem', //证书路径
                '/var/www/bl/weimicms/Lib/ORG/Wxpay/cert/apiclient_key.pem', //证书路径
                '/var/www/bl/weimicms/Lib/ORG/Wxpay/cert/rootca.pem'//证书路径
        );
        session_start();
        if ($_SESSION['submit'] == false) {
            if ($_POST['list']) {
                for ($i = 0; $i < count($_POST['list']); $i++) {
                    $datas[$i]['id'] = $_POST['list'][$i];
                }
                $array = array();
                foreach ($datas as $k => $v) {
                    $tixian = M('bl_tixian');
                    $data = $tixian->join("tp_wechat_group_list on tp_wechat_group_list.openid=tp_bl_tixian.openid")->where(array('ids' => $v['id']))->find();
                    $wechat->setAttribute('partner_trade_no', $data['order']);
                    $wechat->setAttribute('openid', $data['openid']);
                    $wechat->setAttribute('check_name', 'OPTION_CHECK');
                    $wechat->setAttribute('re_user_name', $data['name']);
                    $wechat->setAttribute('amount', $data['jine'] * 100);
                    $wechat->setAttribute('desc', '企业付款');
                    $result[$k] = $wechat->pay();
                    $array[$k]['mess'] = $result[$k]['return_msg'];
                    $array[$k]['mess'] = $result[$k]['return_msg'];
                    $array[$k]['name'] = $data['name'];
                    $array[$k]['openId'] = $data['openid'];
                    $m = $result[$k]['result_code'];
                    $order = $data['order'];
                    $jine = $data['jine'];
                    $money = $data['money'];
                    $names = $array[$k]['name'];
                    $ss = $money + $jine;
                    if ($m == 'FAIL') {
                        $tixian = M('bl_tixian');
                        $data['datetime'] = date("Y-m-d H:i:s", time());
                        $data['mes'] = $result[$k]['return_msg'];
                        $data['type'] = '2';
                        $tixian->where(array('order' => $order))->save($data);
                        $dd['money'] = $ss;
                        $dd['name'] = $names;
                        $dd['order'] = $order;
                        $dd['time'] = time();
                        $dd['type'] = '3';
                        $dd['jine'] = $jine;
                        $dd['mes'] = $result[$k]['return_msg'];
                        $group = M("bl_fanxian");
                        $ms = $group->add($dd);
                    }
                    if ($m == 'SUCCESS') {
                        $agentid = M("Wechat_group_list")->where("openid='{$data['openid']}'")->find();
                        import("@.ORG.Xinbao");
                        $xinbao = new Xinbao();
                        $xinbao->changeMoney($agentid['agentId'], '002', 2, $jine);
                        $tixian = M('bl_tixian');
                        $data['datetime'] = date("Y-m-d H:i:s", time());
                        $data['mes'] = "提现成功";
                        $data['type'] = '1';
                        $tixian->where(array('order' => $order))->save($data);
                    }
                }
            } else {

                for ($i = 0; $i < count($_POST['openid']); $i++) {
                    $date[$i]['openId'] = $_POST['openid'][$i];
                    $date[$i]['name'] = $_POST['name'][$i];
                    $date[$i]['order'] = $_POST['order'][$i];
                    $date[$i]['jine'] = $_POST['jine'][$i];
                    $date[$i]['money'] = $_POST['yue'][$i];
                }
                $array = array();
                foreach ($date as $k => $v) {
                    //企业支付
                    $wechat->setAttribute('partner_trade_no', $v['order']);
                    $wechat->setAttribute('openid', $v['openId']);
                    $wechat->setAttribute('check_name', 'OPTION_CHECK');
                    $wechat->setAttribute('re_user_name', $v['name']);
                    $wechat->setAttribute('amount', $v['jine'] * 100);
                    $wechat->setAttribute('desc', '企业付款');
                    $result[$k] = $wechat->pay();
                    $array[$k]['mess'] = $result[$k]['return_msg'];
                    $array[$k]['name'] = $v['name'];
                    $array[$k]['openId'] = $v['openId'];
                    $m = $result[$k]['result_code'];
                    $order = $v['order'];
                    $jine = $v['jine'];
                    $money = $v['money'];
                    $names = $array[$k]['name'];
                    $ss = $money + $jine;
                    if ($m == 'FAIL') {
                        $tixian = M('bl_tixian');
                        $data['datetime'] = date("Y-m-d H:i:s", time());
                        $data['mes'] = $result[$k]['return_msg'];
                        $data['type'] = '2';
                        $tixian->where(array('order' => $order))->save($data);
                        $dd['money'] = $ss;
                        $dd['name'] = $names;
                        $dd['order'] = $order;
                        $dd['time'] = time();
                        $dd['type'] = '3';
                        $dd['jine'] = $jine;
                        $dd['mes'] = $result[$k]['return_msg'];
                        $group = M("bl_fanxian");
                        $ms = $group->add($dd);
                    }
                    if ($m == 'SUCCESS') {
                        $agentid = M("Wechat_group_list")->where("openid='{$v['openId']}'")->find();
                        import("@.ORG.Xinbao");
                        $xinbao = new Xinbao();
                        $xinbao->changeMoney($agentid['agentId'], '002', 2, $jine);
                        $tixian = M('bl_tixian');
                        $data['datetime'] = date("Y-m-d H:i:s", time());
                        $data['mes'] = "提现成功";
                        $data['type'] = '1';
                        $tixian->where(array('order' => $order))->save($data);
                    }
                }
            }
            $this->success('提交成功');
// 	    echo "<pre>";
// 	    var_dump($result);
// 	    echo "</pre>";
            //企业支付查询 
            //$result = $wechat->query('1004180457201601212823296406');
            //print_r($result);
        }
    }

    public function select() {
        $name = $_GET['name'];
        $this->assign('name', $name);
        $tixian = M('bl_tixian');
        $count = $tixian->where(array('type' => '2'))->count();
        $page = new Page($count, 20);
        $this->assign('page', $page->show());
        //$data=$tixian->join("tp_wechat_group_list on tp_wechat_group_list.openid=tp_bl_tixian.openid")->where(array('type'=>'2'))->limit($page->firstRow . ',' . $page->listRows)->order('time desc')->select();
        $datas = $tixian->where(array('type' => '2'))->limit($page->firstRow . ',' . $page->listRows)->order('time desc')->select();
        foreach ($datas as $k => $v) {
            $data_p = M("Wechat_group_list")->where("openid='{$v['openid']}'")->find();
            $datas[$k]['money'] = $data_p['money'];
        }
        $this->assign('data', $datas);
        $this->display();
    }

    function fanxian() {
        $name = $_GET['name'];
        $this->assign('name', $name);
        session_start();
        if ($_SESSION['submit'] == false) {
            if ($_POST['llist']) {
                for ($i = 0; $i < count($_POST['llist']); $i++) {
                    $value[$i]['id'] = $_POST['llist'][$i];
                }
                foreach ($value as $k => $v) {
                    $tixian = M('bl_tixian');
                    $data = $tixian->join("tp_wechat_group_list on tp_wechat_group_list.openid=tp_bl_tixian.openid")->where(array('ids' => $v['id'], 'type' => '2'))->find();
                    $zongmoney['money'] = $data['money'] + $data['jine'];
                    $openid = $data['openid'];
                    $type_a['type'] = '2';
                    $type_b['type'] = '3';
                    $order = $data['order'];
                    $group = M('wechat_group_list');
                    $fanxian = M('bl_fanxian');
                    $tixian = M('bl_tixian');
                    $group->where(array('openid' => $openid))->save($zongmoney);
                    $tixian->where(array('order' => $order))->save($type_b);
                    $fanxian->where(array('order' => $order))->save($type_a);
                    $jy['openid'] = $data['openid'];
                    $jy['content'] = '返现';
                    $jy['type'] = '6';
                    $jy['money'] = $data['jine'];
                    $jy['createtime'] = time();
                    $jiaoyi = M('bl_jiaoyi');
                    $jiaoyi->add($jy);
                }
            } else {
                for ($i = 0; $i < count($_POST['order']); $i++) {
                    $date[$i]['order'] = $_POST['order'][$i];
                    $date[$i]['name'] = $_POST['name'][$i];
                    $date[$i]['money'] = $_POST['money'][$i];
                    $date[$i]['jine'] = $_POST['jine'][$i];
                    $date[$i]['time'] = $_POST['time'][$i];
                    $date[$i]['mes'] = $_POST['mes'][$i];
                    $date[$i]['openid'] = $_POST['openid'][$i];
                }
                foreach ($date as $k => $v) {
                	$money=M("Wechat_group_list")->where("openid='{$v['openid']}'")->find();
                    $zongmoney['money'] = $money['money'] + $v['jine'];
                    $openid = $v['openid'];
                    $type_a['type'] = '2';
                    $type_b['type'] = '3';
                    $order = $v['order'];
                    $group = M('wechat_group_list');
                    $fanxian = M('bl_fanxian');
                    $tixian = M('bl_tixian');
                    $group->where(array('openid' => $openid))->save($zongmoney);
                    $tixian->where(array('order' => $order))->save($type_b);
                    $fanxian->where(array('order' => $order))->save($type_a);
                    $jy['openid'] = $v['openid'];
                    $jy['content'] = '返现';
                    $jy['type'] = '6';
                    $jy['money'] = $v['jine'];
                    $jy['createtime'] = time();
                    $jiaoyi = M('bl_jiaoyi');
                    $jiaoyi->add($jy);
                }
            }
            $this->success('提交成功');
        }
    }

    function chaxun() {
        $name = $_GET['name'];
        $this->assign('name', $name);
        $tixian = M('bl_tixian');
        $count = $tixian->where(array('type' => '1'))->count();
        $page = new Page($count, 20);
        $this->assign('page', $page->show());
        $data = $tixian->join("tp_wechat_group_list on tp_wechat_group_list.openid=tp_bl_tixian.openid")->limit($page->firstRow . ',' . $page->listRows)->order('time desc')->where(array('type' => '1'))->select();
        $this->assign('data', $data);
        $this->display();
    }

}
