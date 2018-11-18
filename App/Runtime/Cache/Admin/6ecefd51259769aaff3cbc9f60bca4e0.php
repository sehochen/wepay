<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台管理</title>

<link href="/wepay/Public/Admin/css/pace-theme-flash.css" rel="stylesheet"/>

<link href="/wepay/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- ico 字体图标 -->
<link href="/wepay/Public/Admin/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<!-- 水波特效 -->
<link href="/wepay/Public/Admin/css/waves.min.css" rel="stylesheet" type="text/css"/>

<link href="/wepay/Public/Admin/css/toastr.min.css" rel="stylesheet" type="text/css"/>

<!-- Theme Styles -->
<link href="/wepay/Public/Admin/css/modern.min.css" rel="stylesheet" type="text/css"/>
<link href="/wepay/Public/Admin/css/green.css" class="theme-color" rel="stylesheet" type="text/css"/>

<script src="/wepay/Public/Admin/js/jquery-2.1.4.min.js"></script>
<script src="/wepay/Public/Admin/layer/layer.js"></script>
<script src="/wepay/Public/Admin/vue/vue.js"></script>
<script src="/wepay/Public/Admin/vue/vue-resource.min.js"></script>

</head>
<body class="page-header-fixed">
<div class="pace pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99"
    style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner">
        </div>
    </div>
    <div class="pace-activity">
    </div>
</div>
<div class="overlay">
</div>
<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="<?php echo U('Index/index');?>" class="logo-text"> <span>后台管理</span> </a>
            </div>
            <!-- Logo Box -->

            <div class="topmenu-outer">

                <!-- Top Menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li style="display:none">
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen">
                                <i class="fa fa-expand"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Nav -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                            data-toggle="dropdown">
                                <span class="user-name">蔡唱松<i class="fa fa-angle-down"></i></span>
                                <span>0</span>
                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation">
                                    <a data-toggle="modal" data-target=".bs-example-modal-sm" href="#">
                                        <i class="fa fa-lock"></i>修改密码
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="/account/signin">
                                        <i class="fa fa-sign-out m-r-xs"></i>退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/account/signout" class="log-out waves-effect waves-button waves-classic">
                                <span><i class="fa fa-sign-out m-r-xs"></i>注销</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Nav -->
                </div>
                <!-- Top Menu -->

            </div>
            <!-- sidebar-pusher -->

        </div>
        <!-- navbar-inner -->
    </div>


    <!-- 修改密码 -->
    <div id="pwdmodify" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel"> 修改密码 </h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12">
                        <div class="input-group col-md-offset-2 col-md-8">
                            <span class="input-group-addon" id="sizing-addon2"> 旧密码 </span>
                            <input type="password" id="oldpwd" class="form-control" placeholder="旧密码" aria-describedby="sizing-addon2">
                        </div>
                        </br>
                        <div class="input-group col-md-offset-2 col-md-8">
                            <span class="input-group-addon" id="sizing-addon2">新密码</span>
                            <input type="password" id="firstnew" class="form-control" placeholder="新密码" aria-describedby="sizing-addon2">
                        </div>
                        </br>
                        <div class="input-group col-md-offset-2 col-md-8">
                            <span class="input-group-addon" id="sizing-addon2"> 确定密码 </span>
                            <input type="password" id="secondnew" class="form-control" placeholder="确定密码" aria-describedby="sizing-addon2">
                        </div>
                        </br>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="user" name="userid" value="590eb93fc241b672941fafcf">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" id="pwd_save">提交</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 修改密码 -->



    <div class="page-sidebar sidebar">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
            <div class="page-sidebar-inner slimscroll" style="overflow: hidden; width: auto; height: 100%;">
                <ul class="menu accordion-menu">

<?php if(is_array($menuList)): $i = 0; $__LIST__ = $menuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <li class="droplink <?php echo $_SERVER['PATH_INFO'] == $vo['route']? 'open':null ;?>"> -->
                    <li class="droplink">

<?php if($vo['level'] == 0 ): ?><a href="#" class="waves-effect waves-button">
                            <span class="menu-icon glyphicon <?php echo ($vo["ico"]); ?>"></span>
                            <p><?php echo ($vo["name"]); ?></p>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <?php if(is_array($menuList)): $i = 0; $__LIST__ = $menuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i; if($vv['pid'] == $vo['id']): ?><li><a href="/wepay/admin.php/<?php echo ($vv["route"]); ?>"><?php echo ($vv["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul><?php endif; ?>                    


                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
            <div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.3; display: none; border-radius: 0px; z-index: 99; right: 0px; height: 768px; background: rgb(204, 204, 204);">
            </div>
            <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; opacity: 0.2; z-index: 90; right: 0px; background: rgb(51, 51, 51);">
            </div>
        </div>
        <!-- Page Sidebar Inner -->
    </div>

    <div class="page-inner" id="app">


﻿ 
    

        <div class="page-title">
            <h3  class="hidden-xs">产品列表</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo U('Product/index');?>">产品管理</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Product/cate');?>">产品列表</a>
                    </li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row m-t-md">
                <div class="col-md-12">
                    <div class="row mailbox-header">
                        <div class="pull-left" style="margin:0 0 0 15px;">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addCate"> 添加产品 </button>
                        </div>
                        <div class="pull-left" style="margin:0 0 0 15px;">
                            <button class="btn btn-danger" @click="delCate"> 删除 </button>
                        </div>
                        <div class="form-inline pull-right" style="margin:0 20px 0 0">
  

  <form action="/wepay/admin.php/Product/index" method="get">

                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="name" type="text" class="form-control" placeholder="名称" value="<?php echo I('get.name')?I('get.name'):null;?>" />
                                    </div>
                                </div>
                                <div class="form-group hidden-xs">
                                    <div class="input-group">
                                        <select name="pid" class="selectpicker" >
                                            <option value="">全部</option>
                      <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["id"]); ?>" <?php echo I('get.pid')==$item['id']?'selected="selected" ':null;?> ><?php echo ($item["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                                  
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group hidden-xs">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit" style="margin-right:20px;width:60px;">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
</form>

                        </div>
                    </div>

                    <div class="mailbox-content panel">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="example_wrapper" class="dataTables_wrapper">


                                  <table class="table dataTable display" width="100%">
                                    <thead>
                                      <tr>
                                        <th colspan="1" style="width:6%">
                                          <span>
                                            <input type="checkbox" class="check check-all" @click="checkAll"/>
                                          </span>
                                        </th>
                                        <th nowrap="nowrap" >
                                          <span>名称</span></th>
                                        <th nowrap="nowrap" >
                                          <span>分类</span></th>
                                        <th nowrap="nowrap"  class="hidden-xs">
                                          <span>描述</span></th>
                                        <th nowrap="nowrap" >
                                          <span>创建时间</span></th>
                                        <th nowrap="nowrap" >
                                          <span>操作</span></th>
                                      </tr>
                                    </thead>

                                    <tbody>




                                  <!-- vue -->
                                      <tr class="unread" v-for="(item, index) in productList ">
                                        <td>
                                          <span>
                                            <input type="checkbox" class="check" v-model="checkedNames" name="id[]" :value="item.id"/>
                                          </span>
                                        </td>
                                        <td v-text="item.name"></td>
                                        <td v-text="item.pname">顶级</td>
                                        <td v-text="item.desc" class="hidden-xs"></td>
                                        <td v-text="item.date">2017-05-07 20:45</td>
                                        <td>
                                          <div style="float:left; margin:0 5px 5px 0;">
                                            <button class="btn btn-success" data-toggle="modal" data-target="#editCate" @click="upDate(item.id)">编辑</button>
                                          </div>
                                          <div style="float:left; margin:0 5px 5px 0;">
                                            <button class="btn btn-danger" @click="delOne(item.id)" >删除</button>
 
                                          </div>
                                        </td>
                                      </tr>
                                  <!-- vue -->



                                    </tbody>
                                  </table>
                      

                                </div>




                            </div>

<div class="page">
  <?php echo ($page); ?>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



<!-- add modal -->
﻿<div class="modal fade" tabindex="-1" id="addCate" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" >
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">添加产品</h4></div>
      <div class="modal-body">



  <form action="/wepay/admin.php/Product/cateAdd" method="post" id="addRes">  

              <div class="panel panel-white">
                <div class="panel-body form-horizontal">

                    <div class="form-group">
                      <label class="col-md-2 control-label">* 名称：</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="名称" name="name"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">* 分类：</label>
                      <div class="col-md-9">
                        <select name="pid" class="selectpicker col-md-12" >
                            <option v-for="item in cate" :value="item.id" v-text="item.name"></option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">* 接口：</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="接口" name="api" value="" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label"> 描述：</label>
                      <div class="col-md-9">
                        <textarea class="form-control" rows="2" name="desc"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label"> 排序：</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="排序" name="sort" value="1" />
                      </div>
                    </div>

                    <div id="sex" class="form-group">
                      <label class="col-md-2 control-label">状态：</label>
                      <div class="col-md-4">
                        <div class="btn-group aa" data-toggle="buttons">
                          <label class="btn btn-default btn-sm active">
                            <input type="radio" name="state"  value="0" checked="checked" />启用
                          </label>
                          <label class="btn btn-default btn-sm">
                            <input type="radio" name="state"  value="1"/>禁用
                          </label>
                        </div>
                      </div>
                    </div>

                  </div> 
                </div>

</form> 


      </div>
      <div class="modal-footer">
        <button class="btn btn-success" style="width:100px;margin-right:5px;" @click="addProduct('addRes','addCate')">
          保存
        </button>
      </div>
    </div>
  </div>
</div>




 



<!-- add modal -->

<!-- edit modal -->
﻿<div class="modal fade" tabindex="-1" id="editCate" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" >
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">编辑产品</h4></div>
      <div class="modal-body">


  <form action="/wepay/admin.php/Product/cateEdit" method="post" id="upRes">  

              <div class="panel panel-white">
                <div class="panel-body form-horizontal">
                
                    <!-- id -->
                    <input type="hidden" name="id" :value="upData.id">

                    <div class="form-group">
                      <label class="col-md-2 control-label">* 名称：</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="名称" name="name" :value="upData.name" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">* 分类：</label>
                      <div class="col-md-9">
                        <select name="pid" class="selectpicker col-md-12" v-model="upData.pid">
                            <option v-for="item in cate" :value="item.id" v-text="item.name"></option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">* 接口：</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="接口" name="api" :value="upData.api"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label"> 描述：</label>
                      <div class="col-md-9">
                        <textarea class="form-control" rows="2" name="desc" :value="upData.desc"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label"> 排序：</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="排序" name="sort" :value="upData.sort"/>
                      </div>
                    </div>

                    <div id="sex" class="form-group">
                      <label class="col-md-2 control-label">状态：</label>
                      <div class="col-md-4">
                        <div class="btn-group aa" data-toggle="buttons">
                          

                          <label class="btn btn-default btn-sm" :class="[upData.state==0 ? 'active' :0 ]">
                            <input type="radio" name="state"  value="0"  v-model="upData.state"/>启用
                          </label>

                          <label class="btn btn-default btn-sm" :class="[upData.state==1 ? 'active' : '']">
                            <input type="radio" name="state"  value="1"  v-model="upData.state"/>禁用
                          </label>

                        </div>
                      </div>
                    </div>



                  </div> 
                </div>

</form>  


      </div>
      <div class="modal-footer">
        <button class="btn btn-success" style="width:100px;margin-right:5px;" @click="addProduct('upRes','editCate')">保存</button>
      </div>
    </div>
  </div>
</div>




<!-- edit modal -->





<script>

var vue=new Vue({
  el: '#app',
  data:{
    productList:<?php echo json_encode($productList);?>,
    cate:<?php echo json_encode($cate);?>,
    checkedNames:[],
    check:false,
    upData:{}
  },
  methods: {
    addProduct:function(id,closeId){
      // 添加
      var fields = $("#"+id).serializeArray();

      this.$http.post('/wepay/admin.php/Product/addProduct',fields,{emulateJSON:true} ).then(response => {
        if(response.body.error==0){
          toastr.success( response.body.msg );
          this.productList = response.body.content;
          clodeModal(closeId);
          
          this.upData=[];
        }else{
          toastr.error( response.body.msg );    
        } 
            
      }, response => {
        toastr.error( '操作失败' );
      });
    },
    checkAll:function(){
      // 全选
      var _this=this;
      if( this.check ){
        this.checkedNames=[];
        this.check = false;
      }else{
        this.checkedNames=[];
        this.productList.forEach(function(item){         
          _this.checkedNames.push( item.id );
        });
        this.check = true;
      }
    },
    delCate:function(){
            // 批量删除
            if( this.checkedNames.length <= 0 ){
              toastr.error( '请选择要删除的数据!' );
            }else{
              var _this=this;
              layer.confirm('是否删除?', {icon: 3, title:'删除'}, function(index){
                /**************************/  
                    var data = {id:_this.checkedNames.join(',') };
                    var tempList=[];    

                    // post
                    _this.$http.post('/wepay/admin.php/Product/delProduct',data,{emulateJSON:true} ).then(response => {
                      if(response.body.error==0){
                        toastr.success( response.body.msg );

                        // 刷新列表
                        _this.productList.forEach(function(item){         
                          _this.checkedNames.forEach( function(value){
                            if(item.id != value && item){
                              tempList.push(item);
                            }
                          } );
                        }); 
                        _this.productList=tempList;

                      }else{
                        toastr.error( response.body.msg );    
                      }       
                    }, response => {
                      toastr.error( '操作失败' );
                    }); 
                   
                /**************************/  
                layer.close(index);
              });
          } 
      
    },
    delOne:function(id){
      // alert(id);
      var _this = this;
      layer.confirm('是否删除?', {icon: 3, title:'删除'}, function(index){
            /**************************/  
                var data = {id:id };
                var tempList=[];    

                // post
                _this.$http.post('/wepay/admin.php/Product/delProduct',data,{emulateJSON:true} ).then(response => {
                  if(response.body.error==0){
                    toastr.success( response.body.msg );
                    // 刷新列表  
                    _this.productList.forEach(function(item){         
                        if(item.id != id && item){
                          tempList.push(item);
                        }
                    }); 
                    _this.productList=tempList;

                  }else{
                    toastr.error( response.body.msg );    
                  }       
                }, response => {
                  toastr.error( '操作失败' );
                }); 
               
            /**************************/         
        layer.close(index);
      });
    },
    upDate:function(id){
      // alert(id);
      this.$http.get('/wepay/admin.php/Product/getProduct/id/'+id,{},{emulateJSON:true} ).then(response => {
          // console.log( response.body.msg ); 
          this.upData =  response.body.msg;  
      }, response => {
        toastr.error( '操作失败' );
      });
    }

 
  }  


})




</script>

 



    </div>
    <!-- Page Inner -->




<div class="cd-overlay"></div>



<script src="/wepay/Public/Admin/js/bootstrap.min.js"></script>
<script src="/wepay/Public/Admin/js/jquery-ui.min.js"></script>

<script src="/wepay/Public/Admin/js/jquery.slimscroll.js"></script>
<script src="/wepay/Public/Admin/js/jquery.uniform.js"></script>


<!-- 水波特效 -->
<script src="/wepay/Public/Admin/js/waves.min.js"></script>
<!-- 弹窗 -->
<script src="/wepay/Public/Admin/js/toastr.min.js"></script>
<!-- 菜单栏伸缩 -->
<script src="/wepay/Public/Admin/js/modern.min.js"></script>
<script>
layer.config({
  skin: 'layui-layer-green'
})
    // layer.tips('Hi,欢迎使用!', '.user-name');  
</script>   

</body>
</html>