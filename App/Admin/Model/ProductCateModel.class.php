<?php
namespace Admin\Model;
use Think\Model;

class ProductCateModel extends Model {
    
    //插入的时候允许接受的字段
    protected $insertFields =  'name,desc';
    //更新的时候允许接受的字段
    protected $updateFields =  'id,name,desc';

    //验证规则
    protected $_validate = array(
        array('name','require','名称不能为空',1),
        array('name','','名称已经存在！',0,'unique',1),
        array('name', '1,30', '名称最长不能超过 30 个字符！', 1, 'length', 3),
    );

	
    protected function _before_insert(&$data,$options) {
		// 插入数据前的回调方法
        $data['add_time']=time(); 
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
        return $this->field("*,FROM_UNIXTIME(add_time,'%Y-%m-%d %H:%i') as date")
                    ->order('id asc')
                    ->select();                 
    }


    //获取单条
    public function getOne(){
        $where=array();
        I('get.id') && $where['id']=I('get.id');

       return $this->field('*')
                    ->where($where)
                    ->order('id asc')
                    ->find();
                 
    }



}