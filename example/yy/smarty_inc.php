<?php	
	require_once "../libs/Smarty.class.php";
	//����smarty
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	//�������ǿ��Ը���ʵ�������ָ��ģ���ļ���Ŀ¼
	$smarty->template_dir="../templates";
	$smarty->compile_dir="../templates_c";
?>