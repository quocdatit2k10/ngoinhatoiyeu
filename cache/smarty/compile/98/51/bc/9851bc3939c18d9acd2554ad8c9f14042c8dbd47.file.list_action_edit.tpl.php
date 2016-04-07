<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 21:37:03
         compiled from "C:\xampp\htdocs\ngoinhatoiyeu\admin658p1mmhw\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222815706708fb741b0-62572675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9851bc3939c18d9acd2554ad8c9f14042c8dbd47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ngoinhatoiyeu\\admin658p1mmhw\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1448528998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222815706708fb741b0-62572675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5706708fc376e8_07932643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5706708fc376e8_07932643')) {function content_5706708fc376e8_07932643($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
