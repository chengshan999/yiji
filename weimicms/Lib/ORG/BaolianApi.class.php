<?php

/**
 * Author: zhangzhanyue
 * 保联接口
 * 2016 - 04 -25
 * 
 */
class BaolianApi extends BaseAction {

    public function httpRequest($url, $data) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type:application/json",
//            "Content-Length:" . strlen($data)));
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

    //日期转换wei
    public function magic_float() {
        $time = explode(" ", microtime());
        $time = $time [1] . ($time [0] * 1000);
        $time2 = explode(".", $time);
        $timeStap = $time2 [0];
        return $timeStap;
    }

    /*
     * Author: zhangzhanyue
     * 用户增加卡券接口  调用李伟接口
     */

    public function User_CardCoupons($arr) {
        //测试地址
        $url = "http://123.56.204.41:8081/blgs/api/cardCoupons/add";
        //正式地址
//        $url = "http://123.56.205.60:8081/blgs/api/cardCoupons/add";
        $timeStap = $this->magic_float();
        $key = array('appKey' => 'b001', 'timeStap' => $timeStap);
        $sercur = '2CC2E8D8E4383D959AF6529C4D2113A55D9E0680';
        $data = array_merge($key, $arr);
        ksort($data);
        foreach ($data as $k => $v) {
            $result .= strtoupper($k) . $v;
        }
        $sign = $sercur . $result . $sercur;
        $sign = strtoupper(sha1($sign));
        $sha1 = array('sign' => $sign);
        $data = array_merge($data, $sha1);
        $user = $this->httpRequest($url, $data);
        $dirName = "UserCard";
        $this->log(json_decode($user), $user, $dirName, "注册用户新增卡券返回状态");
        return $user;
    }

    /*
     * 
     * Author: zhangzhanyue
     * desc: 用户抽奖记录  调用接口存入数据
     * date: 2016-04-26
     */

    public function MagicRecord($arr) {
        //测试地址
        $url = "http://123.56.204.41:8081/blgs/api/cardCoupons/use";
//        正式
//        $url = "http://123.56.205.60:8081/blgs/api/cardCoupons/use";
        $timeStap = $this->magic_float();
        $key = array('appKey' => 'b001', 'timeStap' => $timeStap);
        $sercur = '2CC2E8D8E4383D959AF6529C4D2113A55D9E0680';
        $data = array_merge($key, $arr);
        ksort($data);
        foreach ($data as $k => $v) {
            $result .= strtoupper($k) . $v;
        }
        $sign = $sercur . $result . $sercur;
        $sign = strtoupper(sha1($sign));
        $sha1 = array('sign' => $sign);
        $data = array_merge($data, $sha1);
//        $data = json_encode($shu);
        $user = $this->httpRequest($url, $data);
        $dirName = "UserMagicRecord";
        $this->log(json_decode($user), $user, $dirName, "用户抽奖记录");
        return $user;
    }

    /*
     * 
     * Author: zhangzhanyue
     * desc: 余额支付接口
     * date: 2016-05-04
     */

    public function User_Balance($arr) {
        //测试地址
        $url = "http://123.56.204.41:8081/blgs/api/balancePay/getPayInfo";
        //正式地址
//        $url = "http://123.56.205.60:8081/blgs/api/balancePay/getPayInfo";
        $timeStap = $this->magic_float();
        $key = array('appKey' => 'b001', 'timeStap' => $timeStap);
        $sercur = '2CC2E8D8E4383D959AF6529C4D2113A55D9E0680';
        $data = array_merge($key, $arr);
        ksort($data);
        foreach ($data as $k => $v) {
            $result .= strtoupper($k) . $v;
        }
        $sign = $sercur . $result . $sercur;
        $sign = strtoupper(sha1($sign));
        $sha1 = array('sign' => $sign);
        $data = array_merge($data, $sha1);
        $user = $this->httpRequest($url, $data);
        $dirName = "UserBalance";
        $this->log(json_decode($user), $user, $dirName, "余额支付");
        return $user;
    }

    /**
     * 
     * Author: zhangzhanyue
     * 计算余额支付
     */
    public function reckon_balance($arr) {
        //测试地址
        $url = "http://123.56.204.41:8081/blgs/api/balancePay/computeBalance";
        //正式地址
//        $url = "http://123.56.205.60:8081/blgs/api/balancePay/computeBalance";

        $timeStap = $this->magic_float();
        $key = array('appKey' => 'b001', 'timeStap' => $timeStap);
        $sercur = '2CC2E8D8E4383D959AF6529C4D2113A55D9E0680';
        $data = array_merge($key, $arr);
        ksort($data);
        foreach ($data as $k => $v) {
            $result .= strtoupper($k) . $v;
        }
        $sign = $sercur . $result . $sercur;
        $sign = strtoupper(sha1($sign));
        $sha1 = array('sign' => $sign);
        $data = array_merge($data, $sha1);
        $user = $this->httpRequest($url, $data);
        $dirName = "User-reckon-Balance";
        $this->log(json_decode($user), $user, $dirName, "计算余额");
        return $user;
    }

    //写入日志文件
    public function log($log_content, $info, $dirName, $str) {
        $file_name = date("Y-m-d") . "-" . $dirName;
        $max_size = 10000000;
        $log_filename = "./baolian-log/$file_name.log";
        if (file_exists($log_filename) && (abs(filesize($log_filename)) > $max_size)) {
            unlink($log_filename);
        }
        $log_content.= print_r($log_content, true);
        $log_content.= "\r\n";
        $log_content.= $info;
        $log_content.= "\r\n";
        $log_content.= "\r\n";
        $log_content.= "--------------------------- $str ------------------------------------" . "\r\n";
        file_put_contents($log_filename, date("Y-m-d H:i:s") . $log_content, FILE_APPEND);
    }

}
