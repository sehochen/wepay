<?php
namespace Admin\Model;
use Think\Model;

class MenuModel extends Model {
    
    //插入的时候允许接受的字段
    protected $insertFields =  'username';
    //更新的时候允许接受的字段
    protected $updateFields =  'id,username';

    //验证规则
    protected $_validate = array(
        array('username','require','用户名不能为空',1),
        array('username', '1,30', '用户名最长不能超过 30 个字符！', 1, 'length', 3),
    );
	
    protected function _before_insert(&$data,$options) {
		// 插入数据前的回调方法
    }
    
    protected function _after_insert($data,$options) {
    	// 插入成功后的回调方法
    }

	
    protected function _before_update(&$data,$options) {
    	// 更新数据前的回调方法
    }
    
    protected function _after_update($data,$options) {
    	// 更新成功后的回调方法
    }

    
    protected function _before_delete($options) {
		// 删除数据前的回调方法
    }    
    
    protected function _after_delete($data,$options) {
		// 删除成功后的回调方法
    }


    //获取列表
    public function getList(){
        $where=array();
        //I('get.id') && $where['id']=I('get.id');

        $res = $this->field('*')
                    ->where($where)
                    ->order('sort asc,id asc')
                    ->select();
        return $this->getTree($res);              
    }


    //递归无限级分类
    private function getTree($data, $pid=0,$level=0){
        static $tree = array();
        foreach ($data as $k => $v) {
            //找父节点
            if ($v['pid'] == $pid) {
                $v['level'] = $level;
                $tree[] = $v;

                //递归调用
                $this->getTree($data,$v['id'],$level+1);
            }
        }    
        return $tree;
    }


}