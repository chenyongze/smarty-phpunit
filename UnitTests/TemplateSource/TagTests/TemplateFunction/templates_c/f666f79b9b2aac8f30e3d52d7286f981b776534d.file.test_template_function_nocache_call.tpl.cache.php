<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_template_function_nocache_call.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2626454a6ecd459fef6_04594082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f666f79b9b2aac8f30e3d52d7286f981b776534d' => 
    array (
      0 => '.\\templates\\test_template_function_nocache_call.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626454a6ecd459fef6_04594082',
  'tpl_function' => 
  array (
    'to_cache' => 
    array (
      'template_func1' => true,
    ),
  ),
  'type' => 'compiled',
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd45abd09_05818771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd45abd09_05818771')) {function content_54a6ecd45abd09_05818771 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2626454a6ecd459fef6_04594082';
echo $_smarty_tpl->getSubTemplate ('template_function_lib.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
echo '/*%%SmartyNocache:2626454a6ecd459fef6_04594082%%*/<?php $_smarty_tpl->callTemplateFunction (\'template_func1\', $_smarty_tpl, array(), true);?>
/*/%%SmartyNocache:2626454a6ecd459fef6_04594082%%*/';?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>