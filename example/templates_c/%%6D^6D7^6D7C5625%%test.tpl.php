<?php /* Smarty version 2.6.18, created on 2013-03-12 11:21:53
         compiled from test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'test.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => '../config/my.conf'), $this);?>


<body bgcolor=<?php echo $this->_config[0]['vars']['bgcolor']; ?>
 >
<h1><?php echo $this->_config[0]['vars']['title']; ?>
</h1>
<hr/>
<br/>*****ȡ�ַ���******<br/>
<?php echo $this->_tpl_vars['aa']; ?>

<hr/>
<br/>*****ȡ����******<br/>
<?php echo $this->_tpl_vars['bb']; ?>

<hr/>
<br/>*****ȡС��******<br/>
<?php echo $this->_tpl_vars['cc']; ?>

<hr/>
<br/>*****ȡbool******<br/>
<?php echo $this->_tpl_vars['dd']; ?>

<hr/>
<br/>*****ȡ������******<br/>
<?php echo $this->_tpl_vars['arr1'][0]; ?>
||<?php echo $this->_tpl_vars['arr1'][1]; ?>
||<?php echo $this->_tpl_vars['arr1'][2]; ?>

<hr/>
<br/>*****ȡ��һά��������******<br/>
<?php echo $this->_tpl_vars['arr2']['city1']; ?>
||<?php echo $this->_tpl_vars['arr2']['city2']; ?>
||<?php echo $this->_tpl_vars['arr2']['city3']; ?>

<hr/>
<br/>*****ȡ����ά��������******<br/>
<?php echo $this->_tpl_vars['arr3'][0][0]; ?>
||<?php echo $this->_tpl_vars['arr3'][0][1]; ?>
||<?php echo $this->_tpl_vars['arr3'][1][1]; ?>


<hr/>
<br/>*****ȡ����ά��������******<br/>
<?php echo $this->_tpl_vars['arr4'][0]['email']; ?>
||<?php echo $this->_tpl_vars['arr4'][0]['age']; ?>
<br/>
<?php echo $this->_tpl_vars['arr5']['emp1']['email']; ?>
<br/>
<?php echo $this->_tpl_vars['arr6']['emp2'][0]; ?>


<hr/>
<br/>*****ȡ������******<br/>
ȡ���������ͨ����:<?php echo $this->_tpl_vars['dog1']->name; ?>
<br/>
ȡ�������һά��������:<?php echo $this->_tpl_vars['dog1']->arr[0]; ?>
<br/>
ȡ������Ķ�ά��������:<?php echo $this->_tpl_vars['dog1']->arr2[0]['email']; ?>
<br/>
ȡ������Ķ�������:<?php echo $this->_tpl_vars['dog1']->master->address; ?>


<hr/>
<br/>*****ȡ��get����******<br/>
<?php echo $_GET['username']; ?>
<br/>
<?php echo $_SERVER['SERVER_NAME']; ?>

</body>