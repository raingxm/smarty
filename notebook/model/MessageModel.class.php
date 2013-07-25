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
		
		//根据分页pageNow来获取对应信息
		public function showMessageByPage($fenyePage,$login_name){
			
			//写出sql语句
			$sql[0] = "select count(*) from message where getter='$login_name'";
			//如果获取第2页			select * from message where getter='??' limit 3,3;
			$sql[1] = "select * from message where getter='$login_name' limit ".
				($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			$sqlHelper = new SqlHelper();
			$sqlHelper->execute_dql_fenye($sql[1],$sql[0],$fenyePage);
			$sqlHelper->close_connect();
		}
	}
?>