<?php /*%%SmartyHeaderCode:110146303656eb71f8a25a86-92212515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a06e89de4211d5c2695459b67e733e60b924d8' => 
    array (
      0 => '/home/mutiarau/public_html/presta/themes/Dixio/modules/blocksearch/blocksearch-top.tpl',
      1 => 1458269509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110146303656eb71f8a25a86-92212515',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6c907f5bd8c5_82670115',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6c907f5bd8c5_82670115')) {function content_5a6c907f5bd8c5_82670115($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//presta.mutiarauliya.com/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
