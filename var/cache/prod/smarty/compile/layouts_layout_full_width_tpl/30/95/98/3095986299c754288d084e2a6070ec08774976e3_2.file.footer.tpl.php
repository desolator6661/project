<?php
/* Smarty version 3.1.33, created on 2019-12-25 20:37:01
  from 'C:\xampp\htdocs\BabyBunns\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0357ed6c5a32_39025611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3095986299c754288d084e2a6070ec08774976e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BabyBunns\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0357ed6c5a32_39025611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19818672095e0357ed6c1137_91815099', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_19818672095e0357ed6c1137_91815099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19818672095e0357ed6c1137_91815099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
