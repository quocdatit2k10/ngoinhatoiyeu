<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 21:35:15
         compiled from "C:\xampp\htdocs\ngoinhatoiyeu\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2492757067023bc18b3-38675383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4fe125af51ad00e2d647318de855712ac43f3c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ngoinhatoiyeu\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1459043414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2492757067023bc18b3-38675383',
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
  'unifunc' => 'content_57067023be89b9_70507752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57067023be89b9_70507752')) {function content_57067023be89b9_70507752($_smarty_tpl) {?>
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
