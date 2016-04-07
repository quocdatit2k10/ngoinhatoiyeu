<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 21:36:13
         compiled from "C:\xampp\htdocs\ngoinhatoiyeu\admin658p1mmhw\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162445706705d7daba0-46703697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc285261a0d024bf037be898069352b74da6feff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ngoinhatoiyeu\\admin658p1mmhw\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1448528998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162445706705d7daba0-46703697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5706705d7dea27_66949121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5706705d7dea27_66949121')) {function content_5706705d7dea27_66949121($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
