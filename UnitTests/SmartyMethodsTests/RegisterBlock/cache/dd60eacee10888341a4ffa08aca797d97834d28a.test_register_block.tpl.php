<?php /*%%SmartyHeaderCode:2401654a6eccf485673_66868318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd60eacee10888341a4ffa08aca797d97834d28a' => 
    array (
      0 => '.\\templates\\test_register_block.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2401654a6eccf485673_66868318',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'variables' => 
  array (
    'x' => 0,
    'y' => 1,
    'z' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6eccf4df969_36087657',
  'cache_lifetime' => 10,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6eccf4df969_36087657')) {function content_54a6eccf4df969_36087657 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
3 <?php $_smarty_tpl->smarty->_tag_stack[] = array('testblock', array()); $_block_repeat=true; echo myblockcache(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo myblockcache(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 300<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>