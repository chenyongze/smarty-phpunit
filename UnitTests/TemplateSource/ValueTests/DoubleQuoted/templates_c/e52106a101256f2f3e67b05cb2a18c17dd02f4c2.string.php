<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from "e52106a101256f2f3e67b05cb2a18c17dd02f4c2" */ ?>
<?php /*%%SmartyHeaderCode:1028054a6ecd4e2db40_18955645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52106a101256f2f3e67b05cb2a18c17dd02f4c2' => 
    array (
      0 => 'e52106a101256f2f3e67b05cb2a18c17dd02f4c2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1028054a6ecd4e2db40_18955645',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'z' => 0,
    'x' => 0,
    'y' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd4e4a067_89184729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd4e4a067_89184729')) {function content_54a6ecd4e4a067_89184729 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1028054a6ecd4e2db40_18955645';
ob_start();
if ($_smarty_tpl->tpl_vars['z']->value) {?><?php echo " ";?><?php echo (string)$_smarty_tpl->tpl_vars['x']->value;?><?php echo " ";?><?php } else { ?><?php echo (string)$_smarty_tpl->tpl_vars['y']->value;?><?php }
$_tmp10=ob_get_clean();?><?php echo "Hello".$_tmp10."World";?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>