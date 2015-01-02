<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:07
         compiled from ".\templates\test_recursive_includes_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518754a6ecd360f0c0_85164039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a92471010e926ad78315671eda75e5b0a309d8f' => 
    array (
      0 => '.\\templates\\test_recursive_includes_pass.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518754a6ecd360f0c0_85164039',
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
  'unifunc' => 'content_54a6ecd361c8c9_81266843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd361c8c9_81266843')) {function content_54a6ecd361c8c9_81266843 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '518754a6ecd360f0c0_85164039';
echo $_smarty_tpl->getSubTemplate ('test_recursive_includes2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('foo'=>$_smarty_tpl->tpl_vars['foo']->value+1), 0);
?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>