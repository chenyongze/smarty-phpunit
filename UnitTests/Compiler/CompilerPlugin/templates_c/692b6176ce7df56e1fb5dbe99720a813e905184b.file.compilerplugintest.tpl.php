<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:08:46
         compiled from ".\templates\compilerplugintest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3245054a6ecbedaf491_06653215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692b6176ce7df56e1fb5dbe99720a813e905184b' => 
    array (
      0 => '.\\templates\\compilerplugintest.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245054a6ecbedaf491_06653215',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecbedb72c3_50250801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecbedb72c3_50250801')) {function content_54a6ecbedb72c3_50250801 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3245054a6ecbedaf491_06653215';
echo 'Hello World';?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>