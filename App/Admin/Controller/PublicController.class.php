<?php
namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller {

	function __construct(){
		parent::__construct();	
		// $this->load();
		$this->menu();
	}
    
	public function menu(){
		$menu=D('Menu')->getList();
		// dump($menu);
		$this->assign(array(
			'menuList'	=>	$menu
		));
	}

	public function load($name){

	}

}