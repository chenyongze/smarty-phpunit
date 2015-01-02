<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:09
         compiled from ".\templates\assign.global.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1664054a6ecd5ad2118_81142011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50ed96605a0b0a0645abb132cca448ada1851dc' => 
    array (
      0 => '.\\templates\\assign.global.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1664054a6ecd5ad2118_81142011',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd5ae1393_73047457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd5ae1393_73047457')) {function content_54a6ecd5ae1393_73047457 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1664054a6ecd5ad2118_81142011';
$_smarty_tpl->tpl_vars["global"] = new Smarty_variable("global", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["global"] = clone $_smarty_tpl->tpl_vars["global"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["global"] = clone $_smarty_tpl->tpl_vars["global"];?><?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>