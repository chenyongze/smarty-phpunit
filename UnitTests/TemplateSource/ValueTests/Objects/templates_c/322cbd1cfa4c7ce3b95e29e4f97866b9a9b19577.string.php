<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:09
         compiled from "322cbd1cfa4c7ce3b95e29e4f97866b9a9b19577" */ ?>
<?php /*%%SmartyHeaderCode:211854a6ecd54693b0_91576284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '322cbd1cfa4c7ce3b95e29e4f97866b9a9b19577' => 
    array (
      0 => '322cbd1cfa4c7ce3b95e29e4f97866b9a9b19577',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '211854a6ecd54693b0_91576284',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'p' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd5478df8_36475198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd5478df8_36475198')) {function content_54a6ecd5478df8_36475198 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '211854a6ecd54693b0_91576284';
$_smarty_tpl->tpl_vars['p'] = new Smarty_variable('hello', null, 0);
echo $_smarty_tpl->tpl_vars['object']->value->{$_smarty_tpl->tpl_vars['p']->value};?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>