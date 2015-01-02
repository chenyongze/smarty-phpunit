<?php /*%%SmartyHeaderCode:1647054a6ecd5e1db91_35665846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '035322ee51499537f2b02e81bd2642ae38bcfe48' => 
    array (
      0 => '.\\templates\\xml.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647054a6ecd5e1db91_35665846',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd5e65e81_57176975',
  'cache_lifetime' => 1000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd5e65e81_57176975')) {function content_54a6ecd5e65e81_57176975 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>