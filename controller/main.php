<?php
class main extends spController
{
	function index(){
		$__API__ = array(
			0=>CLUB121_API_SITE_URL,
			1=>CLUB121_API_APP_KEY,
			2=>CLUB121_API_APP_SECRET,
		);
		
		if($_SESSION['user']['uid']!=0){
			$user = $_SESSION['user'];
			$__API__ = $user['club121_API'];
			$this->isLogin = 1;
		}
		
		$params = $this->spArgs();
		if(isset($params['p'])){
			$page = $params['p'];
		} else {
			$page = 1;
		}
		
		$JishiGouAPI = spClass('JishiGouAPI',$__API__);
		$this->weibo = $JishiGouAPI->GetAllTopic(30,$page);
		//var_dump($this->weibo);
		$this->user_info = $user;
		$this->display("index.php");
	}
	
	function public_weibo(){
		if($_SESSION['user']['uid']==0){
			$this->jump(spUrl('main', 'index'));
			die();
		}
		
		if($_SESSION['user']['uid']!=0){
			$user = $_SESSION['user'];
			$__API__ = $user['club121_API'];
			$this->isLogin = 1;
		}
		
		$params = $this->spArgs();
		if($params['weibo_topic']!=''){
			$weibo = $params['weibo_topic'];
		} else {
			$this->isEmpty = 1;
			exit();
		}
		//$weibo = iconv('utf-8','gbk',$weibo);
		$JishiGouAPI = spClass('JishiGouAPI',$__API__);
		$this->is_pub = $JishiGouAPI->AddTopic($weibo);
		
		$this->display("pub_msg.php");
	}
}