<?php
/* Smarty version 4.3.4, created on 2025-05-04 00:20:01
  from '/var/www/html/themes/ebusiness/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6816ced1f03b64_99104518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8037dd8c2a7aa012f88722c2fa9da5d7048083' => 
    array (
      0 => '/var/www/html/themes/ebusiness/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1743673724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6816ced1f03b64_99104518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section  id    = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
          class = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
>
  <h1 class="step-title h3">
    <i class="material-icons done">&#xE876;</i>
    <span class="step-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> edit</span>
  </h1>

  <div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13611812416816ced1f02ab7_65724203', 'step_content');
?>

  </div>
</section>
<?php }
/* {block 'step_content'} */
class Block_13611812416816ced1f02ab7_65724203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step_content' => 
  array (
    0 => 'Block_13611812416816ced1f02ab7_65724203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
}
