<?php
	require_once "./libs/Smarty.class.php";
	//����smarty
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	$smarty->assign("aa","hello");

	$smarty->assign("bb",509);
	$smarty->assign("cc",3.14);
	//php�пվʹ���false���������dd����false�Ͳ���ʾ
	$smarty->assign("dd",true);
	$smarty->assign("pagenow",20);

	//���һά���飬����һ���Ǵ����ݿ�ȡ��������ģ��һ��
	//1.��������
	$arr1=array("����","���","�Ϻ�");
	//2.��������
	$arr2=array('city1'=>'����','city2'=>'���','city3'=>'�Ϻ�');

	//��Ŷ�ά���飬�����ά����Ҳ�Ǵ����ݿ�ȡ��������ģ��һ����
	//3.������ά����
	$arr3=array(array("����","���","�Ϻ�"),array("Сٻ","����","�ɳ�","����"));
	//4.�����Ķ�ά����
	$arr4=array(array('id'=>'a001','email'=>'xiaoli@163.com','age'=>60),array('id'=>'a002','email'=>'xiaohong@163.com','age'=>20));
	$arr5=array('emp1'=>array('id'=>'a001','email'=>'xiaoli@163.com','age'=>60),'emp2'=>array('id'=>'a002','email'=>'xiaohong@163.com','age'=>20));
	$arr6=array('emp1'=>array('a001','xiaoli@163.com',60),'emp2'=>array('a002','xiaohong@163.com',20));


	//*************����ķ���**********
	
	class Master
	{
		var $name;
		var $address;
	}
	$master=new Master();
	$master->name="yy";
	$master->address="hospital";

	class Dog
	{
		var $name;
		var $age;
		var $color;
		var $arr;
		var $arr2;		//��ά����
		var $master;	//С��������
		function __construct($name,$age,$color,$arr,$arr2)
		{
			$this->name=$name;
			$this->age=$age;
			$this->color=$color;
			$this->arr=$arr;
			$this->arr2=$arr2;
		}
	}

	//ʵ��������
	$dog1 = new Dog('����',5,'��ɫ',$arr1,$arr4);
	$dog1->master=$master;

	//��������ϣ����get/post/session/server�����ݴ��ݸ�tpl
	//��ͳ�ķ�ʽ
//	$username=$_GET['username'];
//	$smarty->assign("username",$username);
//	echo "<pre>";
//	print_r($_SERVER);
//	echo "</pre>";
//	exit();

	$smarty->assign("arr1",$arr1);
	$smarty->assign("arr2",$arr2);
	$smarty->assign("arr3",$arr3);
	$smarty->assign("arr4",$arr4);
	$smarty->assign("arr5",$arr5);
	$smarty->assign("arr6",$arr6);
	$smarty->assign("dog1",$dog1);
	

	$smarty->display("test2.tpl");
?>