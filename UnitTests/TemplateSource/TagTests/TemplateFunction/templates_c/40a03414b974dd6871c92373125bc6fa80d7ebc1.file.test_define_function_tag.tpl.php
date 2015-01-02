<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\test_define_function_tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1894254a6ecd4330c86_04641365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a03414b974dd6871c92373125bc6fa80d7ebc1' => 
    array (
      0 => '.\\templates\\test_define_function_tag.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894254a6ecd4330c86_04641365',
  'tpl_function' => 
  array (
    'param' => 
    array (
      'functest6i' => 
      array (
        'called_functions' => 
        array (
        ),
        'compiled_filepath' => '.\\templates_c\\40a03414b974dd6871c92373125bc6fa80d7ebc1.file.test_define_function_tag.tpl.php',
        'uid' => '40a03414b974dd6871c92373125bc6fa80d7ebc1',
        'call_name' => 'smarty_template_function_functest6i_1894254a6ecd4330c86_04641365',
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
  'unifunc' => 'content_54a6ecd4357d93_84133301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd4357d93_84133301')) {function content_54a6ecd4357d93_84133301 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1894254a6ecd4330c86_04641365';
?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?><?php
/* smarty_template_function_functest6i_1894254a6ecd4330c86_04641365 */
if (!function_exists('smarty_template_function_functest6i_1894254a6ecd4330c86_04641365')) {
function smarty_template_function_functest6i_1894254a6ecd4330c86_04641365($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('loop'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);
}
echo $_smarty_tpl->tpl_vars['loop']->value;
if ($_smarty_tpl->tpl_vars['loop']->value<5) {
$_smarty_tpl->callTemplateFunction ('functest6i', $_smarty_tpl, array('loop'=>$_smarty_tpl->tpl_vars['loop']->value+1), false);
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;
}
}
/*/ smarty_template_function_functest6i_1894254a6ecd4330c86_04641365 */

?>
