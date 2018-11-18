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
            <h1>个人中心-充值</h1>
        </header>


        <section class="ui-container">


            <ul class="ui-list ui-list-one">

                <li class="ui-border-t" onclick="selectPay(this,0)">
                    <div class="ui-list-icon">
                        <span style="background-image:url('/wepay/Template/default/static/images/alipay.png')"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">支付宝</h4>
                        <div class="ui-reddot ui-reddot-static ui-tag-selected"></div>
                    </div>
                </li>

                <li class="ui-border-t" onclick="selectPay(this,1)">
                    <div class="ui-list-icon">
                        <span style="background-image:url('/wepay/Template/default/static/images/wechat.png')"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">微信</h4>
                        <!-- <div class="ui-txt-info ui-badge">未签约</div> -->
                        <div class="ui-reddot-static"></div>
                    </div>
                </li> 

                <!--<li class="ui-border-t">
                    <div class="ui-list-icon">
                        <span style="background-image:url('/wepay/Template/default/static/images/coupon.png')"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">优惠券</h4>

                            <div class="ui-select">
                                <select>
                                    <option>1￥</option>
                                    <option selected="">5￥</option>
                                    <option>10￥</option>
                                </select>
                            </div>

                    </div>
                </li> -->

                <li class="ui-border-t">
<!--                     <div class="ui-list-icon">
                        <span style="background-image:url('/wepay/Template/default/static/images/coupon.png')"></span>
                    </div> -->
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">支付金额</h4>
                        <div class="ui-txt-info ui-badge"><?php echo I('get.t');?> ￥</div> 
                    </div>
                </li> 

                <li class="ui-border-t">

                    <div class="ui-list-info">
                        <form method="post" action="/wepay/index.php/Pay/payNow" id="payForm">

                            <input type="hidden" name="money"  id="money" value="<?php echo I('get.t');?>">
                            <input type="hidden" name="payStyle"  id="payStyle" value="">

                            <div>
                                <button class="ui-btn ui-btn-primary" onclick="pay_now()"> 立 刻 支 付 </button>
                            </div>
                        </form>
                    </div>
                </li> 

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

<script>
    // var payStyle = 0;

    function selectPay(obj,pays){

        $('#').val(pays);
        $('.ui-list li .ui-reddot-static').removeClass('ui-reddot');
        $('.ui-list li .ui-reddot-static').removeClass('ui-tag-selected');


        $(obj).children('div:nth-child(2n)').children('div:nth-child(1n)').addClass('ui-reddot');
        $(obj).children('div:nth-child(2n)').children('div:nth-child(1n)').addClass('ui-tag-selected');
    }

    function pay_now(){
        
        // $.post('/wepay/index.php/Pay/payNow', $('#payForm').serializeArray(), function(res){
            // console.log(res);
            $('#payForm').submit();
        // })    
    }
</script>