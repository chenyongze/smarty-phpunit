<?php /*%%SmartyHeaderCode:2479954a6ecc1b5b8b4_05475112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f8483c9fe8c7d5d5325c4d43f2fe04b32de9479' => 
    array (
      0 => '.\\templates\\030_grandchild.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
    '1741feb2d1966c9729dda89939b55602cc632030' => 
    array (
      0 => '.\\templates\\030_child.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
    '60a1fadd6b5ed98bbfcf0ced24297df14bc5b835' => 
    array (
      0 => '.\\templates\\030_parent.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
    'bb14529769288333fdbf1bb247f049f22c0481aa' => 
    array (
      0 => 'bb14529769288333fdbf1bb247f049f22c0481aa',
      1 => 0,
      2 => 'string',
    ),
    '010d4323ff4c837de017b475c84cb79afd20e1c3' => 
    array (
      0 => '010d4323ff4c837de017b475c84cb79afd20e1c3',
      1 => 0,
      2 => 'string',
    ),
    '0da8c493bcf2e80b6862b40142d391bf5a592ab1' => 
    array (
      0 => '0da8c493bcf2e80b6862b40142d391bf5a592ab1',
      1 => 0,
      2 => 'string',
    ),
    '7aa5d654fdd101e5ab7077efaf4afe6a4554d877' => 
    array (
      0 => '7aa5d654fdd101e5ab7077efaf4afe6a4554d877',
      1 => 0,
      2 => 'string',
    ),
    'dd1e57e08599344b1ae1430b13f4b171d99150e3' => 
    array (
      0 => 'dd1e57e08599344b1ae1430b13f4b171d99150e3',
      1 => 0,
      2 => 'string',
    ),
    'bc9207290324450f24d499555bcabb1f8383b50a' => 
    array (
      0 => 'bc9207290324450f24d499555bcabb1f8383b50a',
      1 => 0,
      2 => 'string',
    ),
    'f0e3832581760663a31bd9012dbd8f7b4bae49ad' => 
    array (
      0 => 'f0e3832581760663a31bd9012dbd8f7b4bae49ad',
      1 => 0,
      2 => 'string',
    ),
    '0528d322bf6c6c0a057bdc99db241b765997d79d' => 
    array (
      0 => '.\\templates\\030_include_2.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
    'a0459058f9e150d3a2168900885ba69f2fb889ab' => 
    array (
      0 => 'a0459058f9e150d3a2168900885ba69f2fb889ab',
      1 => 0,
      2 => 'string',
    ),
    '172b9af65e1d9a3c1ba1ff6ee2c259ebcfda0958' => 
    array (
      0 => '.\\templates\\030_include.tpl',
      1 => 1420216283,
      2 => 'file',
    ),
    'f217e2f1efd9e46122b3ed1661cacc9c53724ba8' => 
    array (
      0 => '.\\templates\\030_grandchild.tpl',
      1 => 1420216283,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '2479954a6ecc1b5b8b4_05475112',
  'tpl_function' => 
  array (
    'param' => 
    array (
    ),
  ),
  'type' => 'cache',
  'variables' => 
  array (
    'b1' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.22-dev/3',
  'unifunc' => 'content_54a6ecc1e51433_41836900',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecc1e51433_41836900')) {function content_54a6ecc1e51433_41836900 ($_smarty_tpl) {
$_saved_type = $_smarty_tpl->properties['type'];
$_smarty_tpl->properties['type'] = $_smarty_tpl->caching ? 'cache' : 'compiled';?>
parent b1 <?php echo $_smarty_tpl->tpl_vars['b1']->value;?>
*parent b2*grandchild b3 <?php echo $_smarty_tpl->tpl_vars['b3']->value;?>
*include b3 <?php echo $_smarty_tpl->getSubTemplate ('030_include.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br>child b4 b4_1*grandchild b4 <?php echo $_smarty_tpl->tpl_vars['b4']->value;?>
**<br>child b5 <?php echo $_smarty_tpl->tpl_vars['b5']->value;?>
*grandchild b5 <?php echo $_smarty_tpl->tpl_vars['b5']->value;?>
**<br>child b61 b6_1*include 61 b6_1*grandchild b6 b6_1*<br>child b62 <?php echo $_smarty_tpl->tpl_vars['b6']->value;?>
*include 62 <?php echo $_smarty_tpl->getSubTemplate ('030_include.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br>child b63 b6_1*grandchild b6 <?php echo $_smarty_tpl->tpl_vars['b6']->value;?>
*<br>child b64 b6_1*include b64 <?php echo $_smarty_tpl->getSubTemplate ('030_include.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br>parent include <?php echo $_smarty_tpl->getSubTemplate ('030_include.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br>parent include2 grandchild b6 <?php echo $_smarty_tpl->tpl_vars['b6']->value;?>
*<br><br><?php $_smarty_tpl->properties['type'] = $_saved_type;?>
<?php }
}
?>