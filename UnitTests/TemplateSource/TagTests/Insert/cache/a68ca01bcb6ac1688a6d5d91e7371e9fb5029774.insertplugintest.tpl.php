<?php /*%%SmartyHeaderCode:581354a6ecd37dd3d7_05102719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68ca01bcb6ac1688a6d5d91e7371e9fb5029774' => 
    array (
      0 => '.\\templates\\insertplugintest.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581354a6ecd37dd3d7_05102719',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'variables' => 
  array (
    'foo' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd38319a3_44001647',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd38319a3_44001647')) {function content_54a6ecd38319a3_44001647 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_insert_insertplugintest')) include 'C:\\wamp\\www\\Smarty3.1-test-release\\vendor\\smarty\\smarty-phpunit\\UnitTests\\TemplateSource\\TagTests\\Insert/PHPunitplugins\\insert.insertplugintest.php';
?><?php echo smarty_insert_insertplugintest(array (
  'foo' => 'bar',
),$_smarty_tpl);?><?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>