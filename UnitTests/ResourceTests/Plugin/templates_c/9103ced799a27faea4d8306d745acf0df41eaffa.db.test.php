<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:08:54
         compiled from "db:test" */ ?>
<?php /*%%SmartyHeaderCode:3237554a6ecc6139196_95214609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9103ced799a27faea4d8306d745acf0df41eaffa' => 
    array (
      0 => 'db:test',
      1 => 1420225700,
      2 => 'db',
    ),
  ),
  'nocache_hash' => '3237554a6ecc6139196_95214609',
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
  'unifunc' => 'content_54a6ecc6145b83_48753713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecc6145b83_48753713')) {function content_54a6ecc6145b83_48753713 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3237554a6ecc6139196_95214609';
$_smarty_tpl->tpl_vars['x'] = new Smarty_variable("hello world", null, 0);
echo $_smarty_tpl->tpl_vars['x']->value;?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>