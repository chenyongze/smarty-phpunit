<?php /*%%SmartyHeaderCode:%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff15ff83776840b500e560cbfcb04a7c55dbd3b3' => 
    array (
      0 => '.\\templates\\phphelloworld.php',
      1 => 1420225733,
      2 => 'php',
    ),
  ),
  'nocache_hash' => '',
  'tpl_function' => 
  array (
  ),
  'type' => 'cache',
  'has_nocache_code' => false,
  'cache_lifetime' => 1000,
  'unifunc' => 'content_54a6ecc6091e50_18532699',
  'version' => '3.1.22-dev/3',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecc6091e50_18532699')) {function content_54a6ecc6091e50_18532699 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
php hello world
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>