<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-30 07:37:05
         compiled from "a66c2732c8d1fdaf5c5b2ca894e701344e866a43" */ ?>
<?php /*%%SmartyHeaderCode:2605254a24811504354-28455593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66c2732c8d1fdaf5c5b2ca894e701344e866a43' => 
    array (
      0 => 'a66c2732c8d1fdaf5c5b2ca894e701344e866a43',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2605254a24811504354-28455593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'foo' => 1,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_54a24811541db8_13856845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a24811541db8_13856845')) {function content_54a24811541db8_13856845($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:2605254a24811504354-28455593%%*/<?php $_smarty_tpl->tpl_vars[\'x\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'x\']->step = 1;$_smarty_tpl->tpl_vars[\'x\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'x\']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars[\'foo\']->value) : $_smarty_tpl->tpl_vars[\'foo\']->value-(5)+1)/abs($_smarty_tpl->tpl_vars[\'x\']->step));
if ($_smarty_tpl->tpl_vars[\'x\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'x\']->value = $_smarty_tpl->tpl_vars[\'foo\']->value, $_smarty_tpl->tpl_vars[\'x\']->iteration = 1;$_smarty_tpl->tpl_vars[\'x\']->iteration <= $_smarty_tpl->tpl_vars[\'x\']->total;$_smarty_tpl->tpl_vars[\'x\']->value += $_smarty_tpl->tpl_vars[\'x\']->step, $_smarty_tpl->tpl_vars[\'x\']->iteration++){
$_smarty_tpl->tpl_vars[\'x\']->first = $_smarty_tpl->tpl_vars[\'x\']->iteration == 1;$_smarty_tpl->tpl_vars[\'x\']->last = $_smarty_tpl->tpl_vars[\'x\']->iteration == $_smarty_tpl->tpl_vars[\'x\']->total;?>/*/%%SmartyNocache:2605254a24811504354-28455593%%*/';?>
<?php echo '/*%%SmartyNocache:2605254a24811504354-28455593%%*/<?php echo $_smarty_tpl->tpl_vars[\'x\']->value;?>
/*/%%SmartyNocache:2605254a24811504354-28455593%%*/';?>
 <?php echo '/*%%SmartyNocache:2605254a24811504354-28455593%%*/<?php }} ?>/*/%%SmartyNocache:2605254a24811504354-28455593%%*/';?>
<?php }} ?>