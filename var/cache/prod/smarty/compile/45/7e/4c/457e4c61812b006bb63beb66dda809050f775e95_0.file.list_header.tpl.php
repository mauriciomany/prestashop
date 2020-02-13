<?php
/* Smarty version 3.1.33, created on 2020-02-13 12:39:43
  from '/home/mc/bin/eclipse/eclipse-workspace/www/prestashop/admin3766qjphn/themes/default/template/controllers/tracking/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e456dbf77f495_58841707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457e4c61812b006bb63beb66dda809050f775e95' => 
    array (
      0 => '/home/mc/bin/eclipse/eclipse-workspace/www/prestashop/admin3766qjphn/themes/default/template/controllers/tracking/helpers/list/list_header.tpl',
      1 => 1581601469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e456dbf77f495_58841707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9728134355e456dbf7788f8_88796657', "preTable");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "preTable"} */
class Block_9728134355e456dbf7788f8_88796657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_9728134355e456dbf7788f8_88796657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['list_id']->value == 'empty_categories') {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
</div>
	<?php }
}
}
/* {/block "preTable"} */
}
