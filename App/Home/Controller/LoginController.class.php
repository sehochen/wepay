<?php
namespace Home\Controller;
use Think\Controller;
use Home\Repository\LoginRepository;

class LoginController extends Controller {

    private $repo;
    function __construct(){
        parent::__construct();
        $this->repo = new LoginRepository();
    }

    public function index(){
    	$this->repo->login();
    }

    // 注册
    public function register(){
    	$this->repo->register();  
    }


}
