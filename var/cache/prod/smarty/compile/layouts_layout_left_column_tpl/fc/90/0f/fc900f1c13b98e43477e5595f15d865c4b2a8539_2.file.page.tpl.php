<?php
/* Smarty version 3.1.33, created on 2020-02-13 12:35:25
  from '/home/mc/bin/eclipse/eclipse-workspace/www/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e456cbd540d84_00116237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc900f1c13b98e43477e5595f15d865c4b2a8539' => 
    array (
      0 => '/home/mc/bin/eclipse/eclipse-workspace/www/prestashop/themes/classic/templates/page.tpl',
      1 => 1581601466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e456cbd540d84_00116237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10995680075e456cbd53d0f4_19352303', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19834648745e456cbd53db99_11630083 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_18705207295e456cbd53d606_43957501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19834648745e456cbd53db99_11630083', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9734944255e456cbd53f194_88165963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11733074725e456cbd53f775_49217220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7832585995e456cbd53ec83_17960416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9734944255e456cbd53f194_88165963', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11733074725e456cbd53f775_49217220', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8021406415e456cbd5403c0_26833353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13345971595e456cbd53fff8_14924792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8021406415e456cbd5403c0_26833353', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10995680075e456cbd53d0f4_19352303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10995680075e456cbd53d0f4_19352303',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18705207295e456cbd53d606_43957501',
  ),
  'page_title' => 
  array (
    0 => 'Block_19834648745e456cbd53db99_11630083',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7832585995e456cbd53ec83_17960416',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9734944255e456cbd53f194_88165963',
  ),
  'page_content' => 
  array (
    0 => 'Block_11733074725e456cbd53f775_49217220',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13345971595e456cbd53fff8_14924792',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8021406415e456cbd5403c0_26833353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18705207295e456cbd53d606_43957501', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7832585995e456cbd53ec83_17960416', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13345971595e456cbd53fff8_14924792', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
