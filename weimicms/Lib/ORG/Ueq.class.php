<?php
class Ueq extends BaseAction{
    //测试环境数据
//     protected $url="http://120.26.227.237:2020/ueq-openapi/openapi/handle";
//     protected $appkey="b0b940ef-1c55-4a4c-9d1e-2252de60ee18";
//     protected $token="1af0e804-d791-4384-a5f8-f2cce57659c1";
//     protected $secret="53a211e7-9edc-46bb-b5ee-f03c74fe7751";
        //正式数据
    protected $url="http://openapi.ueq.com/ueq-openapi/openapi/handle";
    protected $appkey="dd577aed-719c-4ccb-837d-6030109390a3";
    protected $token="d6e9e2f2-218f-4533-80cf-28976390c168";
    protected $secret="780cd07d-087d-4819-8426-f92e65f89dff";
            
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
            $configData = json_decode($output, true);
            return $configData;
        }
        curl_close($curl);
    }
    
    //生成订单
    public function createOrder($data){
        $time=date("Y-m-d H:i:s",time());
        foreach($data['orderList'] as $k=>$v){
            $data['orderListInfo'][]=array(
                'productId'=>$v['tiaoxingma'],
                'productName'=>$v['productName'],
                'qty'=>$v['num'],
                'price'=>$v['price'],
                'total'=>$v['product_total_price']
            );
        }
        $data= array(
            'orderId'=>$data['orderid'],
            'orderDate'=>$time,
            'name'=>$data['xingming'],
            'cardType'=>'0',
            'cardNo'=>$data['card_num'],
            'phone'=>$data['tel'],
            'buyeregno'=>$data['zhanghao'],
            'consignee'=>$data['shouhuo_xingming'],
            'province'=>$data['province'],
            'city'=>$data['city'],
            'area'=>$data['area'],
            'addr'=>$data['addr'],
            'mobile'=>$data['shouhuo_tel'],
            'tariff'=>'0',
            'discount'=>'0',
            'acturalpaid'=>$data['total_price'],
            'goodsinfo'=>$data['productInfo'],
            'total'=>$data['total_price'],
            'freight'=>'0',
            'insuredFee'=>'0',
            'portCode'=>'5141',//口岸编码
            'busiMode'=>'BC',
            'whCode'=>'SEL1',//仓库码
            'isinsure'=>'N',
            'isdelayinsure'=>'N',
            'orderItemList'=>array(
                'orderItems'=>$data['orderListInfo']
            )
        );
        $params=json_encode($data,JSON_UNESCAPED_UNICODE);
        //算签名
        $sign=$this->secret.$this->appkey.'jsonueq.order.add'.$params.$time.$this->token.'U1'.$this->secret;
        $sign=md5($sign);
        $sign=base64_encode($sign);
        $arr=array(
            'appkey'=>$this->appkey,
            'sign'=>$sign,
            'token'=>$this->token,
            'secret'=>$this->secret,
            'timestamp'=>$time,
            'v'=>'U1',
            'format'=>'json',
            'method'=>'ueq.order.add',
            'params'=>$params
        );
        //$arr=http_build_query($arr);
        $data='appkey='.$arr['appkey'].'&sign='.$arr['sign'].'&token='.$arr['token'].'&secret='.$arr['secret'].'&timestamp='.$arr['timestamp'].'&v='.$arr['v'].'&format='.$arr['format'].'&method='.$arr['method'].'&params='.$arr['params'];
        $result=$this->https_request($this->url, $data);
        return $result['response'];
    }
    
    //查询订单物流信息
    public function queryOrder($ueq_order){
        $time=date("Y-m-d H:i:s",time());
        $data=array('ueqExpressCode'=>$ueq_order);
        $params=json_encode($data,JSON_UNESCAPED_UNICODE);
        //算签名
        $sign=$this->secret.$this->appkey.'jsonueq.express.getByUeqExpressCode'.$params.$time.$this->token.'U1'.$this->secret;
        $sign=md5($sign);
        $sign=base64_encode($sign);
        $arr=array(
            'appkey'=>$this->appkey,
            'sign'=>$sign,
            'token'=>$this->token,
            'secret'=>$this->secret,
            'timestamp'=>$time,
            'v'=>'U1',
            'format'=>'json',
            'method'=>'ueq.express.getByUeqExpressCode',
            'params'=>$params
        );
        $data='appkey='.$arr['appkey'].'&sign='.$arr['sign'].'&token='.$arr['token'].'&secret='.$arr['secret'].'&timestamp='.$arr['timestamp'].'&v='.$arr['v'].'&format='.$arr['format'].'&method='.$arr['method'].'&params='.$arr['params'];
        $result=$this->https_request($this->url, $data);
        if($result['response']['code']=='1'){
            return $result['response']['expressRoute']['expressRouteItemList']['expressRouteItems'];
        }else{
            return $result['desc'];
        }
    }
    
}