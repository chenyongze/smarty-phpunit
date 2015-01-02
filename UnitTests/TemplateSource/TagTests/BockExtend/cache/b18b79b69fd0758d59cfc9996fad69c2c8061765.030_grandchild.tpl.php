<?php /*%%SmartyHeaderCode:1145054a6ecd1712914_64995787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18b79b69fd0758d59cfc9996fad69c2c8061765' => 
    array (
      0 => '.\\templates\\030_grandchild.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
    '7481cb9d13fcf9767ae86036b7a5b97c60880227' => 
    array (
      0 => '.\\templates\\030_child.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
    'f0c9e7c3e769cc4a8c4640c1e0b86e3cc3281505' => 
    array (
      0 => '.\\templates\\030_parent.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
    '0df4852331fba45a4fda3de624ca274c1b6169f5' => 
    array (
      0 => '0df4852331fba45a4fda3de624ca274c1b6169f5',
      1 => 0,
      2 => 'string',
    ),
    '10f3f466425cb4181963848a9e418b4045352293' => 
    array (
      0 => '10f3f466425cb4181963848a9e418b4045352293',
      1 => 0,
      2 => 'string',
    ),
    'e519b2fc9332b3c8a6c8c2b99e0e5cec5d118456' => 
    array (
      0 => 'e519b2fc9332b3c8a6c8c2b99e0e5cec5d118456',
      1 => 0,
      2 => 'string',
    ),
    '242f183492abbe1638abc7d17efba4ff2b290cee' => 
    array (
      0 => '242f183492abbe1638abc7d17efba4ff2b290cee',
      1 => 0,
      2 => 'string',
    ),
    '27f10683373cf84805adccce31fdda1d25f71a49' => 
    array (
      0 => '27f10683373cf84805adccce31fdda1d25f71a49',
      1 => 0,
      2 => 'string',
    ),
    'e3d51ce771f9603ab5a756ad4d6a71b9be1b3dcf' => 
    array (
      0 => 'e3d51ce771f9603ab5a756ad4d6a71b9be1b3dcf',
      1 => 0,
      2 => 'string',
    ),
    'dcd48982270c28fb15a3dc9f2f40a7b212e7dd7a' => 
    array (
      0 => 'dcd48982270c28fb15a3dc9f2f40a7b212e7dd7a',
      1 => 0,
      2 => 'string',
    ),
    '5c1188c5615ad50817bf9a4e71fafb17c28d29bd' => 
    array (
      0 => '.\\templates\\030_include_2.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
    'cb5fc8861c8505696cc0f69d03e0001b273151b9' => 
    array (
      0 => 'cb5fc8861c8505696cc0f69d03e0001b273151b9',
      1 => 0,
      2 => 'string',
    ),
    '3feaeabbb9e191e4e0c271e63b90bff1cc64e67c' => 
    array (
      0 => '.\\templates\\030_include.tpl',
      1 => 1420216284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145054a6ecd1712914_64995787',
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
  'unifunc' => 'content_54a6ecd19faa58_48709714',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a6ecd19faa58_48709714')) {function content_54a6ecd19faa58_48709714 ($_smarty_tpl) {
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