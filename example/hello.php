<?php
	
	//����smarty����
	require_once "./libs/Smarty.class.php";
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";

	$smarty->assign("var1","hello,world");
	$smarty->display("hello.tpl");
?>