<?php
/* Smarty version 4.3.4, created on 2025-05-03 22:37:00
  from '/var/www/html/themes/ebusiness/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6816b6acb83662_09531718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b839a99bc38d3e3ab7b8e989032151cc8884db8c' => 
    array (
      0 => '/var/www/html/themes/ebusiness/templates/customer/authentication.tpl',
      1 => 1743673724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6816b6acb83662_09531718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7670091446816b6acb74200_23722804', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16039100916816b6acb7d319_25062048', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'breadcrumb'} */
class Block_7670091446816b6acb74200_23722804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_7670091446816b6acb74200_23722804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
        <nav class="breadcrumb">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                  <span itemprop="name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                </a>
                <meta itemprop="position" content="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
" />
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                <a>
                  <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</span>
                </a>
              </li>
          </ol>
        </nav>
    </div>
<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'display_after_login_form'} */
class Block_15476386506816b6acb7ecd6_15146662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_12523584636816b6acb7da51_94429128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="flex login_page_content">
          <div class="col-xs-12 col-sm-6">
              <div class="login-form">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

              </div>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15476386506816b6acb7ecd6_15146662', 'display_after_login_form', $this->tplIndex);
?>

          </div>
          <div class="col-xs-12 col-sm-6">
              <div class="no-account register_form">
                <div class="register_form_cell">
                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

                    </a>
                    <div class="clearfix"></div>
                    <a class="btn btn-primary button-to-register-form" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

                    </a>
                </div>
              </div>
          </div>
      </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_16039100916816b6acb7d319_25062048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_16039100916816b6acb7d319_25062048',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_12523584636816b6acb7da51_94429128',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_15476386506816b6acb7ecd6_15146662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12523584636816b6acb7da51_94429128', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
