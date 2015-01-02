<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:31:52
         compiled from "41e81a693e81b8a27035625eda9e5ea921b0473e" */ ?>
<?php
/*%%SmartyHeaderCode:1564854a67398d279d7_19933378%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1564854a67398d279d7_19933378',
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
  'unifunc' => 'content_54a67398d3beb5_67476936',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a67398d3beb5_67476936')) {function content_54a67398d3beb5_67476936 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1564854a67398d279d7_19933378';
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php } ?><?php }
}
?>