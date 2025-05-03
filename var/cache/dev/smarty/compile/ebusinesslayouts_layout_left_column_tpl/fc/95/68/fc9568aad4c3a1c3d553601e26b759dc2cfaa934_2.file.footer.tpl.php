<?php
/* Smarty version 4.3.4, created on 2025-05-03 18:58:35
  from '/var/www/html/themes/ebusiness/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6816837b568b07_07670479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9568aad4c3a1c3d553601e26b759dc2cfaa934' => 
    array (
      0 => '/var/www/html/themes/ebusiness/templates/_partials/footer.tpl',
      1 => 1743673724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6816837b568b07_07670479 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer-container">
  <div class="container">
        <div class="footer_top">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        </div> 
  </div>
  <div class="footer_after">
      <div class="container">
            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO']) {?>
                <div class="payment_footer">                                       
                    <ul class="payment_footer_img">
                        <li>
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tc_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" />
                        </li>
                    </ul>
                </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM']) {?>
                <div class="footer_link_bottom">
                    <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM'];?>

                </div>
             <?php }?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      </div>
  </div>
  <div class="footer_before">
      <div class="container">
          <div class="row">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

          </div>
      </div>
  </div>
  
  <div class="footer_bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-12 coppyright">
                  <div class="ybc_coppyright">
                     <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'];?>

                     <?php }?>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="scroll_top"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TOP','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>
</div>
<?php }
}
