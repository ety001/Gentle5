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
		<h1>微博广场</h1>
	</div>
	<?php if($isLogin==1){?>	
	<div date-role="content">
		<ul data-role="listview">
			<li>
				<img src="<?php echo $user_info['face'];?>" />
				<?php echo $user_info['nickname'].'已登陆';?><br /><br />
				<?php echo '发微博数：'.$user_info['topic_count'].'条<br /><br />你关注了 '.$user_info['follow_count'].' 人，有 '.$user_info['fans_count'].' 人关注你';?>
			</li>
			<li data-role="fieldcontain">
	        	<label for="textarea">发微博:</label>
	        	<form action="<?php echo spUrl('main','public_weibo');?>" method="post">
				<textarea cols="40" rows="8" name="weibo_topic" id="textarea" placeholder="在这里输入你想发表的内容~"></textarea>
				<fieldset class="ui-grid-a">
					<div class="ui-block-c"><button type="submit" id="public_weibo" data-theme="a">发布</button></div>
				</fieldset>
				</form>
			</li>
		</ul>
	</div>
	<?php }?>
	
	<ul data-role="listview" data-inset="true">
		<?php foreach($weibo['result']['topics'] as $t){
			if($t['type']!='reply'){	
		?>
			
		<li>
			<img src="<?php echo $t['face_original'];?>" />
			<div><?php echo $t['content'];?></div>
			<p>&nbsp;</p>
			<p><?php echo '<b>'.$t['nickname'].'</b> '.$t['from_string'].'</p><p>在 '.date("Y-m-d H:i:s",$t['addtime']).' 发布';?></p>
		</li>	
		<?php }
			}
			$page_next=$weibo['result']['page_next'];
			$page_previous=$weibo['result']['page_previous'];
			$page=$weibo['result']['page'];
		?>
		<a href="<?php echo spUrl('main','index').'&p='.$page_previous;?>" data-role="button" data-icon="arrow-l" data-inline="true">上一页</a>
		<a href="<?php echo spUrl('main','index').'&p='.$page_next;?>" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right">下一页</a>
	</ul>
	
	
	<div data-role="footer" data-id="foo1" data-position="fixed">
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
	</div>
</div>
</body>
</html>