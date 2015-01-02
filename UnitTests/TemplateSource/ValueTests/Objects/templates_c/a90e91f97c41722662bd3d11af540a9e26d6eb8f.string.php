<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:09
         compiled from "a90e91f97c41722662bd3d11af540a9e26d6eb8f" */ ?>
<?php /*%%SmartyHeaderCode:256754a6ecd54c14c1_87187248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a90e91f97c41722662bd3d11af540a9e26d6eb8f' => 
    array (
      0 => 'a90e91f97c41722662bd3d11af540a9e26d6eb8f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '256754a6ecd54c14c1_87187248',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd54cbc76_15959330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd54cbc76_15959330')) {function content_54a6ecd54cbc76_15959330 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '256754a6ecd54c14c1_87187248';
echo $_smarty_tpl->tpl_vars['object']->value->myhello();?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>