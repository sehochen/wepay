<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>个人中心-签约</title>
        <link rel="stylesheet" href="/wepay/Template/default/static/css/frozen.css">
        <script src="/wepay/Template/default/static/lib/zepto.min.js"></script>
        <script src="/wepay/Template/default/static/js/frozen.js"></script>
    </head>
    
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <h1>个人中心-签约</h1>
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
                <li data-href="/wepay/index.php/User/sign">
                    <div class="ui-txt-success"> <i class="ui-icon-wallet"></i><h5>签约</h5> </div>
                </li>
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



            <ul class="ui-list ui-list-link ui-list-one">

                <!--<li class="ui-border-t">
                    <div class="ui-list-icon">
                        <span style="background-image:url(http://placeholder.qiniudn.com/80x80)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">银行</h4>
                    </div>
                </li>-->

                <li class="ui-border-t" onclick="javascript:window.location.href='/wepay/index.php/Sign/alipay';">
                    <div class="ui-list-icon">
                        <span style="background-image:url('/wepay/Template/default/static/images/alipay.png')"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">支付宝</h4>
                    </div>
                </li>

                <li class="ui-border-t" onclick="javascript:window.location.href='/wepay/index.php/Sign/wechat'; ">
                    <div class="ui-list-icon">
                        <span style="background-image:url('/wepay/Template/default/static/images/wechat.png')"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">微信</h4>
                        <div class="ui-txt-info ui-badge">未签约</div>
                    </div>
                </li> 

                <!--<li class="ui-border-t">
                    <div class="ui-list-icon">
                        <span style="background-image:url(http://placeholder.qiniudn.com/80x80)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">财付通</h4>
                        <div class="ui-txt-info ui-badge">未签约</div>
                    </div>
                </li>  -->

            </ul>
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