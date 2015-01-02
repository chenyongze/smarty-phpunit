<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:08
         compiled from ".\templates\template_function_lib.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1036354a6ecd44d1441_84808809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d1c3d5e130d0e0feaa5665de9463e2d787c601' => 
    array (
      0 => '.\\templates\\template_function_lib.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1036354a6ecd44d1441_84808809',
  'tpl_function' => 
  array (
    'param' => 
    array (
      'template_func1' => 
      array (
        'called_functions' => 
        array (
        ),
        'compiled_filepath' => '.\\templates_c\\b2d1c3d5e130d0e0feaa5665de9463e2d787c601.file.template_function_lib.tpl.cache.php',
        'uid' => 'b2d1c3d5e130d0e0feaa5665de9463e2d787c601',
        'call_name_caching' => 'smarty_template_function_template_func1_1036354a6ecd44d1441_84808809_nocache',
        'call_name' => 'smarty_template_function_template_func1_1036354a6ecd44d1441_84808809',
      ),
    ),
  ),
  'type' => 'compiled',
  'variables' => 
  array (
    'foo' => 1,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd44f13c8_97465801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd44f13c8_97465801')) {function content_54a6ecd44f13c8_97465801 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1036354a6ecd44d1441_84808809';
?>

<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?><?php
/* smarty_template_function_template_func1_1036354a6ecd44d1441_84808809_nocache */
if (!function_exists('smarty_template_function_template_func1_1036354a6ecd44d1441_84808809_nocache')) {
function smarty_template_function_template_func1_1036354a6ecd44d1441_84808809_nocache ($_smarty_tpl,$params) {
ob_start();
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);
}$params = var_export($params, true);
echo "/*%%SmartyNocache:1036354a6ecd44d1441_84808809%%*/<?php \$saved_tpl_vars = \$_smarty_tpl->tpl_vars;
foreach ($params as \$key => \$value) {
\$_smarty_tpl->tpl_vars[\$key] = new Smarty_variable(\$value);
}
?>/*/%%SmartyNocache:1036354a6ecd44d1441_84808809%%*/
";
echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo '/*%%SmartyNocache:1036354a6ecd44d1441_84808809%%*/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'foo\']->value, ENT_QUOTES, \'UTF-8\', true);?>
/*/%%SmartyNocache:1036354a6ecd44d1441_84808809%%*/';
echo "/*%%SmartyNocache:1036354a6ecd44d1441_84808809%%*/<?php \$_smarty_tpl->tpl_vars = \$saved_tpl_vars;
foreach (Smarty::\$global_tpl_vars as \$key => \$value) if(!isset(\$_smarty_tpl->tpl_vars[\$key])) \$_smarty_tpl->tpl_vars[\$key] = \$value;?>/*/%%SmartyNocache:1036354a6ecd44d1441_84808809%%*/";
?><?php echo str_replace('1036354a6ecd44d1441_84808809', $_smarty_tpl->properties['nocache_hash'], ob_get_clean());
}
}
/*/ smarty_template_function_template_func1_1036354a6ecd44d1441_84808809_nocache */
/* smarty_template_function_template_func1_1036354a6ecd44d1441_84808809 */
if (!function_exists('smarty_template_function_template_func1_1036354a6ecd44d1441_84808809')) {
function smarty_template_function_template_func1_1036354a6ecd44d1441_84808809($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true);
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;
}
}
/*/ smarty_template_function_template_func1_1036354a6ecd44d1441_84808809 */

?>
