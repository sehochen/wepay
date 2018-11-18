<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Repository\AdminRepository;

class AdminController extends PublicController {

    private $repo;
    function __construct(){
        parent::__construct();
        $this->repo =new AdminRepository();
    }

    public function index(){
        $res=$this->repo->adminShow();
        // dump($res);
        $this->assign( array( 
            'adminList' => $res,
         ) )->display();
    }

   /**
     * [add 添加]
     */
    public function addAdmin(){
        $this->repo->addAdmin();
    }

    /**
     * [edit 编辑]
     */
    public function edit($id){

    }


    /**
     * [del 删除]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function del($id){  

    }

}
