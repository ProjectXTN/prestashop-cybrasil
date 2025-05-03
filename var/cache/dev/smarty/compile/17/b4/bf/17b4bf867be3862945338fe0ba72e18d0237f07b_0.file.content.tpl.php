<?php
/* Smarty version 4.3.4, created on 2025-05-03 18:51:10
  from '/var/www/html/admin405z76zapfotqq1xd0t/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681681bee1a8f3_67254826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b4bf867be3862945338fe0ba72e18d0237f07b' => 
    array (
      0 => '/var/www/html/admin405z76zapfotqq1xd0t/themes/new-theme/template/content.tpl',
      1 => 1718360660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681681bee1a8f3_67254826 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
