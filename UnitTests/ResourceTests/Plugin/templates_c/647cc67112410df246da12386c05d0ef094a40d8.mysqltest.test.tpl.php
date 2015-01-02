<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:08:54
         compiled from "mysqltest:test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3021054a6ecc6209598_01746271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647cc67112410df246da12386c05d0ef094a40d8' => 
    array (
      0 => 'mysqltest:test.tpl',
      1 => 1293310800,
      2 => 'mysqltest',
    ),
  ),
  'nocache_hash' => '3021054a6ecc6209598_01746271',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecc6216836_56984848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecc6216836_56984848')) {function content_54a6ecc6216836_56984848 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3021054a6ecc6209598_01746271';
$_smarty_tpl->tpl_vars['x'] = new Smarty_variable("hello world", null, 0);
echo $_smarty_tpl->tpl_vars['x']->value;?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>