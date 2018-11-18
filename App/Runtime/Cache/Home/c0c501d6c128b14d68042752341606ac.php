<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>个人中心-资金明细</title>
        <link rel="stylesheet" href="/wepay/Template/default/static/css/frozen.css">
        <script src="/wepay/Template/default/static/lib/zepto.min.js"></script>
        <script src="/wepay/Template/default/static/js/frozen.js"></script>
    </head>
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <h1>个人中心-资金明细</h1>
        </header>


        <section class="ui-container">
            <div class="ui-flex ui-flex-pack-center"  style="background-image:url(/wepay/Template/default/static/images/bg.png);background-repeat:no-repeat;background-size:cover;height:150px;">
                    <div  style="margin-top:10px;"> 
                        <img src="/wepay/Template/default/static/images/head80.jpg" alt="" id="head"> 
                        <div class="ui-flex ui-flex-pack-center ui-txt-muted"> 
                            <span> <h1>bool</h1> </span>
                        </div>
                        <div class="ui-flex ui-flex-pack-center ui-txt-muted"> 
                            <span class="ui-txt-success"> <h3>￥0.0</h3> </span>
                        </div>
                    </div>
            </div>

<!-- userNav -->
                <ul class="ui-tiled" style="margin:5px 0;background-color:#fff;">
                <!--<li data-href="/wepay/index.php/User/sign">
                    <div class="ui-txt-success"> <i class="ui-icon-wallet"></i><h5>签约</h5> </div>
                </li>-->
                <li data-href="/wepay/index.php/User/pay">
                    <div class="ui-txt-muted"> <i class="ui-icon-order"></i><h5>资金明细</h5> </div>
                </li>
                <li data-href="/wepay/index.php/User/intro">
                    <div class="ui-txt-muted"> <i class="ui-icon-add-people"></i><h5>个人资料</h5> </div>
                </li>
                <li data-href="/wepay/index.php/User/share">
                    <div class="ui-txt-muted"> <i class="ui-icon-share"></i><h5>我的推广</h5> </div>
                </li>
            </ul>
<!-- userNav -->

                <div class="ui-tab">
                    <ul class="ui-tab-nav ">
                        <li class="current">全部</li>
                        <li>充值</li>
                        <li>提现</li>
                        <li>收入</li>
                        <li>支出</li>
                    </ul>
                </div>
 

                            <table class="ui-table ">
                                <thead>
                                    <tr><th>操作</th><th>详情</th><th>金额</th><th>时间</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="ui-txt-muted">
                                        <td><h5>支出</h5></td>
                                        <td><h6>购买日元兑美元</h6></td>
                                        <td class="ui-txt-success">+0.8</td>
                                        <td> <h4>2017-5-30 20:30</h4> </td>
                                    </tr>                                    
                                    <tr class="ui-txt-muted">
                                        <td> <h5>消费</h5> </td>
                                        <td><h6>购买日元兑美元</h6></td>
                                        <td class="ui-txt-warning">-0.8</td>
                                        <td> <h4>2017-5-30 20:30</h4> </td>
                                    </tr>
                                </tbody>
                            </table>

        </section>


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