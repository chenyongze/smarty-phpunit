<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:06
         compiled from "41e81a693e81b8a27035625eda9e5ea921b0473e" */ ?>
<?php /*%%SmartyHeaderCode:2844654a6ecd2972442_08437064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e81a693e81b8a27035625eda9e5ea921b0473e' => 
    array (
      0 => '41e81a693e81b8a27035625eda9e5ea921b0473e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2844654a6ecd2972442_08437064',
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
  'unifunc' => 'content_54a6ecd29876b3_35605020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd29876b3_35605020')) {function content_54a6ecd29876b3_35605020 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2844654a6ecd2972442_08437064';
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php } ?><?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>