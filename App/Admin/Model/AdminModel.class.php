<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model {
    
    //插入的时候允许接受的字段
    protected $insertFields =  'username,name,password,age,state,role_id,c_password';
    //更新的时候允许接受的字段
    protected $updateFields =  'id,username,name,password,age,state,role_id,c_password';

    //验证规则
    protected $_validate = array(
        array('username','require','用户名不能为空',1),
        array('username', '1,30', '用户名最长不能超过 30 个字符！', 1, 'length', 3),
        array('username','','用户名已经存在！',0,'unique',1),
        array('c_password','password','确认密码不正确',0,'confirm'),
    );

	
    protected function _before_insert(&$data,$options) {
		// 插入数据前的回调方法
        $data['add_time'] = time();
        $data['name']     = $data['username'];

        if( $data['password'] == $data['c_password']  ){
            $this->error = '两次密码不一致';
            return false;
        } 
        $data['password'] = md5($data['password']);

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
        
        return $this->field("*,FROM_UNIXTIME(add_time,'%Y-%m-%d %H:%i') as date")
                    ->where($where)
                    ->order('id desc')
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