<?php
/* *
 * 功能：支付宝服务器异步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。


 *************************页面功能说明*************************
 * 创建该页面文件时，请留心该页面文件中无任何HTML代码及空格。
 * 该页面不能在本机电脑测试，请到服务器上做测试。请确保外部可以访问该页面。
 * 该页面调试工具请使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyNotify
 * 如果没有收到该页面返回的 success 信息，支付宝会在24小时内按一定的时间策略重发通知
 */

require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");

//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();

if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代

	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
	
    //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
	
	//商户订单号
	$out_trade_no = $_POST['out_trade_no'];

	//支付宝交易号
	$trade_no = $_POST['trade_no'];

	//交易状态
	$trade_status = $_POST['trade_status'];


    if($_POST['trade_status'] == 'TRADE_FINISHED') {
		
    }
    else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
		$link=mysqli_connect("203.191.150.206", "root", "edongidc,cn","zhenzhu");
		 mysqli_query($link,"SET NAMES utf8");
		 mysqli_query($link,"update tp_bl_order set zhifu_type='支付宝',status=1,wx_orderid='$trade_no' where orderid='{$out_trade_no}' ");
		 //查出订单相应产品
		 $re=mysqli_query($link,"select * from tp_bl_order where orderid='{$out_trade_no}'");
		 $data=mysqli_fetch_assoc($re);
		 $result=mysqli_query($link,"select * from tp_bl_order_data where order_id='{$data['id']}'");
		 
		 while($row = mysql_fetch_assoc($result) ){
		     //原始数量
		     $num=mysqli_query($link,"select sale from tp_bl_product_data where id='{$row['product_id']}'");
		     $num=mysqli_fetch_assoc($num);
		     //新数量
		     $num=$num['sale']+$row['number'];
		     mysqli_query($link,"update tp_bl_product_data set sale=$num where id='{$row['product_id']}' ");
		 }
		 mysqli_close($link);
    }

	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
        
	echo "success";		//请不要修改或删除
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    echo "fail";

    //调试用，写文本函数记录程序运行情况是否正常
    //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
}
?>