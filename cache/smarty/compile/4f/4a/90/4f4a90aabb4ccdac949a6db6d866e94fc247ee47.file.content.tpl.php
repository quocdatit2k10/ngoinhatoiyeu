<?php /* Smarty version Smarty-3.1.19, created on 2016-03-28 14:25:41
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38356f922c5b56611-39410544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4a90aabb4ccdac949a6db6d866e94fc247ee47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1452066628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38356f922c5b56611-39410544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f922c5b94e27_13145783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f922c5b94e27_13145783')) {function content_56f922c5b94e27_13145783($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
