<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_template_function.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205854a6ecd4487982_47959005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a8e414fb64105bc09512606aff477db83afb5ad' => 
    array (
      0 => '.\\templates\\test_template_function.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205854a6ecd4487982_47959005',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd4492925_72067486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd4492925_72067486')) {function content_54a6ecd4492925_72067486 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '205854a6ecd4487982_47959005';
echo $_smarty_tpl->getSubTemplate ('template_function_lib.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
$_smarty_tpl->callTemplateFunction ('template_func1', $_smarty_tpl, array(), false);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>