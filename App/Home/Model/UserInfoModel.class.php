<?php
namespace Home\Model;
use Think\Model;

class UserInfoModel extends Model {
    
    //插入的时候允许接受的字段
    protected $insertFields =  'uid,age,email,money,head_img,card,address,nviter';
    //更新的时候允许接受的字段
    protected $updateFields =  'uid,,age,email,money,head_img,card,address,nviter';

    //验证规则
    protected $_validate = array(
        array('uid','require','uid不能为空',1),    
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

    //获取单条
    public function getOne(){
        $where=array();
        I('get.id') && $where['id']=I('get.id');

        // 进行分页数据查询
       return $this->field('*')
                    ->where($where)
                    ->order('id asc')
                    ->find();
                 
    }



}