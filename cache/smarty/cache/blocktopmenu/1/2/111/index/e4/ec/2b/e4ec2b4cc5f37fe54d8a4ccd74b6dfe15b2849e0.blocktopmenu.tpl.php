<?php /*%%SmartyHeaderCode:123124461356eb71f92f0a80-69117152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ec2b4cc5f37fe54d8a4ccd74b6dfe15b2849e0' => 
    array (
      0 => '/home/mutiarau/public_html/presta/themes/Dixio/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1458269509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123124461356eb71f92f0a80-69117152',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6c907f6e92e8_92562997',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6c907f6e92e8_92562997')) {function content_5a6c907f6e92e8_92562997($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Menu</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://presta.mutiarauliya.com/index.php?id_category=3&amp;controller=category&amp;id_lang=1" title="Laptop">Laptop</a></li><li><a href="http://presta.mutiarauliya.com/index.php?id_category=12&amp;controller=category&amp;id_lang=1" title="Handphone">Handphone</a></li><li><a href="http://presta.mutiarauliya.com/index.php?id_category=13&amp;controller=category&amp;id_lang=1" title="Aksesoris">Aksesoris</a></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://presta.mutiarauliya.com/index.php?controller=search" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
