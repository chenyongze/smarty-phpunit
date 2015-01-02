<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_print_nocache.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2658854a6ecd479e317_37111466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5a96abe15ba34793cc8e3571ab3634b9f961411' => 
    array (
      0 => '.\\templates\\test_print_nocache.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2658854a6ecd479e317_37111466',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 0,
    'bar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd47ad401_57747763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd47ad401_57747763')) {function content_54a6ecd47ad401_57747763 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2658854a6ecd479e317_37111466';
echo $_smarty_tpl->tpl_vars['foo']->value;
echo $_smarty_tpl->tpl_vars['bar']->value;?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>