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
    'a4b09996b78f1b1e7af2f2117a8808880b943664' => 
    array (
      0 => '.\\templates\\test_nocache_tag_include.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343354a6ecd3a3e1b1_78377868',
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
    'bar' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd3ae81f9_91301583',
  'cache_lifetime' => 5,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd3ae81f9_91301583')) {function content_54a6ecd3ae81f9_91301583 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<br>root <?php echo $_smarty_tpl->tpl_vars['foo']->value+2;?>
A
<br>include <?php echo $_smarty_tpl->tpl_vars['foo']->value+4;?>
A<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>