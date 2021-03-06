﻿<?php
	
	//这是一个工具类，作用是完成对数据库的操作
	class SqlHelper {
		
		public $conn;
		public $dbname="spdb1";
		public $username="root";
		public $password="";
		public $host="localhost";
		
		public function __construct() {
			
			$this->conn = mysql_connect($this->host,$this->username,$this->password);
			if(!$this->conn) {
				die("连接数据库失败".mysql_error());
			}
			mysql_query("SET NAMES 'utf8'");
			mysql_select_db($this->dbname,$this->conn);
		}
		
		//执行dql语句
		public function execute_dql($sql) {
			
			$res = mysql_query($sql,$this->conn) or die(mysql_error());
			return $res;
			
		}
		
		//执行dql语句，但是返回的是一个数组
		public function execute_dql2($sql) {

			$arr = array();
			$res = mysql_query($sql,$this->conn) or die(mysql_error());
			//把$res=>$arr，把结果集的内容转移到一个数组中
			while($row = mysql_fetch_assoc($res)){
				$arr[] = $row;
			}
			//这里就可以马上释放$res
			mysql_free_result($res);
			
			return $arr;		
		}
		
		//考虑分页情况的查询，这是一个比较通用的并体现oop编程思想的代码
		//$sql1 = "select * from 表名 limit 0,6";
		//$sql2 = "select count(id) from 表名";
		public function execute_dql_fenye($sql1,$sql2,$fenyePage){
			
			//这里我们查询了要分页显示的数据
			$res = mysql_query($sql1,$this->conn) or die(mysql_error());
			//$res=>array()
			$arr = array();
			//把$res转移到$arr
			while($row = mysql_fetch_assoc($res)){
				$arr[] = $row;
			}
			mysql_free_result($res);
			
			$res2 = mysql_query($sql2,$this->conn) or die(mysql_error());
			if($row = mysql_fetch_row($res2)){
				
				$fenyePage->pageCount = ceil($row[0]/$fenyePage->pageSize);
				$fenyePage->rowCount = $row[0];		
			}
			mysql_free_result($res2);
			
			//把导航信息也封装到fenyePage对象中
			//先显示上一页和下一页
			$navigate = "";
			if($fenyePage->pageNow > 1)
			{
				$prePage = $fenyePage->pageNow - 1;
				$navigate.= "<a href='{$fenyePage->gotoUrl}?pageNow=$prePage'>上一页</a>&nbsp;";
			}
			if($fenyePage->pageNow < $fenyePage->pageCount)
			{
				$nextPage = $fenyePage->pageNow + 1;
				$navigate.= "<a href='{$fenyePage->gotoUrl}?pageNow=$nextPage'>下一页</a>&nbsp;";
			}
			
			$pageWhole = 10;
			//可以使用for循环打印超链接
			$start = floor(($fenyePage->pageNow-1)/$pageWhole)*$pageWhole + 1;
			$index = $start;
			//整体每10页向前翻
			//如果当前$pageNow在1-10页，就没有向前翻动的超链接
			if($fenyePage->pageNow > 10){
				$navigate.= "&nbsp;&nbsp;<a href='{$fenyePage->gotoUrl}?pageNow=".($start-1)."'>&nbsp;&nbsp;<<&nbsp;&nbsp;</a>";
			}
			for(;$start<$index+$pageWhole && $start<=$fenyePage->pageCount;$start++){
				$navigate.= "<a href='{$fenyePage->gotoUrl}?pageNow=$start'>[$start]</a>";
			}
			//整体每10页向后翻动
			if($index+$pageWhole <= $fenyePage->pageCount){
				$navigate.= "&nbsp;&nbsp;<a href='{$fenyePage->gotoUrl}?pageNow=$start'>&nbsp;&nbsp;>>&nbsp;&nbsp;</a>";
			}
			//显示当前页和共有多少页
			$navigate.="当前页{$fenyePage->pageNow}/共{$fenyePage->pageCount}页";
			
			//指定跳转到某页
			$navigate.= "<form action='{$fenyePage->gotoUrl}' method='get' onsubmit='return checkPageNow()'/>";
			$navigate.= "请输入页数：<input type='text' name='pageNow' id='pageNow' onkeyup='return checkPageNow()' />";
			$navigate.= "<input type='submit' value='go'";
			
			//把$arr赋给$fenyePage
			$fenyePage->res_array = $arr;
			$fenyePage->navigate = $navigate;
		}
		
		//执行dml语句
		public function execute_dml($sql) {
			
			$b = mysql_query($sql,$this->conn) or die(mysql_error());
			if(!$b){
				return 0;
			}else{
				if(mysql_affected_rows($this->conn) > 0){
					return 1;		//表示执行Ok
				}else{
					return 2;		//表示没有行受到影响
				}
			}
		}
		
		//关闭连接的方法
		public function close_connect() {
			
			if(!empty($this->conn)) {
				mysql_close($this->conn);
			}
		}
	}
?>