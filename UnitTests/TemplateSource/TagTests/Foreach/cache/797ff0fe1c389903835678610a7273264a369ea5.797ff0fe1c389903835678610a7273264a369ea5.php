<?php /*%%SmartyHeaderCode:188154a6ecd28c97c6_40619620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '188154a6ecd28c97c6_40619620',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'variables' => 
  array (
    'foo' => 0,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd291c724_76780275',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd291c724_76780275')) {function content_54a6ecd291c724_76780275 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php } ?><?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>