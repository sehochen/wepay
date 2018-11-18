<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>个人中心-我的推广</title>
        <link rel="stylesheet" href="/wepay/Template/default/static/css/frozen.css">
        <script src="/wepay/Template/default/static/lib/zepto.min.js"></script>
        <script src="/wepay/Template/default/static/js/frozen.js"></script>
    </head>
    
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <h1>个人中心-我的推广</h1>
        </header>



        <section class="ui-container">
            <div class="ui-flex ui-flex-pack-center"  style="background-image:url(/wepay/Template/default/static/images/bg.png);background-repeat:no-repeat;background-size:cover;height:170px;">
                    <div  style="margin-top:10px;"> 

                        <img src="
<?php if( empty($info['head_img']) || is_null($info['head_img']) ){ echo '/wepay/Template/default/static/images/head80.jpg'; }else{ echo $info['head_img']; } ?>  
" alt="" id="head" width="100"> 
        
                        <div class="ui-flex ui-flex-pack-center ui-txt-muted"> 
                            <span> <h2><?php echo ($info['name']); ?></h2> </span>
                        </div>
                        <div class="ui-flex ui-flex-pack-center"> 
                            <span class="ui-txt-success"> 
                                <strong> ￥<?php echo ($info['money']); ?> </strong> 
                            </span>
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


        <div class="demo-block">
            <div class="ui-tab">
                <ul class="ui-tab-nav ui-border-b">
                    <li class="current">推广详情</li>
                    <li>我的用户</li>
                </ul>
                <ul class="ui-tab-content">
                    <li>
                        <ul class="ui-tiled" style="margin-top:5px;background-color:#fff;">
                            <li><div class="ui-txt-muted"><h5>已赚佣金</h5></div> <i><h2>1.8</h2></i> </li>
                            <!-- <li><div class="ui-txt-muted"><h5>佣金比例</h5></div> <i><h2>1.8%</h2></i> </li> -->
                            <li><div class="ui-txt-muted"><h5>邀请用户</h5></div> <i><h2><?php echo ($info['inviter']); ?></h2></i> </li>
                        </ul>  

                        <div class="ui-flex ui-flex-pack-center" style="margin-top:5px;background-color:#fff;">          
                            <span class="ui-txt-muted">复制推广链接发送给朋友</span>    <br>
                        </div>
                        <div class="ui-flex ui-flex-pack-center " style="background-color:#fff;">          
                            <span style="word-break:break-all;word-wrap:break-word;text-align:center;">
                                <a href="<?php echo ($info['siteUrl']); ?>"> 点击查看 </a>
                            </span>
                        </div>
                        <div class="ui-flex ui-flex-pack-center" style="margin:5px 0;background-color:#fff;">          
                            <div id="qrcode" height="250"> 
                                <?php echo ($info['qrcode']); ?>
                            </div>
                        </div>
                        <div class="ui-flex ui-flex-pack-center">           
                            <span class="ui-txt-muted"> 
                                 <h2>扫一扫</h2> 
                            </span>
                        </div>
                        

                    </li>
                    <li>

                            <table class="ui-table">
                                <thead>
                                    <tr>
                                        <th><h5>用户</h5></th>
                                        <th><h5>佣金</h5></th>
                                        <th><h5>注册时间</th></tr>
                                </thead>
                                <tbody>

<?php if(is_array($info['inviterList'])): $i = 0; $__LIST__ = $info['inviterList'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="ui-txt-muted">
                                        <td><h5><?php echo ($vo["name"]); ?></h5></td>
                                        <td class="ui-txt-success">+0.8</td>
                                        <td> <h5><?php echo date('Y-m-d H:i',$vo['add_time']);?></h5> </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>  

<!--                                     <tr class="ui-txt-muted">
                                        <td><h5>six</h5></td>
                                        <td><h4>20</h4></td>
                                        <td class="ui-txt-success">+0.8</td>
                                        <td>30</td>
                                        <td> <h4>2017-5-30 20:30</h4> </td>
                                    </tr>    -->

                                </tbody>
                            </table>

                    </li>
                </ul>
            </div>
        </div>
       


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


        </section>

</html>