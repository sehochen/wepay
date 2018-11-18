<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>个人中心</title>
        <link rel="stylesheet" href="/wepay/Template/default/static/css/frozen.css">
        <script src="/wepay/Template/default/static/lib/zepto.min.js"></script>
        <script src="/wepay/Template/default/static/js/frozen.js"></script>
        <style>
            #pay .ui-btn-wrap .ui-btn{
                margin-bottom:10px;
            }

            .layui-m-layersection>.layui-m-layerchild>h3{
                height:20px;
                line-height:20px;
                margin:0;
                padding:0;
            }
        </style>
    </head>
    
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <h1>个人中心</h1>
        </header>


        <section class="ui-container" >
            <div class="ui-flex ui-flex-pack-center"  style="background-image:url(/wepay/Template/default/static/images/bg.png);background-repeat:no-repeat;background-size:cover;height:165px;">
                    <div  style="margin-top:10px;"> 

                        <div class="ui-flex ui-flex-pack-center"> 
                            <span> <img src="
<?php if( empty($info['head_img']) || is_null($info['head_img']) ){ echo '/wepay/Template/default/static/images/head80.jpg'; }else{ echo $info['head_img']; } ?>                      
                            
                            " alt="" width="60">  </span>
                        </div>
                        
                        <div class="ui-flex ui-flex-pack-center ui-txt-muted"> 
                            <span> <h2><?php echo ($info['name']); ?></h2> </span>
                        </div>
                        <div class="ui-flex ui-flex-pack-center"> 
                            <span class="ui-txt-success"> 
                                <strong> ￥<?php echo ($info['money']); ?> </strong> 
                            </span>
                        </div>
                        
                        <div class="ui-flex ui-flex-pack-center "> 
                            <button class="ui-btn ui-btn-primary" onclick="pay()">充值</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="ui-btn ui-btn-primary">提现</button>
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


            <div class="ui-flex ui-flex-pack-center" style="margin:5px 0;background-color:#fff;">           
                <div id="qrcode"> 
                    <?php echo ($info['qrcode']); ?>
                </div>
                <br>
            </div>
            <div class="ui-flex ui-flex-pack-center">           
                <span class="ui-txt-muted"> 
                    <h2>扫一扫</h2>
                </span>
                <br>
            </div>
        </section>


<!-- qrcode -->
                <!-- qrcode -->
            <div class="ui-dialog ui-qrcode">
                <div class="ui-dialog-cnt" style="width:95%;">
                    <header class="ui-dialog-hd">
                        <h3>扫一扫</h3>
                        <i class="ui-dialog-close" data-role="button"></i>
                    </header>
                    <div class="ui-dialog-bd">
                            <img src="/wepay/Template/default/static/./images/qrcode.jpg" alt="" height="250">
                    </div>
                </div>        
            </div>     

            <script>
                // 显示二维码
                $("#qrcode").click(function(){
                    $(".ui-qrcode").dialog("show");
                })                
            </script>

<!-- qrcode -->

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


</html>

<script src="/wepay/Template/default/static/layer_mobile/layer.js"></script>
<script>

    

function pay(){ 
  var content = $("#pay-cont").html()

  layer.open({
    type: 1
    ,title: ['充值中心']
    ,anim: 'up'
    ,content:'<div id="pay"><div class="ui-btn-wrap"><center><button class="ui-btn ui-btn-primary" onclick="payMoney(1,this)">1￥</button> <button class="ui-btn ui-btn-primary" onclick="payMoney(5,this)">5￥</button> <button class="ui-btn ui-btn-primary" onclick="payMoney(10,this)">10￥</button> <button class="ui-btn ui-btn-primary" onclick="payMoney(20,this)">20￥</button> <button class="ui-btn ui-btn-primary" onclick="payMoney(50,this)">50￥</button> <button class="ui-btn ui-btn-primary ui-tag-selected" onclick="payMoney(100,this)">100￥</button></center></div><div class="demo-block" style="position:fixed;bottom:0;width:100%"><section class="ui-input-wrap ui-border-t"><div class="ui-input"><input type="text" name="payMoney" id="payMoney" value="100" placeholder="任意金额"></div><button class="ui-btn" onclick="payNow()">马上充值</button></section></div></div>'
    ,anim: 'up'
    ,style: 'position:fixed;bottom:0;left:0;width:100%;height:155px; padding:10px 0;border:none;'
  });  

}

// 金额切换
function payMoney(values,obj){
    $('#pay .ui-tag-selected').removeClass('ui-tag-selected');
    $(obj).addClass('ui-tag-selected');
    $('#payMoney').val(values);
}

function payNow(){
    var payMoney = $('#payMoney').val();
    window.location.href="/wepay/index.php/Pay/pay/t/"+payMoney;
}


    $(function(){
         // console.log( $.os.phone );
    })
   
</script>