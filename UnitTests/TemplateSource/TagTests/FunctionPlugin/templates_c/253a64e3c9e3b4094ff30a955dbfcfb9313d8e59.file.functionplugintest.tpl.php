<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:06
         compiled from ".\templates\functionplugintest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:921554a6ecd2a2f7c5_67264272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253a64e3c9e3b4094ff30a955dbfcfb9313d8e59' => 
    array (
      0 => '.\\templates\\functionplugintest.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921554a6ecd2a2f7c5_67264272',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd2a3a7c9_32737757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd2a3a7c9_32737757')) {function content_54a6ecd2a3a7c9_32737757 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\Smarty3.1-test-release\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php';
?><?php
$_smarty_tpl->properties['nocache_hash'] = '921554a6ecd2a2f7c5_67264272';
echo smarty_function_counter(array('start'=>10,'name'=>'tpl'),$_smarty_tpl);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>