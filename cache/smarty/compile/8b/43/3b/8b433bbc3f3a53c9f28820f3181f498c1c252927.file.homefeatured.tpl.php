<?php /* Smarty version Smarty-3.1.19, created on 2016-04-02 09:04:55
         compiled from "/home/ngoinhat/public_html/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99202965356ff28c7c7a9c6-95054215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b433bbc3f3a53c9f28820f3181f498c1c252927' => 
    array (
      0 => '/home/ngoinhat/public_html/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1458656503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99202965356ff28c7c7a9c6-95054215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ff28c7dfa4f1_34411083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ff28c7dfa4f1_34411083')) {function content_56ff28c7dfa4f1_34411083($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
