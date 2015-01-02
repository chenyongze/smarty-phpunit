<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:31:55
         compiled from "322cbd1cfa4c7ce3b95e29e4f97866b9a9b19577" */ ?>
<?php
/*%%SmartyHeaderCode:1116954a6739b99c129_50948726%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '322cbd1cfa4c7ce3b95e29e4f97866b9a9b19577' => 
    array (
      0 => '322cbd1cfa4c7ce3b95e29e4f97866b9a9b19577',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1116954a6739b99c129_50948726',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a6739b9aada3_82604140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a6739b9aada3_82604140')) {function content_54a6739b9aada3_82604140 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1116954a6739b99c129_50948726';
$_smarty_tpl->tpl_vars['p'] = new Smarty_variable('hello', null, 0);
echo $_smarty_tpl->tpl_vars['object']->value->{$_smarty_tpl->tpl_vars['p']->value};?>
<?php }
}
?>