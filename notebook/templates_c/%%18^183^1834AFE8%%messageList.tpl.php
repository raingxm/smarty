<?php /* Smarty version 2.6.18, created on 2013-07-23 08:18:30
         compiled from messageList.tpl */ ?>
﻿<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>信息列表界面</title>
</head>
<body>
<a href="#"><font size="7" color="blue">发布信息</font></a>
<a href="#"><font size="7" color="blue">退出系统</font></a>
<table border="1">
<tr><td>发送人</td><td>发送时间</td><td>接收人</td><td>内容</td></tr>
<?php $_from = $this->_tpl_vars['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mess']):
?>
<tr><td><?php echo $this->_tpl_vars['mess']['sender']; ?>
</td><td><?php echo $this->_tpl_vars['mess']['sendtime']; ?>
</td><td><?php echo $this->_tpl_vars['mess']['getter']; ?>
</td><td><?php echo $this->_tpl_vars['mess']['content']; ?>
</td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>