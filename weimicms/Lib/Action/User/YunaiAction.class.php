<?php
class YunaiAction extends UserAction{
	public function _initialize(){
		parent::_initialize();
	}
	public function index(){
		if (empty($_POST['start_time']) && empty($_POST['end_time'])){
			$yun = M('Bl_yunai')->select();
			$jianshu = count($yun);
			foreach ($yun as $k=>$v){
				$zonge+=$v['money'];
			}
			$count = M('Bl_yunai')->count();
			$page = new Page($count, 20);
			$this->assign('page', $page->show());
			$yunai = M('Bl_yunai')->limit($page->firstRow . ',' . $page->listRows)->order("id desc")->select();
			$fajian = M('Bl_yunai')->where(array('fa_zhuangtai'=>2))->select();
			$fajian = count($fajian);
			$piaoshu = M('Bl_yunai')->where(array('fapiao'=>2))->select();
			$piaoshu = count($piaoshu);
			$duanxin=M('Flag')->where("id=3")->find();
			$this->assign('time',time()-1296000);
			$this->assign('duanxin',$duanxin['value']);
			$this->assign('yunai',$yunai);
			$this->assign('jianshu',$jianshu);
			$this->assign('zonge',$zonge);
			$this->assign('fajian',$fajian);
			$this->assign('piaoshu',$piaoshu);
		}else {
			$start_time=strtotime($_POST['start_time']);
			if ($_POST['end_time']){
				$end_time=strtotime($_POST['end_time'])+86400;
			}else {
				$end_time=time();
			}
			$count = M('Bl_yunai')->where("createtime>'$start_time' and createtime<'$end_time'")->count();
			$page = new Page($count, 20);
			$this->assign('page', $page->show());
			$yunai = M('Bl_yunai')->where("createtime>'$start_time' and createtime<'$end_time'")->limit($page->firstRow . ',' . $page->listRows)->order("id desc")->select();
			$yun = M('Bl_yunai')->where("createtime>'$start_time' and createtime<'$end_time'")->select();
			$jianshu = count($yun);
			foreach ($yun as $k=>$v){
				$zonge+=$v['money'];
			}
			$count = M('Bl_yunai')->where(array('fa_zhuangtai'=>2))->count();
			$page = new Page($count, 20);
			$this->assign('page', $page->show());
			$fajian = M('Bl_yunai')->where("fa_zhuangtai='2' and createtime>'$start_time' and createtime<'$end_time'")->select();
			$fajian = count($fajian);
			$piaoshu = M('Bl_yunai')->where("fapiao='2' and createtime>'$start_time' and createtime<'$end_time'")->select();
			$piaoshu = count($piaoshu);
			$duanxin=M('Flag')->where("id=3")->find();
			$this->assign('duanxin',$duanxin['value']);
			$this->assign('start_time',$_POST['start_time']);
			$this->assign('end_time',$_POST['end_time']);
			$this->assign('time',time()-1296000);
			$this->assign('yunai',$yunai);
			$this->assign('jianshu',$jianshu);
			$this->assign('zonge',$zonge);
			$this->assign('fajian',$fajian);
			$this->assign('piaoshu',$piaoshu);
		}
		$this->display();
	}
	public function change(){
		$id = $_POST['id'];
		$fa_zhuangtai = $_POST['fa_zhuangtai'];
		M('Bl_yunai')->where(array('id'=>$id))->save(array('fa_zhuangtai'=>$fa_zhuangtai));
		if($fa_zhuangtai == '2'){
			$re=M('Bl_yunai')->where(array('id'=>$id))->find();
			$this->get_verify($re['tel'],'您购买的保联-云爱智能穿戴已发货，请您关注查收。');
			if ($re['pid']){
				$pid=M('Wechat_group_list')->where(array('id'=>$re['pid']))->find();
				$this->get_verify($pid['tel'],'您向朋友'.$re['user_name'].'推荐的保联-云爱智能穿戴产品已交易成功并发货，请知晓');
			}
		}
	}
	public function kuaidi(){
		$id = $_POST['id'];
		$kuaidi = $_POST['value'];
		M('Bl_yunai')->where(array('id'=>$id))->save(array('kuaidi'=>$kuaidi));
	}
	public function duanxin(){
		$kuaidi = $_POST['value'];
		M('Flag')->where("id=3")->save(array('value'=>$kuaidi));
	}
	public function beizhu(){
		$id = $_POST['id'];
		$beizhu = $_POST['val'];
		M('Bl_yunai')->where(array('id'=>$id))->save(array('beizhu'=>$beizhu));
		
	}
	public function get_verify($mobile="",$content="",$flag=1){
		if($flag==0){
			exit();
		}
		$str="1234567890";
		$str=str_shuffle($str);
		$str=substr($str,0,4);
		cookie('rand',$str,300);
		if($mobile==""){
			$mobile=$_GET['mobile'];
		}
		if($content==""){
			$content="保联公社提示您：您的一次性手机验证码是".$str."，该口令将在五分钟后失效，如非本人操作，请忽略。";
		}
		//要post的数据
	
		$argv = array(
				'sn'=>'WEB-SQF-010-00020', ////替换成您自己的序列号
				'pwd'=>strtoupper(md5('WEB-SQF-010-00020'.'38ceb-8=')), //此处密码需要加密 加密方式为 md5(sn+password) 32位大写
				'mobile'=>$mobile,
				'content'=>urlencode( $content.'[保联公社]'),//短信内容
				'ext'=>'',
				'rrid'=>'',//默认空 如果空返回系统生成的标识串 如果传值保证值唯一 成功则返回传入的值
				'stime'=>''//定时时间 格式为2011-6-29 11:09:21
		);
		//构造要post的字符串
		foreach ($argv as $key=>$value) {
			if ($flag!=0) {
				$params .= "&";
				$flag = 1;
			}
			$params.= $key."="; $params.= urlencode($value);
			$flag = 1;
		}
		$length = strlen($params);
		//创建socket连接
		$fp = fsockopen("sdk2.entinfo.cn",8060,$errno,$errstr,10) or exit($errstr."--->".$errno);
		//构造post请求的头
		$header = "POST /webservice.asmx/mdSmsSend_u HTTP/1.1\r\n";
		$header .= "Host:sdk2.entinfo.cn\r\n";
		$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$header .= "Content-Length: ".$length."\r\n";
		$header .= "Connection: Close\r\n\r\n";
		//添加post的字符串
		$header .= $params."\r\n";
		//发送post的数据
		fputs($fp,$header);
		$inheader = 1;
		while (!feof($fp)) {
			$line = fgets($fp,1024); //去除请求包的头只显示页面的返回数据
			if ($inheader && ($line == "\n" || $line == "\r\n")) {
				$inheader = 0;
			}
			if ($inheader == 0) {
				//echo $line;
			}
		}
	
		//第一种，简单的字符串删除
		//<string xmlns="http://tempuri.org/">-5</string>
		//$line=str_replace("<string xmlns=\"http://tempuri.org/\">","",$line);
		//$line=str_replace("</string>","",$line);
	
		//第二种，xml转数组
		/*
		 $xml = simplexml_load_string($line);
		 $mixArray = (array)$xml;
		 $result=explode("-",$mixArray[0]);
		 */
	
		//第三种，正则取
	
		preg_match('/<string xmlns=\"http:\/\/tempuri.org\/\">(.*)<\/string>/',$line,$str);
		$result=explode("-",$str[1]);
	
	
		 
		if(count($result)>1)
			return '发送失败返回值为:'.$line."请查看webservice返回值";
		else
			return '发送成功 返回值为:'.$line;
	}
}