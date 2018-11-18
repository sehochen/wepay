<?php
namespace Home\Repository;

class LoginRepository extends Repository{

    private $userModel;
    function __construct(){
        parent::__construct();
        $this->userModel = D('User');
    } 

    // 注册
    public function register(){

    	if( IS_POST ){
    		$data = I('post.');
            
	        $model=$this->userModel;

	        if( $model->create($data,1) ){
	            $model->add($data) && $this->returnJson( array('error' => 0,'msg' => '注册成功') );	            
	        }else{
	            $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));
	        } 


    	}else{
    		$this->view->display();
    	}
    } 


    // 登陆
    public function login(){
        if( IS_POST ){
            
            $model=$this->userModel;

            // 接收表单并且验证表单
            if($model->validate($model->_login_validate)->create() ){
                if( $model->login() ){
                    $this->returnJson( array('error' => 0,'msg' => '登陆成功') );
                }else{
                    $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));   
                }
            }else{
               $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));  
            }
                           
        }else{
            $this->view->display();
        }


    } 


}