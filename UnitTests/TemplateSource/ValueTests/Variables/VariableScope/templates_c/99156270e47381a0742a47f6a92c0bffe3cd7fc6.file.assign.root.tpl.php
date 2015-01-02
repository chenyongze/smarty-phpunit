<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:09
         compiled from ".\templates\assign.root.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1933154a6ecd5a4e4e4_23872514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99156270e47381a0742a47f6a92c0bffe3cd7fc6' => 
    array (
      0 => '.\\templates\\assign.root.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1933154a6ecd5a4e4e4_23872514',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'local' => 0,
    'parent' => 0,
    'root' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd5a8e868_91367076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd5a8e868_91367076')) {function content_54a6ecd5a8e868_91367076 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1933154a6ecd5a4e4e4_23872514';
$_smarty_tpl->tpl_vars["root"] = new Smarty_variable("root", null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["root"] = clone $_smarty_tpl->tpl_vars["root"]; $_ptr = $_ptr->parent; }?> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['local']->value)===null||$tmp==='' ? "no-local" : $tmp);?>
 <?php echo $_smarty_tpl->getSubTemplate ("assign.global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['parent']->value)===null||$tmp==='' ? "no-parent" : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['root']->value)===null||$tmp==='' ? "no-root" : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['global']->value)===null||$tmp==='' ? "no-global" : $tmp);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>