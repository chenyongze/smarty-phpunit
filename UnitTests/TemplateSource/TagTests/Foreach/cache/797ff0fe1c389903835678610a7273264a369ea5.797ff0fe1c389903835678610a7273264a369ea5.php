<?php
/*%%SmartyHeaderCode:925154a67398c70484_10085186%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '797ff0fe1c389903835678610a7273264a369ea5' => 
    array (
      0 => '797ff0fe1c389903835678610a7273264a369ea5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '925154a67398c70484_10085186',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'variables' => 
  array (
    'foo' => 0,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a67398ccc5c8_32475142',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a67398ccc5c8_32475142')) {function content_54a67398ccc5c8_32475142 ($_smarty_tpl) {
?>
<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php } ?><?php }
}
?>