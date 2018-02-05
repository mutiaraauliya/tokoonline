<?php /* Smarty version Smarty-3.1.19, created on 2016-03-17 20:46:28
         compiled from "/home/mutiarau/public_html/presta/admin123/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102840855356eab534c92f10-36470973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa92315435f498a48fffbbbbecad679440377ff' => 
    array (
      0 => '/home/mutiarau/public_html/presta/admin123/themes/default/template/content.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102840855356eab534c92f10-36470973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56eab534c9b740_32024913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eab534c9b740_32024913')) {function content_56eab534c9b740_32024913($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
