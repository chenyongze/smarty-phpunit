<?php /*%%SmartyHeaderCode:283554a6ecc62ffea3_38830909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647cc67112410df246da12386c05d0ef094a40d8' => 
    array (
      0 => 'mysqltest:test.tpl',
      1 => 1293310800,
      2 => 'mysqltest',
    ),
  ),
  'nocache_hash' => '283554a6ecc62ffea3_38830909',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'variables' => 
  array (
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecc6348ea2_11105776',
  'cache_lifetime' => 1000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecc6348ea2_11105776')) {function content_54a6ecc6348ea2_11105776 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
hello world<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>