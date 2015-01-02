<?php /*%%SmartyHeaderCode:2517554a6ecd148e648_99471888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e910375493c61ffa81f68c2db217d88c56a35dd8' => 
    array (
      0 => '.\\templates\\021_grandchild.tpl',
      1 => 1420225745,
      2 => 'file',
    ),
    '9dadb76e561d52673b400f87b15471be331b20cf' => 
    array (
      0 => '.\\templates\\021_child.tpl',
      1 => 1420225745,
      2 => 'file',
    ),
    '7c23e4563ca20b72f2b45ce0c4f3ec929d8084bc' => 
    array (
      0 => '.\\templates\\021_parent.tpl',
      1 => 1420225745,
      2 => 'file',
    ),
    'e1795778f5d70c39b8cd7ad7cca7a42f150993b0' => 
    array (
      0 => 'e1795778f5d70c39b8cd7ad7cca7a42f150993b0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2517554a6ecd148e648_99471888',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd1509a47_94955142',
  'cache_lifetime' => 1000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd1509a47_94955142')) {function content_54a6ecd1509a47_94955142 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
Grandchild Page Title
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>