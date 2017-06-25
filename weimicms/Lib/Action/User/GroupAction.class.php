<?php
class GroupAction extends UserAction{
	public function _initialize(){
		parent::_initialize();
	}
	// 获取所有节点信息
	public function getAllNode($node='',$where = '' , $order = 'sort ASC,id ASC') {
	    return $node->where($where)->order($order)->select();
	}
	
	// 获取单个节点信息
	public function getNode($node='',$where = '',$field = '*') {
	    return $this->field($field)->where($where)->find();
	}

	public function index(){
		$db=M('bl_group');
		$count=$db->count();
		$page=new Page($count,20);
		$list=$db->order('id ASC')->limit($page->firstRow.','.$page->listRows)->select();
		$show=$page->show();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
		
	}
	public function add(){
		if (IS_POST) {
			$db=M('bl_group');
			$_POST['time']=time();
			if($db->create()){
				if($db->add()){
    				$this->success('添加成功！',U('Group/index',array('token'=>$this->token)));
				}else{
					 $this->error('添加失败!');
				}
			}else{
				$this->error($db->getError());
			}
		}else {
			$this->display();
		}
	}
	public function edit(){
		$db=M('bl_group');
		if (IS_POST) {
			if ($db->create()) {
				if($db->save()){
    				$this->success('修改成功！',U('Group/index',array('token'=>$this->token)));
				}else{
					 $this->error('修改失败!');
				}
			}else{
				$this->error($db->getError());
			}
		}else{
			$id = $this->_get('id','intval',0);
			if (!$id||$id==1) {
				$this->error('参数错误');
			}
			$info=$db->find($id);
			$this->assign('info',$info);
			$this->display();
		}
		
	}
	public function del(){
		$id = $this->_get('id','intval',0);
		$db = M('bl_group');
		$res=$db->delete($id);
		if($res){
			$this->success('删除成功！',U('Group/index',array('token'=>$this->token)));
		}else{
			$this->error('删除失败!');
		}
	}
	/**
	 *  检查指定菜单是否有权限
	 * @param array $node node表中某记录数组
	 * @param int $roleid 需要检查的角色ID
	 * @param int $access access表的所有数组记录
	 */
	public function is_checked($node,$roleid,$access) {
	    
	    $nodetemp = array(
	        'role_id' =>$roleid,
	        'node_id' =>$node['id'],
	        'pid' =>$node['pid'],
	        'level'   =>$node['level'],
	    );
	    $info = in_array($nodetemp, $access);
	    if($info){
	        return true;
	    } else {
	        return false;
	    }
	}
	/**
	 * 获取菜单深度
	 * @param $id
	 * @param $array
	 * @param $i
	 */
	public function get_level($id,$array=array(),$i=0) {
	    foreach($array as $n=>$value){
	        if($value['id'] == $id)
	        {
	            if($value['pid']== '0') return $i;
	            $i++;
	            return $this->get_level($value['pid'],$array,$i);
	        }
	    }
	}
	public function divideNode(){
		if (IS_POST) {
			$roleid = $this->_post('roleid','intval',0);
	        $nodeid = $this->_post('nodeid');
	        if(!$roleid) $this->error('参数错误!');
	        $AccessDB = D('bl_access');
	        if (is_array($nodeid) && count($nodeid) > 0) {  //提交得有数据，则修改原权限配置
	            $AccessDB -> delAccess(array('role_id'=>$roleid));  //先删除原用户组的权限配置
	            $NodeDB = D('bl_node');
	            $node = $this->getAllNode($NodeDB);
	
	            foreach ($node as $_v) $node[$_v[id]] = $_v;
	            foreach($nodeid as $k => $node_id){
	                $data[$k] = $AccessDB -> get_nodeinfo($node_id,$node);
	                $data[$k]['role_id'] = $roleid;
	            }
	            $AccessDB->addAll($data);   // 重新创建角色的权限配置
	        } else {    //提交的数据为空，则删除权限配置
	            $AccessDB -> delAccess(array('role_id'=>$roleid));
	        }
	        $this->success('设置成功！',U('Group/divideNode',array('roleid'=>$roleid,'token'=>$this->token)));
		}else{
			$roleid = $this->_get('roleid','intval',0);
			if(!$roleid) $this->error('参数错误!');
			
			$Tree = new Tree();
			$Tree->icon = array('&nbsp;&nbsp;&nbsp;│ ','&nbsp;&nbsp;&nbsp;├─ ','&nbsp;&nbsp;&nbsp;└─ ');
			$Tree->nbsp = '&nbsp;&nbsp;&nbsp;';
			
			$NodeDB = D('bl_node');
			$node = $this->getAllNode($NodeDB);
			$id=$_GET['roleid'];
			$AccessDB = D('bl_access');
			$access=$AccessDB->field("node_id")->where(array('role_id'=>$id))->select();
			foreach ($access as $k=>$v){
			    $num .=$v['node_id'].",";
			}
			foreach ($node as $n=>$t) {
				$node[$n]['checked'] = ($this->is_checked($t,$roleid,$access))? ' checked' : '';
				$node[$n]['depth'] = $this->get_level($t['id'],$node);
				$node[$n]['pid_node'] = ($t['pid'])? ' class="tr lt child-of-node-'.$t['pid'].'"' : '';
			}
			$str  = "<tr id='node-\$id' \$pid_node>
                    <td style='padding-left:30px;'>\$spacer<input type='checkbox' name='nodeid[]' value='\$id' class='radio' level='\$depth' \$checked onclick='javascript:checknode(this);'/ > \$title (\$name)</td>
                </tr>";
			$Tree->init($node);
			$html_tree = $Tree->get_tree(0, $str);
			$this->assign('num',$num);
			$this->assign('html_tree',$html_tree);
			$this->select();
			$this->display();
		}
	}
	function listDate(){
	    $date=$_POST;
	    foreach ($date['nodeid'] as $k=>$v){
	        $arr['role_id']=$date['roleid'];
	        $arr['node_id']=$v;
	        $access=M('bl_access');
	        $list=$access->where(array('role_id'=>$arr['role_id'],'node_id'=>$arr['node_id']))->select();
	        if(empty($list)){
	            $aa=$access->add($arr);
	        }else {
	            $bb=$access->where(array('role_id'=>$arr['role_id']))->delete($arr);
	            $aa=$access->where(array('role_id'=>$arr['role_id'],'node_id'=>$arr['node_id']))->add($arr);
	        }  
	        
	    }
	    if($aa){
	        $this->success('添加成功！');
	    }else{
	        $this->error('添加失败!');
	    }
	}
	function select(){
	    $roleid=$_GET['roleid'];
	    $date=M('bl_access');
	    $aa=$date->where("role_id=$roleid")->select();
	    $bb['roleid']=$aa[0]['role_id'];
	    foreach ($aa as $n=>$k){
	       $cc[]=$aa[$n]['node_id'];
	    }
	    $str=$bb['nodeid']=$cc;
	    $this->assign('str',$str);
	   
	    
	}
}

?>