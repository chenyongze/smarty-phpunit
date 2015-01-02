<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:07
         compiled from ".\templates\test_nocache_tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:343354a6ecd3a3e1b1_78377868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa60d7dce7319f93d3a2c0560f1da5e422fb1b03' => 
    array (
      0 => '.\\templates\\test_nocache_tag.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343354a6ecd3a3e1b1_78377868',
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
  'unifunc' => 'content_54a6ecd3a583a4_92780161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd3a583a4_92780161')) {function content_54a6ecd3a583a4_92780161 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '343354a6ecd3a3e1b1_78377868';
?>
<br>root <?php echo '/*%%SmartyNocache:343354a6ecd3a3e1b1_78377868%%*/<?php echo $_smarty_tpl->tpl_vars[\'foo\']->value+2;?>
/*/%%SmartyNocache:343354a6ecd3a3e1b1_78377868%%*/';
echo $_smarty_tpl->tpl_vars['bar']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ('test_nocache_tag_include.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>