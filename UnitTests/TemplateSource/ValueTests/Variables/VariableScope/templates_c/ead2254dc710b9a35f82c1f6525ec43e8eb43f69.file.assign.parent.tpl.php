<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:09
         compiled from ".\templates\assign.parent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1285054a6ecd59ca833_96773193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ead2254dc710b9a35f82c1f6525ec43e8eb43f69' => 
    array (
      0 => '.\\templates\\assign.parent.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1285054a6ecd59ca833_96773193',
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
  'unifunc' => 'content_54a6ecd5a0c8c1_24869909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd5a0c8c1_24869909')) {function content_54a6ecd5a0c8c1_24869909 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1285054a6ecd59ca833_96773193';
$_smarty_tpl->tpl_vars["parent"] = new Smarty_variable("parent", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["parent"] = clone $_smarty_tpl->tpl_vars["parent"];?> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['local']->value)===null||$tmp==='' ? "no-local" : $tmp);?>
 <?php echo $_smarty_tpl->getSubTemplate ("assign.root.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['parent']->value)===null||$tmp==='' ? "no-parent" : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['root']->value)===null||$tmp==='' ? "no-root" : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['global']->value)===null||$tmp==='' ? "no-global" : $tmp);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>