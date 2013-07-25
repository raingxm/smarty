<script type="text/javascript">	
	function checkPageNow(){
			
		//1.获取用户输入
		var pageNow = document.getElementById('pageNow').value;
		//2.使用正则表达式处理
		var reg = /^[1-9](\d)*$/gi;
		if(pageNow != ""){
			if(!reg.test(pageNow)){
					
				alert('输入的跳转页数有错误');
				//把最后输入截掉
				document.getElementById('pageNow').value = pageNow.substring(0,pageNow.length-1);
				return false;
			}else{
				//格式ok
				if(pageNow> <{$pageCount}>){
					alert("输入过大");
					//把最后输入截掉
					document.getElementById('pageNow').value = pageNow.substring(0,pageNow.length-1);
					return false;
				}
			}
				
		}else{
			alert('不能为空');
			return false;
		}
			
		return true;
	}
</script>