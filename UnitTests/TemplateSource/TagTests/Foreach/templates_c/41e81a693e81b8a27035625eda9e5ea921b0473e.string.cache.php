<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-30 07:37:06
         compiled from "41e81a693e81b8a27035625eda9e5ea921b0473e" */ ?>
<?php /*%%SmartyHeaderCode:1906454a24812e61fd8-10545813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1906454a24812e61fd8-10545813',
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
  'unifunc' => 'content_54a24812e9ed21_13556004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a24812e9ed21_13556004')) {function content_54a24812e9ed21_13556004($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value){
$_smarty_tpl->tpl_vars['x']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php } ?><?php }} ?>