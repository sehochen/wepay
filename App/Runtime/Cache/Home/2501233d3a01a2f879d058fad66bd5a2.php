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
            <h1>登陆</h1>
        </header>


<section class="ui-container">


<section id="form" style="margin-top:30px;">

    <div class="demo-item">
        
        <div class="demo-block">
            <div class="ui-form ui-border-t">

                <form action="#" id="login">

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


                    <div class="ui-form-item ui-form-item-switch ui-border-b">
                        <p>
                            记住密码
                        </p>
                        <label class="ui-switch">
                            <input type="checkbox" />
                        </label>
                    </div>

                </form>

                <div class="ui-btn-wrap">
                    <button class="ui-btn-lg ui-btn-primary" onclick="submit()">
                        确定
                    </button>
                </div>

                <div class="ui-btn-wrap">
                    <a href="/wepay/index.php/Login/register" style="float:right;">注册账号</a>
                </div>
                <br>

            </div>
        </div>
    </div>


</section>




</section><!-- /.ui-container-->


        

    </body>
</html>
<script>
function submit(){

    var data = $("#login").serializeArray();
    $.post("", data,function(data){
         console.log(data);
         if(data.error > 0){
            error(data.msg);
         }else{
            success(data.msg);
            window.location.href='/wepay/index.php/Index/index';
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
</script>