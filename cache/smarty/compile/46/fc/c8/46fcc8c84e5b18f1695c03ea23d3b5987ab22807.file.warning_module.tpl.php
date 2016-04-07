<?php /* Smarty version Smarty-3.1.19, created on 2016-04-02 09:33:38
         compiled from "/home/ngoinhat/public_html/admin658p1mmhw/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145496601456ff2f827d06c5-42133193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46fcc8c84e5b18f1695c03ea23d3b5987ab22807' => 
    array (
      0 => '/home/ngoinhat/public_html/admin658p1mmhw/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1448536198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145496601456ff2f827d06c5-42133193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ff2f827f4e50_88837427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ff2f827f4e50_88837427')) {function content_56ff2f827f4e50_88837427($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
