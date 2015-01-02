<?php /* Smarty version 3.1.22-dev/5, created on 2015-01-02 11:49:00
         compiled from "./configs/test.conf" */ ?>
<?php
/*%%SmartyHeaderCode:%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '',
  'tpl_function' => 
  array (
  ),
  'f_d' => 
  array (
    '64a41c49daf148a52fde2bc3d910be8a01bf007f' => 
    array (
      0 => 'test.conf',
      1 => 1418789704,
      2 => 'file',
    ),
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a6779c219940_67390522',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a6779c219940_67390522')) {function content_54a6779c219940_67390522 ($_smarty_tpl) {
?>
<?php Smarty_Internal_Extension_Config::loadConfigVars($_smarty_tpl, array (
  'sections' => 
  array (
    '/' => 
    array (
      'vars' => 
      array (
        'sec' => 'special char',
      ),
    ),
    'foo/bar' => 
    array (
      'vars' => 
      array (
        'sec' => 'section foo/bar',
      ),
    ),
    'section1' => 
    array (
      'vars' => 
      array (
        'sec1' => 'Hello Section1',
      ),
    ),
    'section2' => 
    array (
      'vars' => 
      array (
        'sec2' => 'Hello Section2',
      ),
    ),
  ),
  'vars' => 
  array (
    'title' => 'Welcome to Smarty!',
    'overwrite' => 
    array (
      0 => 'Overwrite1',
      1 => 'Overwrite2',
    ),
    'booleanon' => true,
    'Intro' => 'This is a value that spans more
           than one line. you must enclose
           it in triple quotes.',
    'Number' => 123.40000000000001,
    'text' => '123bvc',
    'line' => '123 This is a line',
    'sec1' => 'Global Section1',
    'sec2' => 'Global Section2',
    'sec' => 'Global char',
  ),
)); ?><?php }
}
?>