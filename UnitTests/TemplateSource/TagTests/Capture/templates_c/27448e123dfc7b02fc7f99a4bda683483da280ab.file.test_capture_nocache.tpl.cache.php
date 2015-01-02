<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:05
         compiled from ".\templates\test_capture_nocache.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2733054a6ecd1bf7233_80398953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27448e123dfc7b02fc7f99a4bda683483da280ab' => 
    array (
      0 => '.\\templates\\test_capture_nocache.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2733054a6ecd1bf7233_80398953',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 1,
    'bar' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd1c0fdb4_85228777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd1c0fdb4_85228777')) {function content_54a6ecd1c0fdb4_85228777 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2733054a6ecd1bf7233_80398953';
echo '/*%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/<?php $_smarty_tpl->_capture_stack[0][] = array(\'default\', \'bar\', null); ob_start(); ?>/*/%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/';?>
foo <?php echo '/*%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/<?php echo $_smarty_tpl->tpl_vars[\'foo\']->value;?>
/*/%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/';
echo '/*%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars[\'capture\'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>/*/%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/';?>

<?php echo '/*%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/<?php echo $_smarty_tpl->tpl_vars[\'bar\']->value;?>
/*/%%SmartyNocache:2733054a6ecd1bf7233_80398953%%*/';?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>