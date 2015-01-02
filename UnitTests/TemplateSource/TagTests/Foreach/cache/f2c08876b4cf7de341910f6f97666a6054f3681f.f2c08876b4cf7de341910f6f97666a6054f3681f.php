<?php
/*%%SmartyHeaderCode:238654a67398bb6ed3_30206870%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2c08876b4cf7de341910f6f97666a6054f3681f' => 
    array (
      0 => 'f2c08876b4cf7de341910f6f97666a6054f3681f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '238654a67398bb6ed3_30206870',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'variables' => 
  array (
    'foo' => 1,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a67398c14c42_71732712',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a67398c14c42_71732712')) {function content_54a67398c14c42_71732712 ($_smarty_tpl) {
?>
<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php } ?><?php }
}
?>