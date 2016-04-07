<?php /* Smarty version Smarty-3.1.19, created on 2016-04-02 09:04:55
         compiled from "/home/ngoinhat/public_html/modules/blockcmsinfo/blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191993415256ff28c7509c37-20124954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1603460255a2ab0c425655412fb6e32b188c6ac8' => 
    array (
      0 => '/home/ngoinhat/public_html/modules/blockcmsinfo/blockcmsinfo.tpl',
      1 => 1459050613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191993415256ff28c7509c37-20124954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ff28c7587f66_12748543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ff28c7587f66_12748543')) {function content_56ff28c7587f66_12748543($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
		<script type="text/javascript">
		$(document).ready(function() {
	        var src = "skype:ngoinhatoiyeu?chat";
	        var a = $("<a/>").attr("href", src);
	        $("#aSkype").wrap(a);
		});
		</script>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
