<?php /* Smarty version Smarty-3.1.19, created on 2016-03-18 10:11:54
         compiled from "/home/mutiarau/public_html/presta/themes/Dixio/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149172943956eb71fa169370-12615199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b434c88a23cec77aa90ccd93cd3f9ad6cf6b68e7' => 
    array (
      0 => '/home/mutiarau/public_html/presta/themes/Dixio/modules/homefeatured/homefeatured.tpl',
      1 => 1458269509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149172943956eb71fa169370-12615199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56eb71fa1815c2_17657165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb71fa1815c2_17657165')) {function content_56eb71fa1815c2_17657165($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
