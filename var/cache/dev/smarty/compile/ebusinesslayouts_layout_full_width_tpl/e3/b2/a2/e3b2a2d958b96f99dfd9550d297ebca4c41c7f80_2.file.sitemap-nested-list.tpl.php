<?php
/* Smarty version 4.3.4, created on 2025-05-03 23:15:26
  from '/var/www/html/themes/ebusiness/templates/cms/_partials/sitemap-nested-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6816bfaed53281_48197023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b2a2d958b96f99dfd9550d297ebca4c41c7f80' => 
    array (
      0 => '/var/www/html/themes/ebusiness/templates/cms/_partials/sitemap-nested-list.tpl',
      1 => 1743673724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cms/_partials/sitemap-nested-list.tpl' => 2,
  ),
),false)) {
function content_6816bfaed53281_48197023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17248197096816bfaed3e6e4_83601729', 'sitemap_item');
?>

<?php }
/* {block 'sitemap_item'} */
class Block_17248197096816bfaed3e6e4_83601729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sitemap_item' => 
  array (
    0 => 'Block_17248197096816bfaed3e6e4_83601729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <ul<?php if ((isset($_smarty_tpl->tpl_vars['is_nested']->value))) {?> class="nested"<?php }?>>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
      <li>
        <a class="san-g" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if ((isset($_smarty_tpl->tpl_vars['link']->value['children'])) && smarty_modifier_count($_smarty_tpl->tpl_vars['link']->value['children']) > 0) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['link']->value['children'],'is_nested'=>true), 0, true);
?>
        <?php }?>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
/* {/block 'sitemap_item'} */
}
