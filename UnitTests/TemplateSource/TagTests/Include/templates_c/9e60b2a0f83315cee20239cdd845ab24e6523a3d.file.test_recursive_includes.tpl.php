<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:07
         compiled from ".\templates\test_recursive_includes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1766154a6ecd350eb76_40373176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e60b2a0f83315cee20239cdd845ab24e6523a3d' => 
    array (
      0 => '.\\templates\\test_recursive_includes.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1766154a6ecd350eb76_40373176',
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
  'unifunc' => 'content_54a6ecd3542161_10625410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd3542161_10625410')) {function content_54a6ecd3542161_10625410 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1766154a6ecd350eb76_40373176';
?>
before <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>
<br>
<?php if ($_smarty_tpl->tpl_vars['foo']->value<3) {
echo $_smarty_tpl->getSubTemplate ('test_recursive_includes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('foo'=>$_smarty_tpl->tpl_vars['foo']->value+1), 0);
}?>
after <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>
<br>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>