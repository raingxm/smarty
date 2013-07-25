<html>
<head>
<{include file='../js/my.js'}>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>信息列表界面</title>
</head>
<body>
<a href="#"><font size="7" color="blue">发布信息</font></a>
<a href="#"><font size="7" color="blue">退出系统</font></a>
<table border="1">
<tr><td>id号</td><td>发送人</td><td>发送时间</td><td>接收人</td><td>内容</td></tr>
<{foreach from=$res item=mess}>
<tr><td><{$mess.message_id}></td><td><{$mess.sender}></td><td><{$mess.sendtime}></td>
<td><{$mess.getter}></td><td><{$mess.content}></td></tr>
<{/foreach}>
</table><br/>
<{$navi}>
</body>
</html>