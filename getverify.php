<?PHP 
//改demo的功能是群发短信和发单条短信。（传一个手机号就是发单条，多个手机号既是群发）

//您把序列号和密码还有手机号，填上，直接运行就可以了
session_start();
$rand=$_SESSION['rand'];
$mobile=$_GET['mobile'];
$flag = 0; 
        //要post的数据 

$argv = array( 
         'sn'=>'SDK-SQF-010-00001', ////替换成您自己的序列号
		 'pwd'=>strtoupper(md5('SDK-SQF-010-00001'.'615969')), //此处密码需要加密 加密方式为 md5(sn+password) 32位大写
		 'mobile'=>$mobile,
		 'content'=>urlencode( '您好,您的验证码为：'.$rand.'[青峰A]'),//短信内容
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
?>
