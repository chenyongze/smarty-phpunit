<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:06
         compiled from "f923cfa5f812a42b292aed92c9c49970a09d912d" */ ?>
<?php /*%%SmartyHeaderCode:2261654a6ecd21bdd35_79070384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2261654a6ecd21bdd35_79070384',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd21d4b58_92690804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd21d4b58_92690804')) {function content_54a6ecd21d4b58_92690804 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2261654a6ecd21bdd35_79070384';
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 2+1 - ($_smarty_tpl->tpl_vars['foo']->value) : $_smarty_tpl->tpl_vars['foo']->value-(2)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['foo']->value, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;
echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php }} ?><?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>