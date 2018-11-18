<?php
namespace Home\Model;
use Think\Model;

class ProductModel extends Model {    


    /**[page 实现分页 筛选] 结果包含分页*/
    public function page(){

        I('get.pid') && $where['pid']=I('get.pid');
        I('get.name') && $where['name']=array( 'like','%'.I('get.name').'%' );
        
        $order='id desc';
        // I('get.order') && $order==I('get.order');

        // 查询满足要求的总记录数
        $count = $this->where($where)->count();

        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)

        //设置
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');    
        $Page->setConfig('next','下一页');
        $Page->setConfig('prev','上一页');

        $show  = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $res = $this->field("*")
                    ->where($where)
                    ->order($order)
                    ->limit($Page->firstRow.','.$Page->listRows)
                    ->select();
        return array(
            'list' => $res,
            'page' => $show,
        );
                 
    }

    //获取单条
    public function getOne(){
        I('get.id') && $where['id']=I('get.id');

        return $this->field('*')
                    ->where($where)
                    ->order('id asc')
                    ->find();                 
    }



}