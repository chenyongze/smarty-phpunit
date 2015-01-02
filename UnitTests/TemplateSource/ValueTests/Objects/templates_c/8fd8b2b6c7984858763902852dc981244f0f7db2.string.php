<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:09
         compiled from "8fd8b2b6c7984858763902852dc981244f0f7db2" */ ?>
<?php /*%%SmartyHeaderCode:594054a6ecd5513067_36768947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fd8b2b6c7984858763902852dc981244f0f7db2' => 
    array (
      0 => '8fd8b2b6c7984858763902852dc981244f0f7db2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '594054a6ecd5513067_36768947',
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
  'unifunc' => 'content_54a6ecd5522635_49975786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd5522635_49975786')) {function content_54a6ecd5522635_49975786 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '594054a6ecd5513067_36768947';
$_smarty_tpl->tpl_vars['p'] = new Smarty_variable('myhello', null, 0);
$_tmp12=$_smarty_tpl->tpl_vars['p']->value;?><?php echo $_smarty_tpl->tpl_vars['object']->value->$_tmp12();?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>