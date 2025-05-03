<?php
/* Smarty version 4.3.4, created on 2025-05-03 18:52:11
  from '/var/www/html/admin405z76zapfotqq1xd0t/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681681fb4f08c7_49928576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9a7452417fe3313ee699480945736c8ccef370d' => 
    array (
      0 => '/var/www/html/admin405z76zapfotqq1xd0t/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1718360660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681681fb4f08c7_49928576 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
