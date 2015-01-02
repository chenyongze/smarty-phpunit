<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:31:52
         compiled from "f923cfa5f812a42b292aed92c9c49970a09d912d" */ ?>
<?php
/*%%SmartyHeaderCode:135454a673985292e8_65114365%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '135454a673985292e8_65114365',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'foo' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a6739853f5e5_47893039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a6739853f5e5_47893039')) {function content_54a6739853f5e5_47893039 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '135454a673985292e8_65114365';
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 2+1 - ($_smarty_tpl->tpl_vars['foo']->value) : $_smarty_tpl->tpl_vars['foo']->value-(2)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['foo']->value, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;
echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php }} ?><?php }
}
?>