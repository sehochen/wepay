<?php
namespace Home\Repository;

class SignRepository extends Repository{

    private $userInfoModel;
    function __construct(){
        parent::__construct();
        $this->userInfoModel = D('UserInfo');
    } 

    // 支付宝
    public function alipay(){
        $this->view->display();
    } 


    // 登陆
    public function login(){

    } 


}