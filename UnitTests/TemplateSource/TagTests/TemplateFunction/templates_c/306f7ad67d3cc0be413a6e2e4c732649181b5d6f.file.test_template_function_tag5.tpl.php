<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_template_function_tag5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1536354a6ecd4218812_03148381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306f7ad67d3cc0be413a6e2e4c732649181b5d6f' => 
    array (
      0 => '.\\templates\\test_template_function_tag5.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1536354a6ecd4218812_03148381',
  'tpl_function' => 
  array (
    'param' => 
    array (
      'functest4' => 
      array (
        'called_functions' => 
        array (
        ),
        'compiled_filepath' => '.\\templates_c\\306f7ad67d3cc0be413a6e2e4c732649181b5d6f.file.test_template_function_tag5.tpl.php',
        'uid' => '306f7ad67d3cc0be413a6e2e4c732649181b5d6f',
        'call_name' => 'smarty_template_function_functest4_1536354a6ecd4218812_03148381',
      ),
    ),
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'loop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd4244c62_26189233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd4244c62_26189233')) {function content_54a6ecd4244c62_26189233 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1536354a6ecd4218812_03148381';
echo $_smarty_tpl->getSubTemplate ('test_inherit_function_tag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?><?php
/* smarty_template_function_functest4_1536354a6ecd4218812_03148381 */
if (!function_exists('smarty_template_function_functest4_1536354a6ecd4218812_03148381')) {
function smarty_template_function_functest4_1536354a6ecd4218812_03148381($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('loop'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);
}
echo $_smarty_tpl->tpl_vars['loop']->value;
if ($_smarty_tpl->tpl_vars['loop']->value<5) {
$_smarty_tpl->callTemplateFunction ('functest4', $_smarty_tpl, array('loop'=>$_smarty_tpl->tpl_vars['loop']->value+1), false);
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;
}
}
/*/ smarty_template_function_functest4_1536354a6ecd4218812_03148381 */

?>
