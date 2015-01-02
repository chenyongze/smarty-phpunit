<?php
/*%%SmartyHeaderCode:996454a673983b19b0_80449862%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66c2732c8d1fdaf5c5b2ca894e701344e866a43' => 
    array (
      0 => 'a66c2732c8d1fdaf5c5b2ca894e701344e866a43',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '996454a673983b19b0_80449862',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'variables' => 
  array (
    'foo' => 1,
    'x' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/5',
  'unifunc' => 'content_54a6739840e6e0_23354811',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54a6739840e6e0_23354811')) {function content_54a6739840e6e0_23354811 ($_smarty_tpl) {
?>
<?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['foo']->value) : $_smarty_tpl->tpl_vars['foo']->value-(5)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['foo']->value, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
 <?php }} ?><?php }
}
?>