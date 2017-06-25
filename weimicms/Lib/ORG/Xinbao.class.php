<?php
class Xinbao extends BaseAction{
    //测试环境地址
    protected $url="http://123.56.205.60:8080/baoliantest/itxsvc/param";
    //正式环境地址
    //protected $url="http://123.56.204.21:81/baolian/itxsvc/param";
    // 新保本地测试
    //protected $url="http://siebre01.f3322.net:1010/siaweb/itxsvc/param";
    protected function https_request($url, $data)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        $errorno= curl_errno($curl);
        if ($errorno) {
            return array('curl'=>false,'errorno'=>$errorno);
        }else{
            $ob= simplexml_load_string($output);
            $json  = json_encode($ob);
            $configData = json_decode($json, true);
            return $configData;
        }
        curl_close($curl);
    }
    public function changeUser($type,$array,$status=null){
        if($status==1){
            $status="NOCERTIFICATION";
        }elseif ($status==2){
            $status="AUDIT";
        }elseif ($status==3){
            $status="SUCCESSED";
        }elseif ($status==4){
            $status="FAILURE";
        }
        if(isset($array['sex'])){
            if($array['sex']==1){
                $array['sex']="N";
            }else{
                $array['sex']="F";
            }
        }
        if($type==1){
            $type="REGIST";
        }else if($type==2){
            $type="UPDATE";
        }else if($type==3){
            $type="CERTIFICATION";
        }
        $str=microtime(true);
        $str=str_replace(".", "", $str);
        $content='<?xml version="1.0" encoding="UTF-8"?>
                <ItxEnvelope>
                    <Header>
                        <messageId>Wechat'.$str.'</messageId>
                        <transCode>0113</transCode>
                        <partnerCode>800</partnerCode>
                        <transDate>'.date("Y-m-d",time()).'</transDate>
                    </Header>
                    <Body>
                    	<AgentInfoRequest>
                            <agentOperate>'.$type.'</agentOperate>
                            <reinforceId>'.$array['pid'].'</reinforceId>
                            <agentSource>weChat</agentSource>
							<agentNickname>'.$array['nickname'].'</agentNickname>
                            <agentName>'.$array['xingming'].'</agentName>
                            <agentPhoneNumber>'.$array['tel'].'</agentPhoneNumber>
                            <gender>'.$array['sex'].'</gender>
                            <agentId>'.$array['agentId'].'</agentId>
                            <agentCompany>'.$array['company'].'</agentCompany>
                            <agentPosition>'.$array['company_position'].' </agentPosition>
                            <agentJianLi> '.$array['profile'].'</agentJianLi>
                            <agentIdType>SOCIAL_SECURITY_CARD</agentIdType>
                            <agentIdCard>'.$array['card_num'].'</agentIdCard>
                            <birthDate>'.$array['birth'].'</birthDate>
                            <email>'.$array['email'].'</email>
                            <certificatStatus>'.$status.'</certificatStatus>
							 <touxiangUrl>' . $array['touxiangUrl'] . '</touxiangUrl> 
                    	</AgentInfoRequest>
                    </Body>
                </ItxEnvelope>
            ';
       
        $arr=array(
            'transCode'=>'0113',
            'tradingPartner'=>'800',
            'requestMessage'=>$content
        );
        $arr=http_build_query($arr);
        $user=$this->https_request($this->url,$arr);
        M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0113','type'=>'user'));
        return $user;
    }
 
    
    public function getProduct(){
        $str=microtime(true);
        $str=str_replace(".", "", $str);
        $content='<?xml version="1.0" encoding="UTF-8"?>
                <ItxEnvelope>
                    <Header>
                        <messageId>Wechat'.$str.'</messageId>
                        <transCode>0118</transCode>
                        <partnerCode>800</partnerCode>
                        <transDate>'.date("Y-m-d",time()).'</transDate>
                    </Header>
                    <Body>
                    	<ProductListRequest>
                            <userName></userName>
                    	</ProductListRequest>
                    </Body>
                </ItxEnvelope>
            ';
        $arr=array(
            'transCode'=>'0118',
            'tradingPartner'=>'800',
            'requestMessage'=>$content
        );
        $arr=http_build_query($arr);
        $product=$this->https_request($this->url,$arr);
        M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0118','type'=>'getproduct'));
        return $product;
    }
    
    public function changeMoney($agentId,$transactionType,$transactionSign,$money){
        if($transactionSign==1){
            $transactionSign="+";
        }else {
            $transactionSign="-";
        }
        $str=microtime(true);
        $str=str_replace(".", "", $str);
        $content='<?xml version="1.0" encoding="UTF-8"?>
                <ItxEnvelope>
                    <Header>
                        <messageId>Wechat'.$str.'</messageId>
                        <transCode>0120</transCode>
                        <partnerCode>800</partnerCode>
                        <transDate>'.date("Y-m-d",time()).'</transDate>
                    </Header>
                    <Body>
                    	<AccountInfoUpdateRequest>
                            <agentId>'.$agentId.'</agentId>
                            <source>WeChat</source>
                            <transactionType>'.$transactionType.'</transactionType>
                            <transactionSign>'.$transactionSign.'</transactionSign>
                            <money>'.$money.'</money>
                    	</AccountInfoUpdateRequest>
                    </Body>
                </ItxEnvelope>
            ';
        $arr=array(
            'transCode'=>'0120',
            'tradingPartner'=>'800',
            'requestMessage'=>$content
        );
        $arr=http_build_query($arr);
        $result=$this->https_request($this->url,$arr);
        M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0120','type'=>'money'));
        return $result;    
    }
    
    public function getMoney($agentId=null){
        $str=microtime(true);
        $str=str_replace(".", "", $str);
        $content='<?xml version="1.0" encoding="UTF-8"?>
                <ItxEnvelope>
                    <Header>
                        <messageId>Wechat'.$str.'</messageId>
                        <transCode>0121</transCode>
                        <partnerCode>800</partnerCode>
                        <transDate>'.date("Y-m-d",time()).'</transDate>
                    </Header>
                    <Body>
                    	<AccountInfoRequest>
                            <agentId>'.$agentId.'</agentId>
                    	</AccountInfoRequest>
                    </Body>
                </ItxEnvelope>
            ';
        $arr=array(
            'transCode'=>'0121',
            'tradingPartner'=>'800',
            'requestMessage'=>$content
        );
        $arr=http_build_query($arr);
        $money=$this->https_request($this->url,$arr);
        M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0121','type'=>'getmoney'));
        return $money;
    }
    
    public function xinQiYue($array){
        $str=microtime(true);
        $str=str_replace(".", "", $str);
        $content='<?xml version="1.0" encoding="UTF-8"?>
                    <ItxEnvelope>
                        <Header>
                            <messageId>Wechat'.$str.'</messageId>
                            <transCode>0119</transCode>
                            <partnerCode>800</partnerCode>
                            <transDate>'.date("Y-m-d",time()).'</transDate>
                        </Header>               
                        <Body> 
                            <PolicyTransactionRequest> 
                                <!-- 保单交易 -->  
                                <PolicyTransaction> 
                                    <!-- kind的文字节点为New Underwriting标识该保单交易为承保交易 -->  
                                    <kind>New Underwriting</kind> 
                                </PolicyTransaction>  
                                <!-- 订单信息 -->  
                                <Order> 
                                    <!-- 订单号 -->  
                                    <orderNumber>'.$str.'</orderNumber>  
                                    <!-- 订单金额 -->  
                                    <orderAmount>'.$array['price'].'</orderAmount>  
                                    <!-- 币种 -->  
                                    <currencyType>RMB</currencyType>  
                                    <!-- 订单支付状态 -->  
                                    <paymentStatus>SETTLED</paymentStatus>  
                                    <OrderItems> 
                                        <!-- 保单信息,可重复 -->  
                                        <InsurancePolicy> 
                                            <!-- 产品代码 -->  
                                            <productCode>'.$array['productCode'].'</productCode>  
                                            <!-- 保单号 -->  
                                            <externalReference></externalReference>
                    						<!-- 投保单号 -->
                    						<applicationNumber></applicationNumber>
                                            <Properties> 
                                                <Property kind="premium" name="保费" value="'.$array['price'].'"/>  
                                                <Property kind="unitCount" name="保险份数" value="'.$array['fenshu'].'"/>  
                                                <Property kind="discountRate" name="优惠折扣" value=""/>  
                                                <Property kind="grossPremium" name="总保费(打折后)" value="'.$array['price'].'"/>  
                                                <Property kind="insuredAmount" name="保额" value=""/>  
                                                <Property kind="sendSMS" name="发送短信" value="true"/>  
                                                <Property kind="flightNumber" name="航班号" value=""/>  
                                                <Property kind="departureCity" name="出发城市" value=""/>  
                                                <Property kind="flightDate" name="航班日期" value=""/>  
                                                <Property kind="reachCity " name="到达城市" value=""/>  
                                                <Property kind="inceptionDate" name="保险起期" value="'.$array['qishi'].'"/>  
                                                <Property kind="plannedEndDate" name="保险止期" value="'.$array['jiezhi'].'"/>  
                                                <Property kind="benefitDuration" name="保障期数" value=""/>  
                                                <!--借意险专用 -->  
                                                <Property kind="duringLoans" name="贷款期间" value=""/>  
                                                <Property kind="riskAmount" name="风险保额" value=""/>  
                                                <Property kind="beneficiaryMode" name="受益方式" value=""/>  
                                                <Property kind="paymentDocNumber" name="货款凭证编号" value=""/>  
                                                <Property kind="paymentContractNum" name="货款合同号" value=""/>  
                                                <Property kind="plan" name="方案计划" value="'.$array['plan'].'"/>
                                                <Property kind="plateNumbers" name="车牌号" value="'.$array['chepai'].'"/> 
                                            </Properties>  
                                            <Roles> 
                                                <Role> 
                                                    <!-- 当kind为Applicant时，标识该Role为投保人 -->  
                                                    <kind>Applicant</kind>  
                                                    <!-- 角色的顺序 -->  
                                                    <seqIndex>0</seqIndex>  
                                                    <Properties> 
                                                        <Property kind="fullName" name="姓名" value="'.$array['xingming'].'"/>  
                                                        <Property kind="gender" name="性别" value="'.$array['sex'].'"/>  
                                                        <Property kind="idType" name="证件类型" value="'.$array['card_type'].'"/>  
                                                        <Property kind="idNumber" name="证件号码" value="'.$array['card_num'].'"/>  
                                                        <Property kind="birthDate" name="出生日期" value="'.$array['birth'].'"/>  
                                                        <Property kind="phoneNumber" name="联系电话" value="'.$array['tel'].'"/>  
                                                        <Property kind="email" name="邮箱地址" value="'.$array['email'].'"/>  
                                                        <Property kind="province" name="所在省" value=""/>  
                                                        <Property kind="city" name="所在市" value=""/>  
                                                        <Property kind="occupationDescription" name="职业类别" value=""/> 
                                                    </Properties> 
                                                </Role>  
                                                <Role> 
                                                    <!-- 当kind为Insured时，标识该Role为被保人 -->  
                                                    <kind>Insured</kind>  
                                                    <!-- 角色的顺序 -->  
                                                    <seqIndex>0</seqIndex>  
                                                    <Properties> 
                                                        <Property kind="fullName" name="姓名" value="'.$array['xingming_b'].'"/>  
                                                        <Property kind="gender" name="性别" value="'.$array['sex_b'].'"/>  
                                                        <Property kind="idType" name="证件类型" value="'.$array['card_type_b'].'"/>  
                                                        <Property kind="idNumber" name="证件号码" value="'.$array['card_num_b'].'"/>  
                                                        <Property kind="birthDate" name="出生日期" value="'.$array['birth_b'].'"/>  
                                                        <Property kind="phoneNumber" name="联系电话" value="'.$array['tel_b'].'"/>  
                                                        <Property kind="email" name="邮箱地址" value=""/>  
                                                        <Property kind="province" name="所在省" value=""/>  
                                                        <Property kind="city" name="所在市" value=""/>  
                                                        <Property kind="relatedToApplicantCode" name="投保人与被保险人关系" value="'.$array['relate'].'"/>  
                                                        <Property kind="occupationDescription" name="职业类别" value=""/>  
                                                        <Property kind="occupationCode" name="职业代码" value=""/>  
                                                        <Property kind="industryCode" name="行业代码" value=""/>  
                                                        <Property kind="accidentRiskType" name="意外风险类别" value=""/> 
                                                    </Properties> 
                                                </Role>  
                                                <Role> 
                                                    <!-- 销售渠道 -->  
                                                    <kind>SellingChannel</kind>  
                                                    <Properties> 
                                                        <Property kind="intermediaryCode" name="中介网点代码" value=""/>  
                                                        <Property kind="AgentCode" name="代理人代码" value="'.$array['agentid'].'"/>  
                                                        <Property kind="agentId" name="代理人ID" value="'.$array['agentid'].'"/>
                                                        <Property kind="memberShipGroup" name="保险公司" value="'.$array['company'].'"/>
                                                    </Properties> 
                                                </Role> 
                                            </Roles> 
                                        </InsurancePolicy> 
                                    </OrderItems> 
                                </Order> 
                            </PolicyTransactionRequest> 
                        </Body> 
                    </ItxEnvelope>
            ';
        $arr=array(
            'transCode'=>'0119',
            'tradingPartner'=>'800',
            'requestMessage'=>$content
        );
        $arr=http_build_query($arr);
        $xinQiYue=$this->https_request($this->url,$arr);
        M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0119','type'=>'xinQiYue'));
        return $xinQiYue;
    }
    
    
    public function getbaodan_info($agentId,$type){
        $str=microtime(true);
        $str=str_replace(".", "", $str);
        $content='<?xml version="1.0" encoding="UTF-8"?>
                <ItxEnvelope>
                    <Header>
                        <messageId>Wechat'.$str.'</messageId>
                        <transCode>0122</transCode>
                        <partnerCode>800</partnerCode>
                        <transDate>'.date("Y-m-d",time()).'</transDate>
                    </Header>
                    <Body>
                        <PolicyInquiryRequest>
                        	<agentId>'.$agentId.'</agentId>
                        </PolicyInquiryRequest>
                            
                    </Body>
                </ItxEnvelope>
            ';
        $arr=array(
            'transCode'=>'0122',
            'tradingPartner'=>'800',
            'requestMessage'=>$content
        );
        $arr=http_build_query($arr);
        $baodan=$this->https_request($this->url,$arr);
        M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0122','type'=>'getbaodan'));
        return $baodan;
    }
    
    
    
    public function getbaodan_list($agentid,$type){
    	$str=microtime(true);
    	$str=str_replace(".", "", $str);
    	if($type==1){
    		$type="OFFERED";
    	}else{
    		$type="LAPSED";
    	}
    	$content='<?xml version="1.0" encoding="UTF-8"?>
                <ItxEnvelope>
                    <Header>
                        <messageId>Wechat'.$str.'</messageId>
                        <transCode>0219</transCode>
                        <partnerCode>800</partnerCode>
                        <transDate>'.date("Y-m-d",time()).'</transDate>
                    </Header>
                    <Body>
                        <PolicyInquiryRequest>
                        	<agentId>'.$agentid.'</agentId>
                        	<page>1</page>
              				<index>100</index>
                        	<policyStatus>'.$type.'</policyStatus>
                        </PolicyInquiryRequest>
                    </Body>
                </ItxEnvelope>
            ';
    	$arr=array(
    			'transCode'=>'0219',
    			'tradingPartner'=>'800',
    			'requestMessage'=>$content
    	);
    	$arr=http_build_query($arr);
    	$baodan=$this->https_request($this->url,$arr);
    	M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0219','type'=>'getbaodan_list'));
    	return $baodan;
    }
    
    public function get_money_info($agentid){
    	$str=microtime(true);
    	$str=str_replace(".", "", $str);
    	$content='<?xml version="1.0" encoding="UTF-8"?>
                <ItxEnvelope>
                    <Header>
                        <messageId>Wechat'.$str.'</messageId>
                        <transCode>0122</transCode>
                        <partnerCode>800</partnerCode>
                        <transDate>'.date("Y-m-d",time()).'</transDate>
                    </Header>
                    <Body>
                        <PolicyInquiryRequest>
                        	<agentId>'.$agentid.'</agentId>
                        </PolicyInquiryRequest>
    	
                    </Body>
                </ItxEnvelope>
            ';
    	$arr=array(
    			'transCode'=>'0122',
    			'tradingPartner'=>'800',
    			'requestMessage'=>$content
    	);
    	$arr=http_build_query($arr);
    	$baodan=$this->https_request($this->url,$arr);
    	M("Baowen")->add(array('content'=>$content,'ip'=>$_SERVER['SERVER_ADDR'],'createtime'=>time(),'time'=>date('Y-m-d H:i:s',time()),'messageId'=>$str,'transCode'=>'0122','type'=>'getbaodan'));
    	return $baodan;
    }
    
    //写日志
    public function log($log_content){
        $max_size=10000000;
        $log_filename="./log.txt";
        if(file_exists($log_filename) && (abs(filesize($log_filename))>$max_size)){
            unlink($log_filename);
        }
        file_put_contents($log_filename,date("H:i:s")." ".$log_content."\n",FILE_APPEND);
    }
    
    
    
    
}