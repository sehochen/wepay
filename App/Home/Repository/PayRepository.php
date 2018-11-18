<?php
namespace Home\Repository;
use Payment\Common\PayException;
use Payment\Client\Charge;
use Payment\Config;
use Payment\Client\Notify;
use Home\Repository\NotifyRepository;

require('./Pay/autoload.php');

class PayRepository extends Repository{

    private $userInfoModel;
    function __construct(){
        parent::__construct();
        $this->userInfoModel = D('UserInfo');
    } 

    //index
    public function index(){
        $bet = D('Bet')->field('a.*,b.name')->alias('a')->join('__PRODUCT__ as b on a.gid=b.id')->select();
        
        $this->view->assign(array(
            'bet'   =>  $bet,
        ));
        $this->view->display();
    }

    //调用支付
    public function pay(){
    	$data = I('post.');
    	// dump($data);
        // dump($data['money']);

        if( $data['payStyle'] == 0 ){
            $this->alipay($data);
        }

    } 

    //支付宝
    public function alipay($data){
        
        $aliConfig = require_once   './config/aliconfig.php';

        // 订单信息
        $orderNo = time() . rand(1000, 9999);
        $payData = [
            'body'    => 'ali wap pay',
            'subject'    => '余额充值-'.$data['money'],
            'order_no'    => $orderNo,
            'timeout_express' => time() + 600,// 表示必须 600s 内付款
            'amount'    => $data['money'],// 单位为元 ,最小为0.01
            'return_param' => 'tata',// 一定不要传入汉字，只能是 字母 数字组合
            'client_ip' => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1',// 客户地址
            'goods_type' => '1',
            'store_id' => '',
        ];

        try {
            $url = Charge::run(Config::ALI_CHANNEL_WAP, $aliConfig, $payData);
        } catch (PayException $e) {
            echo $e->errorMessage();
            exit;
        }

        header('Location:' . $url);
    }

    
    // 通知
    public function notify(){    

        $data=I('post.');
        $data = (array)$data;

        if(  $data['trade_status'] == 'TRADE_SUCCESS' ){

                // 操作
                $map['alipay'] = $data['seller_email'];

                // 更新余额
                $this->userInfoModel->where($map)->setInc('money',$data['total_amount']);

                $uid=$this->userInfoModel->field('uid')->where( $map )->find();
                
                /*
                file_put_contents('pbool1.php', "<?php\treturn " . var_export($data, true) . ";?>");
                */

                // 添加充值记录
                $data['uid'] = $uid['uid'];
                $data['no'] = $data['trade_no'];
                $data['amount'] = $data['total_amount'];
                $data['ip'] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
            
                D('PayRecharge')->add($data);  
        }
     
    }


}