<?php /* Smarty version Smarty-3.1.19, created on 2016-03-18 08:07:36
         compiled from "/home/mutiarau/public_html/presta/admin123/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73740358756eb54d86e7803-39378036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc558a901b165717ff94f917475bca2663b079ef' => 
    array (
      0 => '/home/mutiarau/public_html/presta/admin123/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73740358756eb54d86e7803-39378036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56eb54d86f0587_05676085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb54d86f0587_05676085')) {function content_56eb54d86f0587_05676085($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
