<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:07
         compiled from ".\templates\insertplugintest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1270354a6ecd36d04f4_03281105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68ca01bcb6ac1688a6d5d91e7371e9fb5029774' => 
    array (
      0 => '.\\templates\\insertplugintest.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270354a6ecd36d04f4_03281105',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd36def49_56401755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd36def49_56401755')) {function content_54a6ecd36def49_56401755 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php if (!is_callable('smarty_insert_insertplugintest')) include 'C:\\wamp\\www\\Smarty3.1-test-release\\vendor\\smarty\\smarty-phpunit\\UnitTests\\TemplateSource\\TagTests\\Insert/PHPunitplugins\\insert.insertplugintest.php';
?><?php
$_smarty_tpl->properties['nocache_hash'] = '1270354a6ecd36d04f4_03281105';
echo smarty_insert_insertplugintest(array('foo' => $_smarty_tpl->tpl_vars['foo']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>