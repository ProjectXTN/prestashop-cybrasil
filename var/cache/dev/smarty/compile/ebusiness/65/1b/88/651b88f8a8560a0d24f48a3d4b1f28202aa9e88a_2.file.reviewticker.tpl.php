<?php
/* Smarty version 4.3.4, created on 2025-05-04 00:20:01
  from '/var/www/html/modules/ets_reviewticker/views/templates/hook/reviewticker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6816ced1aa0233_26044826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '651b88f8a8560a0d24f48a3d4b1f28202aa9e88a' => 
    array (
      0 => '/var/www/html/modules/ets_reviewticker/views/templates/hook/reviewticker.tpl',
      1 => 1746127816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6816ced1aa0233_26044826 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['assigns']->value)) && $_smarty_tpl->tpl_vars['assigns']->value) {
echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigns']->value, 'val', false, 'id_key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
        var <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_key']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = <?php if ($_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_POSITION' || $_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_URL_AJAX') {?>'<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'<?php } elseif ($_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_LOOP_OUT') {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value )), ENT_QUOTES, 'UTF-8');
}?>;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
}
