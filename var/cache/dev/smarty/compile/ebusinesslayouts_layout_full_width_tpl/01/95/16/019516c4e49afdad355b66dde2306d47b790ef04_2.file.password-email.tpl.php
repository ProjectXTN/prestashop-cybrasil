<?php
/* Smarty version 4.3.4, created on 2025-05-03 23:37:56
  from '/var/www/html/themes/ebusiness/templates/customer/password-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6816c4f4012f23_92677208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '019516c4e49afdad355b66dde2306d47b790ef04' => 
    array (
      0 => '/var/www/html/themes/ebusiness/templates/customer/password-email.tpl',
      1 => 1743673724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6816c4f4012f23_92677208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12976403336816c4f40041a7_08045542', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4266738356816c4f40073e0_46190826', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13700971556816c4f40109d6_56246619', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_12976403336816c4f40041a7_08045542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_12976403336816c4f40041a7_08045542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_4266738356816c4f40073e0_46190826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_4266738356816c4f40073e0_46190826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" method="post">

    <header>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter the email address you used to register. You will receive a temporary link to reset your password.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</p>
    </header>

    <section class="form-fields">
      <div class="form-group row">
        <label class="col-md-3 form-control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
        <div class="col-md-5">
          <input type="email" name="email" id="email" value="<?php if ((isset($_POST['email']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( $_POST['email'] )), ENT_QUOTES, 'UTF-8');
}?>" class="form-control" required>
        </div>
      </div>
    </section>

    <footer class="form-footer text-xs-center">
      <button class="form-control-submit btn btn-primary" name="submit" type="submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send reset link','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    </footer>

  </form>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_13700971556816c4f40109d6_56246619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_13700971556816c4f40109d6_56246619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
  </a>
<?php
}
}
/* {/block 'page_footer'} */
}
