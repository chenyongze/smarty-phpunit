<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:31:52
         compiled from "797ff0fe1c389903835678610a7273264a369ea5" */ ?>
<?php
/*%%SmartyHeaderCode:925154a67398c70484_10085186%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '797ff0fe1c389903835678610a7273264a369ea5' => 
    array (
      0 => '797ff0fe1c389903835678610a7273264a369ea5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '925154a67398c70484_10085186',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'foo' => 0,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a67398c848f1_03371783',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a67398c848f1_03371783')) {function content_54a67398c848f1_03371783 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '925154a67398c70484_10085186';
echo '/*%%SmartyNocache:925154a67398c70484_10085186%%*/<?php  $_smarty_tpl->tpl_vars[\'x\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'x\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'foo\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'x\']->key => $_smarty_tpl->tpl_vars[\'x\']->value) {
$_smarty_tpl->tpl_vars[\'x\']->_loop = true;
?>/*/%%SmartyNocache:925154a67398c70484_10085186%%*/';
echo '/*%%SmartyNocache:925154a67398c70484_10085186%%*/<?php echo $_smarty_tpl->tpl_vars[\'x\']->value;?>
/*/%%SmartyNocache:925154a67398c70484_10085186%%*/';?>
 <?php echo '/*%%SmartyNocache:925154a67398c70484_10085186%%*/<?php } ?>/*/%%SmartyNocache:925154a67398c70484_10085186%%*/';?>
<?php }
}
?>