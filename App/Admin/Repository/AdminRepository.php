<?php
namespace Admin\Repository;

class AdminRepository extends Repository{

    private $adminModel;
    function __construct(){
        parent::__construct();
        $this->adminModel = D('Admin');
    } 

    public function adminShow(){
        $model=$this->adminModel; 
        $list=$model->getList();
        return $list;
    }

    /**
     * [addAdmin 添加]
     */
    public function addAdmin(){
        IS_POST || $this->returnJson( array('error' =>  100,'msg'   => '非法请求' ));

        $data=I('post.');

        // dump($data);die;

        // 有id为更新
        isset( $data['id'] ) && die( $this->update() );

        $model=$this->adminModel;

        if( $model->create($data,1) ){
            if($model->add($data)){
                $this->returnJson( array(
                    'error'     =>  0,
                    'msg'       =>  '操作成功',
                    'content'   =>  $model->getList() 
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
        $model=$this->adminModel;

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
     * [delAdmin 删除]
     * @return [type] [description]
     */
    public function delAdmin(){
        IS_POST || $this->returnJson( array('error' =>  100,'msg'   =>  '非法访问' ));

        $id=I('post.id');
        // dump($id);

        $map['id']=array('in',$id);

        $model= $this->adminModel;
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
     * [getAdmin 获取信息]
     * @return [type] [description]
     */
    public function getAdmin(){
       $model= $this->adminModel;   
       $this->returnJson( array('error' =>  0,'msg'   =>  $model->getOne() ));          
    }




}