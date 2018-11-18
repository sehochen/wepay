<?php
namespace Admin\Repository;
use Think\Model;
use Think\Controller;

class Repository extends Controller{
	protected  $view;
    function __construct(){
    	$this->view     = new \Think\View();
    }

    public function returnJson($arr=array() ){
		die( json_encode($arr)  );	   	
    }
    


}