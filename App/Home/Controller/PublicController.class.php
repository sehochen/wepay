<?php
namespace Home\Controller;
use Think\Controller;
use Think\View;

class PublicController extends Controller {

    function __construct(){
        parent::__construct();

        //判断session id是否存在
        if( !session('user_id') ){
           $this->redirect('Login/index'); //跳转到登陆页面
        }
        
        // $this->theme('default');
    }



}
