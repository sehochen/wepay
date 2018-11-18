<?php
namespace Home\Controller;
use Think\Controller;
use Home\Repository\PayRepository;
use Home\Repository\betRepository;

class PayController extends PublicController {

    private $repo;
    function __construct(){
        parent::__construct();
        $this->repo = new PayRepository();
    }

    public function index(){
        $this->repo->index();
        // $this->display();
    }

    public function pay(){
        $this->display();
    }

    /**
     * 支付
     *
     * @return void
     */
    public function payNow(){
        $this->repo->pay();
    }

    // 下注
    public function bet(){
        $bet = new BetRepository();
        $bet->pay();
        // die( json_encode( I('post.') ) );
        // $this->repo->bet();
    }
}
