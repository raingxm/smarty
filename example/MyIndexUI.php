<?php
	
	require_once "./libs/Smarty.class.php";
	
	$id = @$_GET['id'];
	//创建smarty
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	
	//启用smarty调试功能
	//$smarty->debugging = true;
	
	//配置一下缓存
	$smarty->caching = true;
	$smarty->cache_lifetime = 60;
	
	function insert_getVisitTime(){
		
		$time = "";
		if(!file_exists("mycount.txt")){
			
			$time = "1";
			file_put_contents("mycount.txt","1");
		}else{
			
			$time = file_get_contents("mycount.txt");
			$time = intval($time)+1;
			file_put_contents("mycount.txt",$time);
		}
		
		return $time;
	}
	
	//可以根据id号来生成不同的缓存页面
	$smarty->display("myindex.tpl",$id);
	$smarty->clear_cache("myindex.tpl",$id);
	//$smarty->clear_all_cache();
?>