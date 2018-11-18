<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends PublicController {

    public function index(){
    	$list=D('Product')->page();

    	$this->assign(array(
    		'list'	=>	$list['list'],
    		'page'	=>	$list['page'],
    	));
		$this->display();
    }
    

    public function detail($id){

    	$list=D('Product')->field("*")->find($id);
		$bet=D('Bet')->field("*")->where(array('gid'=>$id))->find();
		// dump($bet);

    	$this->assign(array(
    		'info'	=>	$list,
			'bet'	=>	$bet
    	));


		$this->display();
    }    

    /**
     * [get description]
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    public function get($url,$id){

		$curl = new Curl();
		$curl->get( $url );

		if ($curl->error) {
		    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
		    die;
		} else {
		    // file_put_contents( '1.html', $curl->response);
		    $temp;
		    $res=$curl->response;

		    $res=$this->match("#当前汇率：.+</p><p>#U",$res);
		    $res=$this->match("#\d{1}\.\d+#",$res);

		    S('current_rate_'.$id,$res,300);
		    // var_dump($res);
		    // die;
		}    	
    }

    // 
    public function match($pattern,$res){
		preg_match($pattern, $res, $temp);
		return $temp[0];    	
    }


}