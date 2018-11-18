<?php
namespace Home\Repository;
use Arcanedev\QrCode\QrCode;

class UserRepository extends Repository{

    private $userModel;
    function __construct(){
        parent::__construct();
        $this->userModel = D('User');
    } 

    // 分享
    public function share(){
        $id = session('user_id');
        
        $info = D('User')->getInfo($id);
        $info['qrcode'] = $this->qrcode();
        $info['siteUrl'] = 'http://'.$_SERVER['HTTP_HOST'].__MODULE__.'/Login/register/uid/'.$id;
        $info['inviterList'] = D('User')->where(array('inviter'=>$id))->select();
        $info['inviter'] = count( $info['inviterList'] );

        // var_dump($info['inviterList']);

        $this->view->assign('info',$info);

        $this->view->display();
    }


    // 用户信息
    public function info(){
        $id = session('user_id');
        
        $info = D('User')->getInfo($id);
        $info['qrcode'] = $this->qrcode();

        $this->view->assign('info',$info);

        $this->view->display();
    }

    // qrcode 二维码
    public function qrcode(){
    
        $site = 'http://'.$_SERVER['HTTP_HOST'].__MODULE__.'/Login/register/uid/'.session('user_id');

        $qrCode = new QrCode;
        $qrCode->setText( $site );
        $qrCode->setSize(250);

        return  $qrCode->image("image alt", ['class' => 'qr-code-img']) ;
    }



}