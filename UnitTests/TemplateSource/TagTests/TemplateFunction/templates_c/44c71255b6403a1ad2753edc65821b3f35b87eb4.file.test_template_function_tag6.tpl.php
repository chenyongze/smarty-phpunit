<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_template_function_tag6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44154a6ecd42e3897_71577025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c71255b6403a1ad2753edc65821b3f35b87eb4' => 
    array (
      0 => '.\\templates\\test_template_function_tag6.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44154a6ecd42e3897_71577025',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd42ee5b4_38181974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd42ee5b4_38181974')) {function content_54a6ecd42ee5b4_38181974 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '44154a6ecd42e3897_71577025';
echo $_smarty_tpl->getSubTemplate ('test_define_function_tag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
echo $_smarty_tpl->getSubTemplate ('test_inherit_function_tag6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>