<?php
	
	require_once "./libs/Smarty.class.php";
	
	//����smarty
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	
	
	//�Զ���һ������
	//��tpl�еĵ��÷�ʽ�� <{test1 times="4" size="5" con="��ã�����" color="red"}>
	function test1($args){
		
		$str="";
		
		for($i=0;$i<$args['times'];$i++){
			
			$str.="<font color='".$args['color']."' size='".$args['size']."'>".$args[con]."</font>"."<br/>";
		}
		
		return $str;
	}
	
	//�Զ���һ���������鷽ʽ��Ҫ����������
	//tpl�е��÷�ʽ		<{test1 times="10" size="5" color="red"}>��ã�����<{/test1}>

	/*function test2($args,$con){
		
		$str="";
		
		for($i=0;$i<$args['times'];$i++){
			
			$str.="<font color='".$args['color']."' size='".$args['size']."'>".$con."</font>"."<br/>";
		}
		
		return $str;
	}*/
	
	//�Զ���һ������jisuan
	function jisuan($args)
	{
		$res=0;
		switch($args['operator'])
		{
			case '+':
				$res=$args['num1']+$args['num2'];
				break;
			case '-':
				$res=$args['num1']-$args['num2'];
				break;
			case '*':
				$res=$args['num1']-$args['num2'];
				break;
			case '/':
				$res=$args['num1']/$args['num2'];
				break;
			default:
				$res="��������������ȷ";
		}
		return $res;
	}
	
	//ע���Զ��庯��
	$smarty->register_function("test1","test1");
	//ע��麯��
	//$smarty->register_block("test2","test2");
	//ע���Զ��庯��jisuan
	$smarty->register_function("jisuan","jisuan");
	$val="tt";
	$smarty->assign("val",$val);
	
	$smarty->display("test3.tpl");
?>