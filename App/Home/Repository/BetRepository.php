<?php
namespace Home\Repository;

class BetRepository extends Repository{

    private $betModel;
    function __construct(){
        parent::__construct();
        $this->betModel = D('Bet');
    } 


    // 登陆
    public function pay(){

        IS_POST || $this->returnJson( array('error' =>  100,'msg'   => '非法请求' ));
        $data=I('post.');
        $uid = session('user_id');
        $res = D('UserInfo')->field('money')->where(array('uid'=> $uid))->find();

        // 判断余额
        if( $res['money'] <  $data['money']  ){
             $this->returnJson( array('error' =>  100,'msg'   =>  '账户余额不足' ));
        }

         $resUser['money']=$res['money']-$data['money'];

        $model = $this->betModel;

        if( $model->create($data,1) ){
            if($model->add($data)){
                $map['id'] = $data['gid'];

                // 更新产品
                D('UserInfo')->where(array('uid'=> $uid))->save($resUser);

                $product['pay_money'] = $data['money'];
                $res=M('Product')->field('pay_num')->where($map)->find();
                $product['pay_num'] = (++$res['pay_num']);
                M('Product')->where($map)->save($product);

                $this->returnJson( array(
                    'error'     =>  0,
                    'msg'       =>  '操作成功',
                ));
            }
        }else{
            $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));
        } 
    } 


}