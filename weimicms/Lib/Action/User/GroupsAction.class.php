<?php
class GroupsAction extends UserAction
{
    public $thisWxUser;
    public function _initialize()
    {
        parent::_initialize();
        $where = array('token' => $this->token);
        $this->thisWxUser = M('Wxuser')->find();
        if (!$this->thisWxUser['appid'] || !$this->thisWxUser['appsecret']) {
            $this->error('请先设置AppID和AppSecret再使用本功能，谢谢', '?g=User&m=Index&a=edit&id=' . $this->thisWxUser['id']);
        }
        if ($this->thisWxUser['winxintype'] != 3) {
        }
    }
    

    public function curlGet($url, $method = 'get', $data = '')
    {
        $ch = curl_init();
        $header = 'Accept-Charset: utf-8';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $temp = curl_exec($ch);
        return $temp;
    }
    public function showExternalPic()
    {
        $types = array('gif' => 'image/gif', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'jpe' => 'image/jpeg', 'png' => 'image/png');
        $wecha_id = $this->_get('wecha_id');
        $token = $this->_get('token');
        $imgData = S($token . '_' . $wecha_id);
        if (!$imgData) {
            $url = $_GET['url'];
            $dir = pathinfo($url);
            $host = $dir['dirname'];
            $refer = 'http://www.qq.com/';
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_REFERER, $refer);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
            $data = curl_exec($ch);
            curl_close($ch);
            $ext = strtolower(substr(strrchr($url, '.'), 1, 10));
            $ext = 'jpg';
            $type = $types[$ext] ? $types[$ext] : 'image/jpeg';
            S($token . '_' . $wecha_id, $data);
            header('Content-type: ' . $type);
            echo $data;
        } else {
            $ext = 'jpg';
            $type = $types[$ext] ? $types[$ext] : 'image/jpeg';
            header('Content-type: ' . $type);
            echo $imgData;
        }
    }
    public function groups()
    {
        $wechat_group_db = M('Wechat_group');
        $groups = $wechat_group_db->where(array('token' => $this->token))->order('id ASC')->select();
        $this->assign('groups', $groups);
        $this->display();
    }
    public function sysGroups()
    {
        $wechat_group_db = M('Wechat_group');
        $access_token = $this->_getAccessToken();
        $url = 'https://api.weixin.qq.com/cgi-bin/groups/get?access_token=' . $access_token;
        $json = json_decode($this->curlGet($url));
        $wechat_groups = $json->groups;
        $wechat_groups_ids = array();
        if ($wechat_groups) {
            foreach ($wechat_groups as $g) {
                $thisGroupInDb = $wechat_group_db->where(array('token' => $this->token, 'wechatgroupid' => $g->id))->find();
                $arr = array('token' => $this->token, 'wechatgroupid' => $g->id, 'name' => $g->name, 'fanscount' => $g->count);
                if (!$thisGroupInDb) {
                   $wechat_group_db->add($arr);
                } else {
                   $wechat_group_db->where(array('id' => $thisGroupInDb['id']))->save($arr);
                }
                array_push($wechat_groups_ids, $g->id);
            }
        }
        $groups = $wechat_group_db->where(array('token' => $this->token))->order('id ASC')->select();
        if ($groups) {
            foreach ($groups as $g) {
                if (!in_array($g['wechatgroupid'], $wechat_groups_ids)) {
                    $wechat_group_db->where(array('id' => $g['id']))->delete();
                }
            }
        }
        $this->success('操作成功', U('Groups/groups'));
    }
public function groupSet()
    {
        $wechat_group_db = M('Wechat_group');
        $thisGroup = $wechat_group_db->where(array('id' => intval($_GET['id'])))->find();
        if ($thisGroup && $thisGroup['token'] != $this->token) {
            $this->error('非法操作');
        }
        if (IS_POST) {
            $arr = array();
            $arr['name'] = $this->_post('name');
            $arr['intro'] = $this->_post('intro');
            $arr['token'] = $this->token;
            $access_token = $this->_getAccessToken();
            if (isset($_POST['id'])) {
                $url = 'https://api.weixin.qq.com/cgi-bin/groups/update?access_token=' . $access_token;
                $json = json_decode($this->curlGet($url, 'post', '{"group":{"id":' . $thisGroup['wechatgroupid'] . ',"name":"' . $arr['name'] . '"}}'));
                $wechat_group_db->where(array('id' => intval($_POST['id'])))->save($arr);
            } else {
                $url = 'https://api.weixin.qq.com/cgi-bin/groups/create?access_token=' . $access_token;
                $json = json_decode($this->curlGet($url, 'post', '{"group":{"name":"' . $arr['name'] . '"}}'));
                $arr['wechatgroupid'] = $json->group->id;
                $wechat_group_db->add($arr);
            }
            //$this->success('操作成功', U('Wechat_group/groups'));
        } else {
            $this->assign('thisGroup', $thisGroup);
            $this->display();
        }
    }
    public function groupDelete()
    {
    }
    public function _getAccessToken()
    {
    $Wxuser=M('Wxuser')->find();
	    //session(array('name'=>'access_token','expire'=>3600));
	    $access_token=M("Bl_access_token")->where("id=1")->find();
   		if(($access_token['createtime']+3600)>time()){
   			return $access_token['access_token'];
   		}else{
	        $url_get = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=' . $Wxuser['appid'] . '&secret=' . $Wxuser['appsecret'];
	        $json = json_decode($this->curlGet($url_get));
	        if (!$json->errmsg) {
	        } else {
	            $this->error('获取access_token发生错误：错误代码' . $json->errcode . ',微信返回错误信息：' . $json->errmsg);
	        }
	    //session("access_token",$json->access_token);
	    	M("Bl_access_token")->where("id=1")->save(array("access_token"=>$json->access_token,"createtime"=>time()));
	        return $json->access_token;
   		}
    }
}