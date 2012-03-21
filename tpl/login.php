<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>登陆  121部落Android版——鲁大学生网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>
<body>
<div data-role="page">
	<div data-role="header"  data-theme="b">
		<h1>121部落用户登录</h1>
		<a href="<?php echo spUrl('main','index');?>" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home">首页</a>
	</div>
	<?php if($isLogin==2){?>	
	<div id="info_tip">
		<p>用户名或密码有错误！<p>
	</div>
	<?php }?>
	
	<?php if($isLogin!=1){?>
	<div class="ui-body ui-body-d" data-role="collapsible-set" data-content-theme="d">
		<ul data-role="listview" data-dividertheme="b" data-inset="true" data-filter="false">
			<li data-role="list-divider">用户登录</li>
			<form action="<?php echo spUrl('login','index');?>" method="post">
				<div data-role="fieldcontain" class="ui-hide-label">
					<label for="uname">帐号:</label>
					<input type="text" name="username" id="uname" value="" placeholder="点击此处输入用户名"/>
					
					<label for="upass">密码:</label>
					<input type="password" name="password" id="upass" value="" placeholder="点击此处输入密码"/>
				</div>
				
				<fieldset class="ui-grid-a">
					<div class="ui-block-c" data-inline="true">
						<button type="submit" id="ulogin" data-theme="a">登录</button>
						<!--<button type="button" data-theme="b"><a href="reg.asp">注册</a></button>-->
					</div>
				</fieldset>
			</form>
		</ul>
	</div>
	<?php } else {?>
	<div class="ui-body ui-body-d" data-role="collapsible-set" data-content-theme="d">
		<ul data-role="listview" data-dividertheme="b" data-inset="true" data-filter="false">
			<li data-role="list-divider">登陆成功</li>
			<li data-role="list-divider"><a href="<?php echo spUrl('main','index');?>">点击进入121部落</a></li>
		</ul>
	</div>
	<?php }?>
	
	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar" ata-iconpos="top">
			<ul>
				<li><a href="#" data-rel="back" data-icon="back">返回</a></li>
				<li><a href="<?php echo spUrl('main','index');?>" data-icon="home">首页</a></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>