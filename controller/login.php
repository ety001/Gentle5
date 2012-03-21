<?php
class login extends spController
{
	function index(){
		if($_SESSION['user']['uid']!=0){
			$this->jump(spUrl('main', 'index'));
			die();
		}
		$params = $this->spArgs();
		if(isset($params['username'])&&isset($params['password'])){
			$user = iconv('utf-8','gbk',$params['username']);
			$pass = md5(iconv('utf-8','gbk',$params['username']) . md5(iconv('utf-8','gbk',$params['password'])));
			$club121 = array(
				0=>CLUB121_API_SITE_URL,
				1=>CLUB121_API_APP_KEY,
				2=>CLUB121_API_APP_SECRET,
				3=>$user,
				4=>$pass
			);
			
			$JishiGouAPI = spClass('JishiGouAPI',$club121);
			$loginInfo = $JishiGouAPI->GetUserInfoById();
			
			if(isset($loginInfo['error']))
			{
				if($loginInfo['error'])
				{
					$this->isLogin = 2;//faild
				}
			} else if($loginInfo['result']['uid']!=0) {
				session_start();
				$_SESSION['user'] = $loginInfo['result'];
				$_SESSION['user']['password'] = $pass;
				$_SESSION['user']['club121_API'] = $club121;
				$this->isLogin = 1;//success
			}
		}
		$this->display("login.php");
	}
}