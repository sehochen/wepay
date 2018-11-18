<?php if (!defined('THINK_PATH')) exit();?>﻿
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