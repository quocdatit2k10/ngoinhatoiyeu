<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 21:37:03
         compiled from "C:\xampp\htdocs\ngoinhatoiyeu\admin658p1mmhw\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320145706708fc470e1-41202075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3600490eb4d20c8854627722f69847409ef711b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ngoinhatoiyeu\\admin658p1mmhw\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1448528998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320145706708fc470e1-41202075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5706708fc6a362_81038373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5706708fc6a362_81038373')) {function content_5706708fc6a362_81038373($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
