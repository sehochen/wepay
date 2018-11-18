<?php
return array(
	//'配置项'=>'配置值'

    'VIEW_PATH'       =>'./Template/', // 改变某个模块的模板文件目录        
    'DEFAULT_THEME'    =>'default', // 模板名称              
    'TMPL_PARSE_STRING'  =>array(
            '__STATIC__'     =>  __ROOT__.'/Template/default/static', // 增加新的image css js 访问路径
    ),  


);