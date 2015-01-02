<?php /* Smarty version 3.1.22-dev/3, created on 2015-01-02 20:09:04
         compiled from ".\templates\blockplugintest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1807154a6ecd01eaa85_29000362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baa0fb64d106fc1c298d7b8b6c4b494a23f99343' => 
    array (
      0 => '.\\templates\\blockplugintest.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1807154a6ecd01eaa85_29000362',
  'tpl_function' => 
  array (
  ),
  'type' => 'compiled',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecd01f56d8_87865273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd01f56d8_87865273')) {function content_54a6ecd01f56d8_87865273 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
<?php if (!is_callable('smarty_block_textformat')) include 'C:\\wamp\\www\\Smarty3.1-test-release\\vendor\\smarty\\smarty\\libs\\plugins\\block.textformat.php';
?><?php
$_smarty_tpl->properties['nocache_hash'] = '1807154a6ecd01eaa85_29000362';
$_smarty_tpl->smarty->_tag_stack[] = array('textformat', array()); $_block_repeat=true; echo smarty_block_textformat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
abc<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textformat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>