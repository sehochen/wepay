<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
        
    //插入的时候允许接受的字段
    protected $insertFields =  'phone,password,c_password,name,inviter';
    //更新的时候允许接受的字段
    protected $updateFields =  'id,phone,password,c_password,name,inviter';

    //验证规则
    protected $_validate = array(
        array('phone','require','手机号不能为空',1),
        array('password','require','密码不能为空',1),
        array('phone','','手机号已经存在！',0,'unique',1),
        array('c_password','require','确认密码不能为空',1),
        array('password', '4,16', '密码长度4-16字符', 1, 'length', 3),
        array('c_password','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
    );
	
    protected function _before_insert(&$data,$options) {
		// 插入数据前的回调方法
        $data['add_time'] = time();
        $data['password'] = md5($data['password']);
        $data['name'] = $data['phone'];
    }
    
    protected function _after_insert($data,$options) {
    	// 插入成功后的回调方法
        $res['uid'] =$data['id'];

        D('UserInfo')->add($res);
    }

	
    protected function _before_update(&$data,$options) {
    	// 更新数据前的回调方法
    }
    
    protected function _after_update($data,$options) {
    	// 更新成功后的回调方法
    }


    /***************验证登陆*****************************************************/
    
    // 为登录的表单定义一个验证规则 
    public $_login_validate = array(
        array('phone', 'require', '手机号不能为空！', 1),
        array('password', 'require', '密码不能为空！', 1),
        // array('code', 'require', '验证码不能为空！', 1),
        // array('code', 'check_verify', '验证码不正确！', 1, 'callback'),
    );   

    // 验证验证码是否正确
    // function check_verify($code, $id = ''){
    //     $verify = new \Think\Verify();
    //     return $verify->check($code, $id);
    // }  

    //登陆
    public function login(){

    // 从模型中获取用户名和密码
    $phone = $this->phone;
    $password = $this->password;
        
    // 先查询这个用户名是否存在
    $user = $this->where(array('phone' => array('eq', $phone),))->find();
        if($user){
            if($user['password'] == md5($password)){
                //保存到session
                session('user_id',$user['id']);
                session('user_name',$user['name']);
                return TRUE;
            }else{
                $this->error = '密码不正确！';
                return FALSE;
            }
        }else {
            $this->error = '手机号不存在！';
            return FALSE;
        }
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


    //获取单条
    public function getInfo($id){
        $where['a.id']=$id;
        return $this->alias('a')
                    ->field('*')
                    ->join('__USER_INFO__ as b on a.id = b.uid')
                    ->where($where)
                    ->find();            
    }

}