<?php /*%%SmartyHeaderCode:3011654a6ecbb3d5f77_71217103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd17a29a0291ecf12854f50ba9351a1ae1bf2ccce' => 
    array (
      0 => '.\\templates\\helloworld.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3011654a6ecbb3d5f77_71217103',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecbb44c1f9_25874054',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecbb44c1f9_25874054')) {function content_54a6ecbb44c1f9_25874054 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
hello world<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>