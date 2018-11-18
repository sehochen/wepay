<?php
namespace Home\Controller;
use Think\Controller;
use Home\Repository\UserRepository;

class UserController extends PublicController {

    private $repo;
    function __construct(){
        parent::__construct();
        $this->repo = new UserRepository();
    }

    public function index(){
       $this->repo->info();
    }

    /**
     * [sign 签约]
     * @return [type] [description]
     */
    public function sign(){
        $this->display();
    }

    /**
     * [pay 交易明细]
     * @return [type] [description]
     */
    public function pay(){
        $this->display();
    }

    /**
     * [intro 个人信息]
     * @return [type] [description]
     */
    public function intro(){
        $this->display();
    }

    /**
     * [share 分享]
     * @return [type] [description]
     */
    public function share(){
        $this->repo->share();
    }


}
