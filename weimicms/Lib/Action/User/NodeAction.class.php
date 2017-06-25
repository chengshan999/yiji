<?php
class NodeAction extends UserAction{
	public function _initialize() {
		parent::_initialize();
	}
	// 获取所有节点信息
	public function getAllNode($node='',$where = 'display=1' , $order = 'sort ASC,id ASC') {
	    return $node->where($where)->order($order)->select();
	}
	public function index(){
	    $getNode=M('bl_node');
		$Node = $this->getAllNode($getNode);
		$array = array();
		// 构建生成树中所需的数据
		foreach($Node as $k => $r) {
			$r['id']      = $r['id'];
			$r['title']   = $r['title'];
			$r['name']    = $r['name'];
			switch ($r['level']) {
				case 0:
					$r['level'] = '应用';
					break;
				case 1:
					$r['level'] = '非节点';
					break;
				case 2:
					$r['level'] = '模块';
					break;
				case 3:
					$r['level'] = '方法';
					break;
			}
			$array[]      = $r;
		}

		$str  = "<tr class='tr'>
				    <td align='center'>\$sort</td>
				    <td align='center'>\$id</td> 
				    <td style='text-align:left'>\$spacer \$title (\$name)</td> 
				    <td align='center'>\$level</td> 
				    
				  </tr>";

  		$Tree = new Tree();
		$Tree->icon = array('&nbsp;&nbsp;&nbsp;│ ','&nbsp;&nbsp;&nbsp;├─ ','&nbsp;&nbsp;&nbsp;└─ ');
		$Tree->nbsp = '&nbsp;&nbsp;&nbsp;';
		$Tree->init($array);
		$html_tree = $Tree->get_tree(0, $str);
		$this->assign('html_tree',$html_tree);
		$this->display();
	}
}

?>