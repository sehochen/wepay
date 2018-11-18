<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>用户管理</title>

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




<div id="addCate">

<form action="/wepay/admin.php/Product/cateAdd" method="post" id="addCateRes">  

            <div class="col-md-12 modal-content">
              <div class="panel panel-white">
                <div class="panel-body">

                

                  <div class="form-horizontal">
                    <div class="form-group">
                      <label class="col-md-2 control-label">* 名称：</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="名称" name="name" value="" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">* 上级：</label>
                      <div class="col-md-9">
                        <select class="selectpicker col-md-12" name="pid">
                          <option value="0">=顶级=</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label"> 描述：</label>
                      <div class="col-md-9">
                        <textarea class="form-control" rows="3" name="desc"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-4 col-sm-8">
                        <button type="button" class="btn btn-success" style="width:100px;margin-right:5px;" onclick="addCate()">保存</button>
                        <button type="button" class="btn btn-default" style="width:100px;" onClick="hideDom()">取消</button>
                      </div>
                    </div>

                  </div> 

                </div>
              </div>
            </div>


</form>  

</div>