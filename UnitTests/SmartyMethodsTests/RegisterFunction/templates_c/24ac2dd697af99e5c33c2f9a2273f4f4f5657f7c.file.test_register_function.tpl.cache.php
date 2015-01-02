<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:03
         compiled from ".\templates\test_register_function.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298254a6eccf6e1249_70684921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ac2dd697af99e5c33c2f9a2273f4f4f5657f7c' => 
    array (
      0 => '.\\templates\\test_register_function.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298254a6eccf6e1249_70684921',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'x' => 0,
    'y' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6eccf6f1c03_18780586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6eccf6f1c03_18780586')) {function content_54a6eccf6f1c03_18780586 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '298254a6eccf6e1249_70684921';
echo '/*%%SmartyNocache:298254a6eccf6e1249_70684921%%*/<?php echo myfunction(array(\'value\'=>$_smarty_tpl->tpl_vars[\'x\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:298254a6eccf6e1249_70684921%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['y']->value;?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>