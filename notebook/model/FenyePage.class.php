<?php
	
	//这是一个用于保存分页信息的类
	class FenyePage {
		public $pageSize = 6;	
		public $res_array;		//这是显示数据
		public $rowCount;		//这是从数据库获取的
		public $pageNow = 1;	//这是用户指定的
		public $pageCount;		//这是计算得到的
		public $navigate;		//导航条
		public $gotoUrl;		//表示把分页请求提交给哪个页面
	}
?>