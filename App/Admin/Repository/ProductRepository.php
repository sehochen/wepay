<?php
namespace Admin\Repository;

class ProductRepository extends ProductCateRepository{

    private $productModel;
    function __construct(){
        parent::__construct();
        $this->productModel = D('Product');
    } 

    public function productShow(){
        $model=$this->productModel; 
        $list=$model->page();
        $list['cate']=$this->cateModel->getList();
        return $list;
    }

    /**
     * [addProduct 添加]
     */
    public function addProduct(){
        IS_POST || $this->returnJson( array('error' =>  100,'msg'   => '非法请求' ));

        $data=I('post.');

        // dump($data);die;

        // 有id为更新
        isset( $data['id'] ) && die( $this->update() );

        $model=$this->productModel;

        if( $model->create($data,1) ){
            if($model->add($data)){
                $res=$model->page();
                $this->returnJson( array(
                    'error'     =>  0,
                    'msg'       =>  '操作成功',
                    'content'   =>  $res['list']  
                ));
            }
        }else{
            $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));
        } 

    }    



    /**
     * [update 更新]
     * @return [type]        [description]
     */
    public function update(){
        $data=I('post.');
        $model=$this->productModel;

        if( $model->create($data,2) ){
            $res=$model->page();
            if($model->save($data)){
                $this->returnJson( array('error' =>  0,'msg'   =>  '操作成功' ,'content' => $res['list']  ));
            }else{
                $this->returnJson( array('error' =>  0,'msg'   =>  '操作成功' ,'content' => $res['list']  ));
            }
        }else{
            $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));
        }
    }




    /**
     * [delProduct 删除]
     * @return [type] [description]
     */
    public function delProduct(){
        IS_POST || $this->returnJson( array('error' =>  100,'msg'   =>  '非法访问' ));

        $id=I('post.id');
        // dump($id);

        $map['id']=array('in',$id);

        $model= $this->productModel;
        if( $model->where($map)->delete() ){
            $this->returnJson( array(
                'error'     =>  0,
                'msg'       =>  '删除成功',
             ));
        }else{
            $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));
        }
    }


    /**
     * [getProduct 获取信息]
     * @return [type] [description]
     */
    public function getProduct(){
       $model= $this->productModel;   
       $this->returnJson( array('error' =>  0,'msg'   =>  $model->getOne() ));          
    }




}