<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 21:35:17
         compiled from "C:\xampp\htdocs\ngoinhatoiyeu\modules\blockspecials\views\templates\hook\blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1235657067025b58841-32900753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f2d7cd1ac5f9e458f8c423e6256487fc09477e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ngoinhatoiyeu\\modules\\blockspecials\\views\\templates\\hook\\blockspecials-home.tpl',
      1 => 1458650578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1235657067025b58841-32900753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57067025b9aed9_74307424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57067025b9aed9_74307424')) {function content_57067025b9aed9_74307424($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
