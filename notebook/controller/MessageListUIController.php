<?php
	//这是一个控制器，专门处理对信息的分页查询
	require_once 'smarty_inc.php';
	require_once '../model/MessageModel.class.php';
	require_once '../model/FenyePage.class.php';
	
	$fenyePage = new FenyePage();
	if(isset($_GET['pageNow'])){
		
		$fenyePage->pageNow = $_GET['pageNow'];
	}
	
	//直接用模板显示
	//调用MessageModel里面的方法
	$messageModel = new MessageModel();
	session_start();
	$messageModel->showMessageByPage($fenyePage,$_SESSION['login_name']);
	
	//把新的分页信息再次分配到模板
	$smarty->assign("res",$fenyePage->res_array);
	$smarty->assign("navi",$fenyePage->navigate);
	$smarty->assign("pageCount",$fenyePage->pageCount);
	$smarty->display("messageList.tpl");		
	
?>