<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:31:52
         compiled from "f2c08876b4cf7de341910f6f97666a6054f3681f" */ ?>
<?php
/*%%SmartyHeaderCode:238654a67398bb6ed3_30206870%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2c08876b4cf7de341910f6f97666a6054f3681f' => 
    array (
      0 => 'f2c08876b4cf7de341910f6f97666a6054f3681f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '238654a67398bb6ed3_30206870',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'foo' => 1,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a67398bc9e66_18867120',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a67398bc9e66_18867120')) {function content_54a67398bc9e66_18867120 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '238654a67398bb6ed3_30206870';
echo '/*%%SmartyNocache:238654a67398bb6ed3_30206870%%*/<?php  $_smarty_tpl->tpl_vars[\'x\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'x\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'foo\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'x\']->key => $_smarty_tpl->tpl_vars[\'x\']->value) {
$_smarty_tpl->tpl_vars[\'x\']->_loop = true;
?>/*/%%SmartyNocache:238654a67398bb6ed3_30206870%%*/';
echo '/*%%SmartyNocache:238654a67398bb6ed3_30206870%%*/<?php echo $_smarty_tpl->tpl_vars[\'x\']->value;?>
/*/%%SmartyNocache:238654a67398bb6ed3_30206870%%*/';?>
 <?php echo '/*%%SmartyNocache:238654a67398bb6ed3_30206870%%*/<?php } ?>/*/%%SmartyNocache:238654a67398bb6ed3_30206870%%*/';?>
<?php }
}
?>