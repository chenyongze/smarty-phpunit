<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:07
         compiled from ".\templates\test_recursive_includes2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971454a6ecd35995b6_40430051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd2114329ac22040a9ed87ea5cf403b5361aff4' => 
    array (
      0 => '.\\templates\\test_recursive_includes2.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '971454a6ecd35995b6_40430051',
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
  'unifunc' => 'content_54a6ecd35cb447_76694032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd35cb447_76694032')) {function content_54a6ecd35cb447_76694032 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '971454a6ecd35995b6_40430051';
?>
before <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>
<br>
<?php if ($_smarty_tpl->tpl_vars['foo']->value<4) {
echo $_smarty_tpl->getSubTemplate ('test_recursive_includes_pass.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('foo'=>$_smarty_tpl->tpl_vars['foo']->value+1), 0);
}?>
after <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>
<br>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>