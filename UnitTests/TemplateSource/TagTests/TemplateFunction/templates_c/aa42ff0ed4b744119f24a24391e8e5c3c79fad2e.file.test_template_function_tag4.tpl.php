<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_template_function_tag4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:529854a6ecd4192f42_48776342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa42ff0ed4b744119f24a24391e8e5c3c79fad2e' => 
    array (
      0 => '.\\templates\\test_template_function_tag4.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529854a6ecd4192f42_48776342',
  'tpl_function' => 
  array (
    'param' => 
    array (
      'functest4' => 
      array (
        'called_functions' => 
        array (
        ),
        'compiled_filepath' => '.\\templates_c\\aa42ff0ed4b744119f24a24391e8e5c3c79fad2e.file.test_template_function_tag4.tpl.php',
        'uid' => 'aa42ff0ed4b744119f24a24391e8e5c3c79fad2e',
        'call_name' => 'smarty_template_function_functest4_529854a6ecd4192f42_48776342',
      ),
    ),
    'to_cache' => 
    array (
      'functest4' => true,
    ),
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'loop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd41be927_15821199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd41be927_15821199')) {function content_54a6ecd41be927_15821199 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '529854a6ecd4192f42_48776342';
$_smarty_tpl->callTemplateFunction ('functest4', $_smarty_tpl, array(), true);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?><?php
/* smarty_template_function_functest4_529854a6ecd4192f42_48776342 */
if (!function_exists('smarty_template_function_functest4_529854a6ecd4192f42_48776342')) {
function smarty_template_function_functest4_529854a6ecd4192f42_48776342($_smarty_tpl,$params) {
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
/*/ smarty_template_function_functest4_529854a6ecd4192f42_48776342 */

?>
