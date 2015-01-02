<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:06
         compiled from "7ba3333cb0d551e18679b69ebe2fda45b7fbcc09" */ ?>
<?php /*%%SmartyHeaderCode:1874754a6ecd210ab58_35819564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba3333cb0d551e18679b69ebe2fda45b7fbcc09' => 
    array (
      0 => '7ba3333cb0d551e18679b69ebe2fda45b7fbcc09',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1874754a6ecd210ab58_35819564',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 0,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd2122a69_80718947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd2122a69_80718947')) {function content_54a6ecd2122a69_80718947 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1874754a6ecd210ab58_35819564';
echo '/*%%SmartyNocache:1874754a6ecd210ab58_35819564%%*/<?php $_smarty_tpl->tpl_vars[\'x\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'x\']->step = 1;$_smarty_tpl->tpl_vars[\'x\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'x\']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars[\'foo\']->value) : $_smarty_tpl->tpl_vars[\'foo\']->value-(5)+1)/abs($_smarty_tpl->tpl_vars[\'x\']->step));
if ($_smarty_tpl->tpl_vars[\'x\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'x\']->value = $_smarty_tpl->tpl_vars[\'foo\']->value, $_smarty_tpl->tpl_vars[\'x\']->iteration = 1;$_smarty_tpl->tpl_vars[\'x\']->iteration <= $_smarty_tpl->tpl_vars[\'x\']->total;$_smarty_tpl->tpl_vars[\'x\']->value += $_smarty_tpl->tpl_vars[\'x\']->step, $_smarty_tpl->tpl_vars[\'x\']->iteration++) {
$_smarty_tpl->tpl_vars[\'x\']->first = $_smarty_tpl->tpl_vars[\'x\']->iteration == 1;$_smarty_tpl->tpl_vars[\'x\']->last = $_smarty_tpl->tpl_vars[\'x\']->iteration == $_smarty_tpl->tpl_vars[\'x\']->total;?>/*/%%SmartyNocache:1874754a6ecd210ab58_35819564%%*/';
echo '/*%%SmartyNocache:1874754a6ecd210ab58_35819564%%*/<?php echo $_smarty_tpl->tpl_vars[\'x\']->value;?>
/*/%%SmartyNocache:1874754a6ecd210ab58_35819564%%*/';?>
 <?php echo '/*%%SmartyNocache:1874754a6ecd210ab58_35819564%%*/<?php }} ?>/*/%%SmartyNocache:1874754a6ecd210ab58_35819564%%*/';?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>