<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Repository\UserRepository;

class UserController extends PublicController {


    private $repo;
    function __construct(){
        parent::__construct();
        $this->repo =new UserRepository();
    }

    public function index(){
        $this->repo->show();
    }

}
