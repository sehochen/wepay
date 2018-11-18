<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Repository\ProductRepository;
class ProductController extends PublicController {

    private $repo;
    function __construct(){
        parent::__construct();
        $this->repo =new ProductRepository();
    }

    public function index(){
        $res=$this->repo->productShow();
        
        $this->assign( array( 
            'productList' => $res['list'],
            'cate'        => $res['cate'],
            'page'        => $res['page']   
         ) )->display('product');
    }

    public function addProduct(){
        $this->repo->addProduct();
    }    

    public function delProduct(){
        $this->repo->delProduct();
    }

    public function getProduct(){
        $this->repo->getProduct();
    }


    public function cate(){       
        $this->assign( $this->repo->cateShow() )->display();
    }

    public function cateAdd(){
        $this->repo->cateAdd();
    }    

    public function cateDel(){
        $this->repo->cateDel();
    }

    public function getCate(){
        $this->repo->getCate();
    }

}
