<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>交易记录</title>
        <link rel="stylesheet" href="/wepay/Template/default/static/css/frozen.css">
        <script src="/wepay/Template/default/static/lib/zepto.min.js"></script>
        <script src="/wepay/Template/default/static/js/frozen.js"></script>
    </head>
    
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <h1>交易记录</h1>
        </header>

        <section class="ui-container">


            <section id="tab">
            	<div class="demo-item">
            		<div class="demo-block">
            			<div class="ui-tab">
            			    <ul class="ui-tab-nav ui-border-b">
            			        <li class="current">持仓明细</li>
            			        <li>历史明细</li>
            			    </ul>
            			    <ul class="ui-tab-content">
            			        <li>
                                        <table class="ui-table ">
                                            <thead>
                                                <tr><th>商品名称</th><th>购买汇率</th><th>交易额</th><th>类型</th><th>操作</th></tr>
                                            </thead>
                                            <tbody>

<!--持仓明细-->
<?php if(is_array($bet)): $i = 0; $__LIST__ = $bet;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="ui-txt-success">
                                                    <td><h5><?php echo ($vo["name"]); ?></h5></td>
                                                    <td>
                                                        <button class="ui-btn ui-btn-s ui-btn-primary">
                                                            <?php echo ($vo["rate"]); ?>
                                                        </button>
                                                    </td>
                                                    <td><?php echo ($vo["money"]); ?></td>
                                                    <td><?php echo $vo['type'] == 0 ? '买涨':'买跌';?></td>
                                                    <td><button class="ui-btn ui-btn-s ui-btn-danger"> 出售 </button></td>
                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                            </tbody>
                                        </table>
                                </li>
            			        <li>
                                        <table class="ui-table ">
                                            <thead>
                                                <tr><th>商品名称</th><th>盈利</th><th>时间</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr class="ui-txt-muted">
                                                    <td><h5>美元/日元</h5></td>
                                                    <td class="ui-txt-success">+0.8</td>
                                                    <td> <h4>2017-5-30 20:30</h4> </td>
                                                </tr>                                    
                                                <!--<tr class="ui-txt-muted">
                                                    <td> <h5>美元/欧元</h5> </td>
                                                    <td class="ui-txt-warning">-0.8</td>
                                                    <td> <h4>2017-5-30 20:30</h4> </td>
                                                </tr>-->
                                            </tbody>
                                        </table>
                                </li>
            			    </ul>
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

    </body>
</html>