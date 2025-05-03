<?php
/* Smarty version 4.3.4, created on 2025-05-03 18:52:11
  from '/var/www/html/modules/ets_megamenu/views/templates/hook/admin-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681681fb41c0f5_09808835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7b8cbf1416e556768f5e6a329b85f451f61a5c' => 
    array (
      0 => '/var/www/html/modules/ets_megamenu/views/templates/hook/admin-js.tpl',
      1 => 1746303519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681681fb41c0f5_09808835 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
megamenu-admin.js"><?php echo '</script'; ?>
><?php }
}
