<?php
/* Smarty version 3.1.33, created on 2019-12-25 15:47:47
  from 'C:\xampp\htdocs\BabyBunns\modules\ps_mbo\views\templates\admin\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e03142365ac95_53443274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7f6f38829a65b15449907b3e38b048794fe5941' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BabyBunns\\modules\\ps_mbo\\views\\templates\\admin\\theme.tpl',
      1 => 1577113092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e03142365ac95_53443274 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
