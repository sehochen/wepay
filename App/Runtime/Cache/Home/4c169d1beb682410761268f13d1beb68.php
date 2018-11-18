<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>商品行情</title>
        <link rel="stylesheet" href="/wepay/Template/default/static/css/frozen.css">
        <script src="/wepay/Template/default/static/lib/zepto.min.js"></script>
        <script src="/wepay/Template/default/static/js/frozen.js"></script>
    </head>
    
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <h1>商品行情</h1>
        </header>


        <section class="ui-container">


                                  <table class="ui-table" style="margin-top:5px;">
                                        <thead>
                                            <tr>
                                                <th>商品名称</th>
                                                <th>汇率</th>
                                                <th>交易量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 
 <!-- 循环 -->
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="ui-txt-success" onclick="jump('<?php echo ($vo["id"]); ?>')">
                                                <td><h5><?php echo ($vo["name"]); ?></h5></td>
                                                <td>
                                                    <button class="ui-btn ui-btn-s ui-btn-primary">
                                                        --.--
                                                    </button>
                                                </td>
                                                <td><?php echo ($vo["pay_num"]); ?></td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
 <!-- 循环 -->                                       
                                        </tbody>
                                    </table>

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

    </body>
</html>
<script>
function jump(id){   
    location.href= '/wepay/index.php/Index/detail/id/'+id;
}
</script>