<?php
	
	require_once "./libs/Smarty.class.php";
	
	//$id = @$_GET['id'];
	//����smarty
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	
	//����smarty���Թ���
	//$smarty->debugging = true;
	
	//����һ�»���
	//$smarty->caching = true;
	//$smarty->cache_lifetime = 60;
	
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
	
	//����aa���൱��һ��һά����
	$smarty->append("aa","����");
	$smarty->append("aa","���");
	
	//bb���൱��һ����ά����
	$testarr = array('id'=>'a001','name'=>'С��');
	//$smarty->append("bb",$testarr);
	//append_by_ref�������õķ�ʽ��ӵģ�Ҳ����˵�������ֵ����
	$smarty->append_by_ref("bb",$testarr);
	$smarty->append("bb",array('id'=>'a002','name'=>'С��2'));
	
	//assignĬ��ֵ����
	$smarty->assign("cc",$testarr);
	//assign_by_ref�����ô���
	$smarty->assign_by_ref("dd",$testarr);
	
	//append���仯,append_by_ref�仯
	//$testarr = array();
	
	//������з���ı���
	//$smarty->clear_all_assign();
	//ָ�����ĳ������
	$smarty->clear_assign("dd");
	
	
	
	class Dog{
		
		var $name;
		public function sayHello(){
			
			return $this->name." say: hello,world!";
		}
	}
	
	$dog1 = new Dog();
	$dog1->name = "С��";
	$smarty->assign("dog",$dog1);
	
	//���Ը���id�������ɲ�ͬ�Ļ���ҳ��
	if($smarty->template_exists("myindex.tpl")){
		
		$smarty->display("myindex.tpl");
	}
	//$smarty->clear_cache("myindex.tpl",$id);
	//$smarty->clear_all_cache();
?>