<?php
	
	require_once "./libs/Smarty.class.php";
	
	$id = @$_GET['id'];
	//����smarty
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	
	//����smarty���Թ���
	//$smarty->debugging = true;
	
	//����һ�»���
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
	
	//���Ը���id�������ɲ�ͬ�Ļ���ҳ��
	$smarty->display("myindex.tpl",$id);
	$smarty->clear_cache("myindex.tpl",$id);
	//$smarty->clear_all_cache();
?>