<?php
namespace Admin\Model;
use Think\Model;

class ProductModel extends Model {
    
    //插入的时候允许接受的字段
    protected $insertFields =  'name,desc,pid,sort,state,api';
    //更新的时候允许接受的字段
    protected $updateFields =  'id,name,desc,pid,sort,state,api';

    //验证规则
    protected $_validate = array(
        array('name','require','名称不能为空',1),
        array('name','','名称已经存在！',0,'unique',1),
        array('name', '1,30', '名称最长不能超过 30 个字符！', 1, 'length', 3),
    );
	
    protected function _before_insert(&$data,$options) {
		// 插入数据前的回调方法
        $data['add_time'] = time();
    }
    
    protected function _after_insert($data,$options) {
    	// 插入成功后的回调方法
    }

	
    protected function _before_update(&$data,$options) {
    	// 更新数据前的回调方法
    }
    
    protected function _after_update($data,$options) {
    	// 更新成功后的回调方法
    }

    
    protected function _before_delete($options) {
		// 删除数据前的回调方法
    }    
    
    protected function _after_delete($data,$options) {
		// 删除成功后的回调方法
    }


    /**[page 实现分页 筛选] 结果包含分页*/
    public function page(){

        I('get.pid') && $where['pid']=I('get.pid');
        I('get.name') && $where['a.name']=array( 'like','%'.I('get.name').'%' );
        
        $order='id desc';
        // I('get.order') && $order==I('get.order');


        // 查询满足要求的总记录数
        $count = $this->alias('a')
                    ->field("a.*,b.name as pname")
                    ->join('__PRODUCT_CATE__ as b on a.pid =b.id')
                    ->where($where)
                    ->count();

        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)

        //设置
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');    
        $Page->setConfig('next','下一页');
        $Page->setConfig('prev','上一页');

        $show  = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $res = $this->alias('a')->field("a.*,b.name as pname,FROM_UNIXTIME(a.add_time,'%Y-%m-%d %H:%i') as date")
                    ->join('__PRODUCT_CATE__ as b on a.pid =b.id')
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