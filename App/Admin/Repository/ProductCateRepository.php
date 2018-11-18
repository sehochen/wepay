<?php
namespace Admin\Repository;

class ProductCateRepository extends Repository{

    public $cateModel;
    function __construct(){
        parent::__construct();
        $this->cateModel = D('ProductCate');

    } 


    /**
     * [cateShow 产品分类]
     * @return [type] [description]
     */
    public function cateShow(){
        $model=$this->cateModel; 
        $cateList=$model->getList();

        return array(
            'cateList'  => $cateList
        );
    }    


    /**
     * [cateAdd 产品分类添加]
     * @return [json] [操作结果]
     */
    public function cateAdd(){
        IS_POST || $this->returnJson( array('error' =>  100,'msg'   => '非法请求' ));

    	$data=I('post.');

        // 有id为更新
        isset( $data['id'] ) && die( $this->update() );

    	$model=$this->cateModel;

        if( $model->create($data,1) ){
            if($model->add($data)){
                $this->returnJson( array('error' =>  0,'msg'   =>  '操作成功' ,'content' => $model->getList()  ));
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
        $model=$this->cateModel;

        if( $model->create($data,2) ){
            if($model->save($data)){
                $this->returnJson( array('error' =>  0,'msg'   =>  '操作成功' ,'content' => $model->getList()  ));
            }else{
                $this->returnJson( array('error' =>  0,'msg'   =>  '操作成功' ,'content' => $model->getList()  ));
            }
        }else{
            $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));
        }
    }


    /**
     * [cateDel 删除]
     * @return [json]     [description]
     */
    public function cateDel(){
        IS_POST || $this->returnJson( array('error' =>  100,'msg'   =>  '非法访问' ));

        $id=I('post.id');

        // I('post.system') == 1 && $this->returnJson( array('error' =>  100,'msg'   => '这是系统默认,无法删除' ));

        // die( dump($id) );
        $map['id']=array('in',$id);

        $model= $this->cateModel;
        if( $model->where($map)->delete() ){
            $this->returnJson( array(
                'error'     =>  0,
                'msg'       =>  '删除成功',
                'content'   =>  $model->getList()
             ));
        }else{
            $this->returnJson( array('error' =>  100,'msg'   =>  $model->getError() ));
        }

    }

    /**
     * [getCate 获取信息]
     * @return [type] [description]
     */
    public function getCate(){
       $model= $this->cateModel;   
       $this->returnJson( array('error' =>  0,'msg'   =>  $model->getOne() ));  
    }

}