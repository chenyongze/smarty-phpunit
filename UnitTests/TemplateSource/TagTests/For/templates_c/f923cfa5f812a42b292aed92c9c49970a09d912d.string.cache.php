<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-30 07:37:05
         compiled from "f923cfa5f812a42b292aed92c9c49970a09d912d" */ ?>
<?php /*%%SmartyHeaderCode:1533054a24811837974-08171221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f923cfa5f812a42b292aed92c9c49970a09d912d' => 
    array (
      0 => 'f923cfa5f812a42b292aed92c9c49970a09d912d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1533054a24811837974-08171221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'foo' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_54a248118779f5_43155474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a248118779f5_43155474')) {function content_54a248118779f5_43155474($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int)ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 2+1 - ($_smarty_tpl->tpl_vars['foo']->value) : $_smarty_tpl->tpl_vars['foo']->value-(2)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0){
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['foo']->value, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++){
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php }} ?><?php }} ?>