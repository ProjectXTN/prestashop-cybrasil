<?php
/* Smarty version 4.3.4, created on 2025-05-03 18:52:45
  from '/var/www/html/modules/ets_megamenu/views/templates/hook/admin-alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6816821d380c43_65798977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45a9f44918478fa3dfb51587423b168aec696b57' => 
    array (
      0 => '/var/www/html/modules/ets_megamenu/views/templates/hook/admin-alerts.tpl',
      1 => 1746303519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6816821d380c43_65798977 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['errors'])) && $_smarty_tpl->tpl_vars['alerts']->value['errors']) {?>
    <div class="alert alert-danger mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['errors']);?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['success'])) && $_smarty_tpl->tpl_vars['alerts']->value['success']) {?>
    <div class="alert alert-success mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['success']);?>
</div>
<?php }
}
}
