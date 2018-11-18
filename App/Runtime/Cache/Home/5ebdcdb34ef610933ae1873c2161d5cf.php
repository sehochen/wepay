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
            <i class="ui-icon-return" onclick="history.back()"></i><h1>个人资料</h1>
        </header>

        <!--<footer class="ui-footer ui-footer-btn">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r"><div>商品行情</div></li>
                <li data-href="ui.html" class="ui-border-r"><div>交易记录</div></li>
                <li data-href="js.html"><div>个人账户</div></li>
            </ul>
        </footer>-->

        <section class="ui-container">




<section id="form">

    <div class="demo-item">
        
        <div class="demo-block">
            <div class="ui-form ui-border-t">
                <form action="#">
                    <div class="ui-form-item ui-border-b">
                        <label>姓名</label>
                        <input type="text" placeholder="姓名" />
                    </div>

                    <div class="ui-form-item ui-form-item-radio ui-border-b">   
                        <label>性别</label>  
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <label class="ui-radio" for="radio">
                            <input type="radio" name="radio" checked="" />
                        </label>
                        <p>男</p>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <label class="ui-radio" for="radio">
                            <input type="radio" name="radio" />
                        </label>
                        <p>女</p>                        
                    </div>                    
                    <div class="ui-form-item ui-border-b">
                        <label>身份证号码</label>
                        <input type="text" placeholder="18位身份证号码" />
                    </div>
                    <div class="ui-form-item ui-form-item-textarea ui-border-b">
                        <label>详细地址</label>
                        <textarea placeholder="街道等详细地址"></textarea>
                    </div>

                    <div class="ui-form-item ui-border-b">
                        <label>邮箱</label>
                        <input type="text" placeholder="邮箱地址" />
                    </div>


<!--                     <div class="ui-form-item ui-form-item-switch ui-border-b">
                        <p>
                            对附近的人可见
                        </p>
                        <label class="ui-switch">
                            <input type="checkbox" checked="" />
                        </label>
                    </div> -->

                </form>
            </div>
        </div>
    </div>




</section>

        </section><!-- /.ui-container-->


        
<!-- footer -->
           <div  style="height:56px;"></div> 

        <footer class="ui-footer ui-footer-btn">
            <ul class="ui-tiled ui-border-t">
                <li data-href="<?php echo U('Index/index');?>" class="ui-border-r"><div>商品行情</div></li>
                <li data-href="<?php echo U('Pay/index');?>" class="ui-border-r"><div>交易记录</div></li>
                <li data-href="<?php echo U('User/index');?>"><div>个人账户</div></li>
            </ul>
        </footer>

        <script>
        $('.ui-list li,.ui-tiled li').click(function(){
            if($(this).data('href')){
                location.href= $(this).data('href');
            }
        });
        $('.ui-header .ui-btn').click(function(){
            location.href= "<?php echo U('Index/index');?>";
        });
        </script>

        <script class="demo-script">
        (function (){
            var tab = new fz.Scroll('.ui-tab', {
                role: 'tab',
                autoplay: false,
                interval: 3000
            });
            /* 滑动开始前 */
            tab.on('beforeScrollStart', function(fromIndex, toIndex) {
                console.log(fromIndex,toIndex);// from 为当前页，to 为下一页
            })
        })();

        </script>        
<!-- footer -->

        <script>
            $('.ui-header .ui-btn').click(function(){
                // location.href= 'index.html';
            });
        </script>

    </body>
</html>