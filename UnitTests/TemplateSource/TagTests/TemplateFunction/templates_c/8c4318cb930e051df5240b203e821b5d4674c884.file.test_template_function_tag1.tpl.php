<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_template_function_tag1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10354a6ecd40315b6_53199426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4318cb930e051df5240b203e821b5d4674c884' => 
    array (
      0 => '.\\templates\\test_template_function_tag1.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10354a6ecd40315b6_53199426',
  'tpl_function' => 
  array (
    'param' => 
    array (
      'functest' => 
      array (
        'called_functions' => 
        array (
        ),
        'compiled_filepath' => '.\\templates_c\\8c4318cb930e051df5240b203e821b5d4674c884.file.test_template_function_tag1.tpl.php',
        'uid' => '8c4318cb930e051df5240b203e821b5d4674c884',
        'call_name' => 'smarty_template_function_functest_10354a6ecd40315b6_53199426',
      ),
    ),
    'to_cache' => 
    array (
      'functest' => true,
    ),
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'default' => 0,
    'param' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd40535e4_94276922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd40535e4_94276922')) {function content_54a6ecd40535e4_94276922 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '10354a6ecd40315b6_53199426';
$_smarty_tpl->callTemplateFunction ('functest', $_smarty_tpl, array('param'=>'param'), true);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?><?php
/* smarty_template_function_functest_10354a6ecd40315b6_53199426 */
if (!function_exists('smarty_template_function_functest_10354a6ecd40315b6_53199426')) {
function smarty_template_function_functest_10354a6ecd40315b6_53199426($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('default'=>'default'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);
}
echo $_smarty_tpl->tpl_vars['default']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['param']->value;
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;
}
}
/*/ smarty_template_function_functest_10354a6ecd40315b6_53199426 */

?>
