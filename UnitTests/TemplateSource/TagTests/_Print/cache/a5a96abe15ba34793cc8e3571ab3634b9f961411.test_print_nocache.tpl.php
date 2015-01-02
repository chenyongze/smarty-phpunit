<?php /*%%SmartyHeaderCode:2890154a6ecd480b139_39727717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5a96abe15ba34793cc8e3571ab3634b9f961411' => 
    array (
      0 => '.\\templates\\test_print_nocache.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2890154a6ecd480b139_39727717',
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
    'bar' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd4858fe9_99137589',
  'cache_lifetime' => 5,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd4858fe9_99137589')) {function content_54a6ecd4858fe9_99137589 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
A<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>