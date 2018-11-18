<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>个人资料</title>
        <link rel="stylesheet" href="/wepay/Template/default/static/css/frozen.css">
        <script src="/wepay/Template/default/static/lib/zepto.min.js"></script>
        <script src="/wepay/Template/default/static/js/frozen.js"></script>
    </head>
    
    <body ontouchstart>

        <header class="ui-header ui-header-positive ui-border-b">
            <h1>注册</h1>
        </header>



<section class="ui-container" style="margin-top:30px;">

  

    <div class="demo-item">
        
        <div class="demo-block">
            <div class="ui-form ui-border-t">

<form action="" method="post" id="register"> 
                    <div class="ui-form-item ui-form-item-l ui-border-b">
                        <label class="ui-border-r">中国 +86</label>
                        <input type="text" name="phone" placeholder="请输入手机号码" />
                        <a href="#" class="ui-icon-close">
                        </a>
                    </div>

                    <div class="ui-form-item ui-border-b">
                        <label>密码</label>
                        <input type="password" name="password" placeholder="用户密码" />
                    </div>

                    <div class="ui-form-item ui-border-b">
                        <label>确认密码</label>
                        <input type="password" name="c_password" placeholder="用户密码" />
                    </div>

                    <div class="ui-form-item ui-border-b">
                        <label>邀请人</label>
                        <input type="text" name="inviter" placeholder="邀请人" 
                            value="<?php echo I('get.uid');?>" />
                    </div>


</form>

                    <div class="ui-btn-wrap">
                        <button class="ui-btn-lg ui-btn-primary" onclick="submit()">
                            立 即 开 户
                        </button>
                    </div>


                <div class="ui-btn-wrap">
                    <a href="/wepay/index.php/Login/index" style="float:right;">立即登陆</a>
                </div>
                <br>
                
            </div>
        </div>
    </div>





</section><!-- /.ui-container-->



    </body>
</html>
            <div class="ui-poptips ui-poptips-warn" style="display:none;">
                <div class="ui-poptips-cnt"><i></i>温馨提示内容</div>
            </div>  

<!-- <script src="/wepay/Template/default/static/js/jquery-1.11.1.js"></script>               -->
<script>
function submit(){

    var data = $("#register").serializeArray();
    $.post("", data,function(data){
         // console.log(data);
         if(data.error > 0){
            error(data.msg);
         }else{
            success(data.msg);
            window.location.href='/wepay/index.php/Login/index';
         }
    },"json");
           
}

function error(msg){
    el3=$.tips({
        content:msg,
        stayTime:2000,
        type:"warn"
    })  
}

function success(msg){
    el3=$.tips({
        content:msg,
        stayTime:2000,
        type:"success"
    })  
}

</script>