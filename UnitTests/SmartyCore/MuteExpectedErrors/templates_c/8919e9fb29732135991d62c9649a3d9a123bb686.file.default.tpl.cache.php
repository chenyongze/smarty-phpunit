<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:08:56
         compiled from ".\templates\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2435954a6ecc825cfb5_32402512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8919e9fb29732135991d62c9649a3d9a123bb686' => 
    array (
      0 => '.\\templates\\default.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435954a6ecc825cfb5_32402512',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecc826aea5_51293895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecc826aea5_51293895')) {function content_54a6ecc826aea5_51293895 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2435954a6ecc825cfb5_32402512';
echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value)===null||$tmp==='' ? '' : $tmp);?>
 /* should compile something with @silence error suppression */<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>