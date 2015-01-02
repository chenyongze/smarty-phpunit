<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:09
         compiled from "8c113c3043de3563b9a6503f4d8ee650ce47416f" */ ?>
<?php /*%%SmartyHeaderCode:2529854a6ecd55c2795_80335754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c113c3043de3563b9a6503f4d8ee650ce47416f' => 
    array (
      0 => '8c113c3043de3563b9a6503f4d8ee650ce47416f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2529854a6ecd55c2795_80335754',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd55d1206_34453293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd55d1206_34453293')) {function content_54a6ecd55d1206_34453293 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2529854a6ecd55c2795_80335754';
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['object']->value->hello)."_test.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>