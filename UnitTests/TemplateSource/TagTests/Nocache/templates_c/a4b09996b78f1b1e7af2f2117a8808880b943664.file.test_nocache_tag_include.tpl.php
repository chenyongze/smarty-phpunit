<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:07
         compiled from ".\templates\test_nocache_tag_include.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2148854a6ecd39dfea4_26393982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b09996b78f1b1e7af2f2117a8808880b943664' => 
    array (
      0 => '.\\templates\\test_nocache_tag_include.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2148854a6ecd39dfea4_26393982',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 1,
    'bar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd39f4254_48308919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd39f4254_48308919')) {function content_54a6ecd39f4254_48308919 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2148854a6ecd39dfea4_26393982';
?>
<br>include <?php echo $_smarty_tpl->tpl_vars['foo']->value+4;
echo $_smarty_tpl->tpl_vars['bar']->value;?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>