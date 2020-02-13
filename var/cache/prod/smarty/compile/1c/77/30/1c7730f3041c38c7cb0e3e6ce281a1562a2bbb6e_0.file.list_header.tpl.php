<?php
/* Smarty version 3.1.33, created on 2020-02-13 12:39:44
  from '/home/mc/bin/eclipse/eclipse-workspace/www/prestashop/admin3766qjphn/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e456dc0dcbbc3_74099289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c7730f3041c38c7cb0e3e6ce281a1562a2bbb6e' => 
    array (
      0 => '/home/mc/bin/eclipse/eclipse-workspace/www/prestashop/admin3766qjphn/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1581601469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e456dc0dcbbc3_74099289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19473491795e456dc0dcb078_78236982', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_19473491795e456dc0dcb078_78236982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_19473491795e456dc0dcb078_78236982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
