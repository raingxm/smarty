<?php
	require_once "SqlHelper.class.php";
	
	class MessageModel{
		
		public function showMessage($login_name){
			
			$sql = "select * from message where getter='$login_name'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//关闭连接
			$sqlHelper->close_connect();	
			return $res;
		}
	}
?>