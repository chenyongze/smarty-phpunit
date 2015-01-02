<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:31:55
         compiled from "e52106a101256f2f3e67b05cb2a18c17dd02f4c2" */ ?>
<?php
/*%%SmartyHeaderCode:250754a6739b42e854_57882016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '250754a6739b42e854_57882016',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'z' => 0,
    'x' => 0,
    'y' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a6739b449e93_62377142',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a6739b449e93_62377142')) {function content_54a6739b449e93_62377142 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '250754a6739b42e854_57882016';
ob_start();
if ($_smarty_tpl->tpl_vars['z']->value) {?><?php echo " ";?><?php echo (string)$_smarty_tpl->tpl_vars['x']->value;?><?php echo " ";?><?php } else { ?><?php echo (string)$_smarty_tpl->tpl_vars['y']->value;?><?php }
$_tmp10=ob_get_clean();?><?php echo "Hello".$_tmp10."World";?>
<?php }
}
?>