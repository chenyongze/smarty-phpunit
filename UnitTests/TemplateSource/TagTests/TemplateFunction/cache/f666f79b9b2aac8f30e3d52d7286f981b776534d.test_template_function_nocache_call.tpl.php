<?php /*%%SmartyHeaderCode:2626454a6ecd459fef6_04594082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f666f79b9b2aac8f30e3d52d7286f981b776534d' => 
    array (
      0 => '.\\templates\\test_template_function_nocache_call.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
    'b2d1c3d5e130d0e0feaa5665de9463e2d787c601' => 
    array (
      0 => '.\\templates\\template_function_lib.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626454a6ecd459fef6_04594082',
  'tpl_function' => 
  array (
    'to_cache' => 
    array (
      'template_func1' => true,
    ),
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
  'type' => 'cache',
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd45efc55_81435211',
  'cache_lifetime' => 1000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd45efc55_81435211')) {function content_54a6ecd45efc55_81435211 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>

<?php $_smarty_tpl->callTemplateFunction ('template_func1', $_smarty_tpl, array(), true);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>