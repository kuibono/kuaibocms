<?php
$config = require './Runtime/Conf/config.php';
$array = array(
	'USER_AUTH_KEY'=>'ffvod',// 用户认证SESSION标记
	'NOT_AUTH_ACTION'=>'index,show,add,top,left,main',// 默认无需认证操作
	'REQUIRE_AUTH_MODULE'=>'Admin,List,Vod,News,User,Collect,Data,Upload,Link,Ads,Cache,Create,Tpl,Cm,Gb,Tag,Special,Nav,Side,Pic',// 默认需要认证模型
    'URL_PATHINFO_DEPR'=>'-',
	'APP_GROUP_LIST'=>'Admin,Home,Plus,User',//项目分组
	'TMPL_FILE_DEPR'=>'_',//模板文件MODULE_NAME与ACTION_NAME之间的分割符，只对项目分组部署有效
	'LANG_SWITCH_ON'=>true,// 多语言包功能
	'LANG_AUTO_DETECT'=>false,//是否自动侦测浏览器语言
	'URL_CASE_INSENSITIVE'=>true,//URL是否不区分大小写 默认区分大小写
    'DB_FIELDTYPE_CHECK'=>true, //是否进行字段类型检查
	'DATA_CACHE_SUBDIR'=>true,//哈希子目录动态缓存的方式
    'TMPL_ACTION_ERROR'     => './Public/jump/jumpurl.html', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   => './Public/jump/jumpurl.html', // 默认成功跳转对应的模板文件		
	'DATA_PATH_LEVEL'=>2,
  	'url_model' => '3',
	'play_player' =>array (
		'qvod'=>    array('00','快播高清'),
		'bdhd'=>    array('01','百度影音'),
		'yuku'=>    array('02','优酷视频'),
		'tudou'=>   array('03','土豆视频'),
		'qiyi'=>    array('04','奇艺高清'),
		'pvod'=>    array('05','皮皮高清'),
		'baofeng'=> array('06','暴风影音'),	
		'sinahd'=>  array('07','新浪视频'),
		'sohu'=>    array('08','搜狐视频'),
		'ku6'=>     array('09','酷六视频'),
		'qq'=>      array('10','腾讯视频'),
		'web9'=>    array('11','久久影音'),
		'gvod'=>    array('12','迅播高清'),
		'down'=>    array('13','影片下载'),
		'swf'=>     array('14','Swf动画'),
		'flv'=>     array('15','Flv视频'),
		'pptv'=>    array('16','PPTV视频'),
		'pplive'=>  array('17','PPTV直播'),
		'letv'=>    array('18','乐视视频'),
		'cntv'=>    array('21','cntv高清'),
		'cool'=>    array('22','酷播高清'),
		'media'=>   array('19','Media Player'),
		'real'=>    array('20','Real Player'),
	),
	'APP_DEBUG'           =>true,    // 是否开启调试模式
    //'SHOW_RUN_TIME'		=> true,   // 运行时间显示
    //'SHOW_ADV_TIME'		=> true,   // 显示详细的运行时间
    'SHOW_DB_TIMES'		=> true,   // 显示数据库查询和写入次数	
);
return array_merge($config,$array);
?>