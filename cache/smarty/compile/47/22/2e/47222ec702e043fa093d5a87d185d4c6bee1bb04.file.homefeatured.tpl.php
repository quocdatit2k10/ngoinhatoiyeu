<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 21:35:17
         compiled from "C:\xampp\htdocs\ngoinhatoiyeu\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:664570670252442a3-27672198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47222ec702e043fa093d5a87d185d4c6bee1bb04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ngoinhatoiyeu\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1458649304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '664570670252442a3-27672198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5706702532aa51_86632051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5706702532aa51_86632051')) {function content_5706702532aa51_86632051($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
