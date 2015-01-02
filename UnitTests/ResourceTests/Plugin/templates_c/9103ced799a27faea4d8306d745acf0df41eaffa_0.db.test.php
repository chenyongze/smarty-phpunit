<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:31:39
         compiled from "db:test" */ ?>
<?php
/*%%SmartyHeaderCode:2529354a6738b634631_97165579%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9103ced799a27faea4d8306d745acf0df41eaffa' => 
    array (
      0 => 'db:test',
      1 => 1420194600,
      2 => 'db',
    ),
  ),
  'nocache_hash' => '2529354a6738b634631_97165579',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a6738b641183_83924393',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a6738b641183_83924393')) {function content_54a6738b641183_83924393 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2529354a6738b634631_97165579';
$_smarty_tpl->tpl_vars['x'] = new Smarty_variable("hello world", null, 0);
echo $_smarty_tpl->tpl_vars['x']->value;?>
<?php }
}
?>