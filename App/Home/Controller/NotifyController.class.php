<?php
namespace Home\Controller;
use Think\Controller;
use Home\Repository\PayRepository;

class NotifyController extends Controller{

    private $repo;
    function __construct(){
        parent::__construct();
        $this->repo = new PayRepository();
    }

    // 通知
    public function notify(){
        $this->repo->notify();
    }

}
