<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
//121部落服务端的API地址
define('CLUB121_API_SITE_URL',		'http://www.hi121.net/api.php');
//121部落分配的APP KEY
define('CLUB121_API_APP_KEY',		'00000');
//121部落分配的APP SECRET
define('CLUB121_API_APP_SECRET',	'0000000000000');
$spConfig = array(
	'mode' => 'debug',
	'view' => array(
		'enabled' => TRUE, // 开启模板
        'config' =>array(
	    	'template_dir' => APP_PATH.'/tpl', // 模板存放的目录
        ),
        'engine_name' => 'speedy', // 采用speedPHP的模板
		'engine_path' => SP_PATH.'/Drivers/speedy.php', // 模板引擎主类路径
    ),
);
require(SP_PATH."/SpeedPHP.php");
spRun();