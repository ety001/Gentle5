<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>121部落小5版——鲁大学生网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>
<body>
<div data-role="page">
	<div data-role="header"  data-theme="b">
		<h1>微博发布<?php echo ($isEmpty==1||$is_pub==0)?'失败':'成功';?></h1>
	</div>	
	<div date-role="content">
		<ul data-role="listview" data-dividertheme="b" data-inset="true" data-filter="false">
			<li data-role="list-divider">
			<?php
			if($isEmpty==1)echo '微博内容不能为空';
			if($is_pub)echo '微博发布成功'; else echo '微博发布失败';
			?>
			</li>
			<li data-role="list-divider"><a href="#" data-rel="back" data-icon="back">返回微博广场</a></li>
		</ul>
	</div>
	
	
	<!--<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" ata-iconpos="top">
			<ul>
				<?php if($isLogin==1){?>
				<li><a href="" data-icon="alert">登出</a></li>
				<?php } else {?>
				<li><a href="<?php echo spUrl('login','index');?>" data-icon="star">登陆</a></li>
				<?php }?>
				<li><a href="<?php echo spUrl('main','index');?>" data-icon="home">首页</a></li>
			</ul>
		</div>
	</div>-->
</div>
</body>
</html>