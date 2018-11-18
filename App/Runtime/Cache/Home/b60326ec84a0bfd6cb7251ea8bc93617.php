<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>商品行情</title>
        <link rel="stylesheet" href="../Static/css/frozen.css">
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
    </head>
    
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <h1>商品行情</h1>
        </header>

        <footer class="ui-footer ui-footer-btn">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r"><div>商品行情</div></li>
                <li data-href="ui.html" class="ui-border-r"><div>交易记录</div></li>
                <li data-href="js.html"><div>个人账户</div></li>
            </ul>
        </footer>
        <section class="ui-container">




<section id="tab">
	<div class="demo-item">
		<div class="demo-block">
			<div class="ui-tab">
			    <ul class="ui-tab-nav ui-border-b">
			        <li class="current">按需</li>
			        <li>多行</li>
			    </ul>
			    <ul class="ui-tab-content">
			        <li>
                            <table class="ui-table ui-border-tb">
                                <thead>
                                    <tr><th>商品名称</th><th>现价</th><th>最高</th><th>最低</th><th>卖出</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="ui-txt-success">
                                        <td><h5>美元/日元</h5></td>
                                        <td>
                                            <button class="ui-btn ui-btn-s ui-btn-primary">
                                                1.6
                                            </button>
                                        </td>
                                        <td>1.8</td>
                                        <td>0.8</td>
                                        <td>17.896</td>
                                    </tr>                                    
                                    <tr class="ui-txt-warning">
                                        <td> <h5>美元/欧元</h5> </td>
                                        <td>
                                            <button class="ui-btn ui-btn-s ui-btn-danger">
                                                1.2
                                            </button>
                                        </td>
                                        <td>1.8</td>
                                        <td>0.8</td>
                                        <td>17.896</td>
                                    </tr>
                                </tbody>
                            </table>

                    </li>
			        <li>内容2</li>
			    </ul>
			</div>
		</div>
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
	</div>
</section>

        </section><!-- /.ui-container-->
        <script>
        // $('.ui-list li,.ui-tiled li').click(function(){
        //     if($(this).data('href')){
        //         location.href= $(this).data('href');
        //     }
        // });
        // $('.ui-header .ui-btn').click(function(){
        //     location.href= 'index.html';
        // });
        </script>
    </body>
</html>