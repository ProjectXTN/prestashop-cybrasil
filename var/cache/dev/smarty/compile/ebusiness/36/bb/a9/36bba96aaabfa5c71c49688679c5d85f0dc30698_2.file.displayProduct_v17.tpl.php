<?php
/* Smarty version 4.3.4, created on 2025-05-03 19:21:07
  from '/var/www/html/modules/ets_purchasetogether/views/templates/hook/displayProduct_v17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681688c35d8634_64973781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36bba96aaabfa5c71c49688679c5d85f0dc30698' => 
    array (
      0 => '/var/www/html/modules/ets_purchasetogether/views/templates/hook/displayProduct_v17.tpl',
      1 => 1746127816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ets_purchasetogether/views/templates/hook/_product.tpl' => 1,
  ),
),false)) {
function content_681688c35d8634_64973781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 

<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayFooterProduct') {?>
    <div id="ets_purchasetogether" class="ets_purchase_footerproduct">
<?php } elseif ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayProductAdditionalInfo') {?>
    <div id="ets_purchasetogether" class="ets_purchase_productaddition">
<?php } else { ?>
    <div id="ets_purchasetogether">
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_TYPE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_TYPE'] == 1) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['purchase_togethers']->value)) && $_smarty_tpl->tpl_vars['purchase_togethers']->value && count($_smarty_tpl->tpl_vars['purchase_togethers']->value) != $_smarty_tpl->tpl_vars['alldisabled']->value) {?>
        <h2 class="ets_purchase_title"><span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_TITLE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h2>
        <div class="ets-product-specific">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['disabled'])) && !$_smarty_tpl->tpl_vars['product']->value['disabled']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_417408559681688c3536998_02511217', 'product_miniature');
?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="clear"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129780665681688c3538652_62577036', "purchase_together");
?>

    <?php }
} else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['purchase_togethers']->value)) && $_smarty_tpl->tpl_vars['purchase_togethers']->value && count($_smarty_tpl->tpl_vars['purchase_togethers']->value) != $_smarty_tpl->tpl_vars['alldisabled']->value) {?>
        <h2 class="ets_purchase_title"><span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_TITLE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h2>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2144922128681688c357bca8_83061161', "purchase_together");
?>

    <?php }?>
    
<?php }?>
<div class="clearfix"></div>
<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayFooterProduct') {?>
    </div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayProductAdditionalInfo') {?>
    </div>
<?php } else { ?>
    </div>
<?php }?>

<?php }
/* {block 'product_miniature'} */
class Block_417408559681688c3536998_02511217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_417408559681688c3536998_02511217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:modules/ets_purchasetogether/views/templates/hook/_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_price_and_shipping'} */
class Block_2071579820681688c3540839_61975985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                <span class="product-price-and-shipping">
                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                    <span itemprop="price" class="price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                </span>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_1437459199681688c3547466_62172516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="product-description" itemprop="description">
                                <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                            </div>
                          <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_2050008562681688c354d957_25211698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['currProduct']->value),$_smarty_tpl ) );?>

                          <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_2044433742681688c355cbb1_02792822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                        <span class="product-price-and-shipping">
                                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                            <span itemprop="price" class="price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_2095978174681688c35696b4_75917479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="product-description" itemprop="description">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                        <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                                    </div>
                                  <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_226556191681688c3571242_26343868 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                  <?php
}
}
/* {/block 'product_reviews'} */
/* {block "purchase_together"} */
class Block_129780665681688c3538652_62577036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'purchase_together' => 
  array (
    0 => 'Block_129780665681688c3538652_62577036',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_2071579820681688c3540839_61975985',
    1 => 'Block_2044433742681688c355cbb1_02792822',
  ),
  'product_description' => 
  array (
    0 => 'Block_1437459199681688c3547466_62172516',
    1 => 'Block_2095978174681688c35696b4_75917479',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_2050008562681688c354d957_25211698',
    1 => 'Block_226556191681688c3571242_26343868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="ets-list-checkbox-product ets-list-content-checkbox">
                            <?php if (((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT'])) && !$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT']) && !((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'] && $_smarty_tpl->tpl_vars['currProduct']->value['quantity'] <= $_smarty_tpl->tpl_vars['currProduct']->value['out_of_stock'])) {?>
                <li class="item-product ">
                    <div class="row-product">
                    <div class="ets_purchase_item_image">
                        <input class=""
                            id="product_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
" 
                            type="checkbox" 
                            checked="checked"
                            <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT']) {?>disabled="disabled"<?php }?>
                            name="product_current" />
                    </div>
                    <div class="ets_purchase_item_des">
                        <label for="product_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This current product','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
 (<b><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</b>)</label>
                        
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2071579820681688c3540839_61975985', 'product_price_and_shipping', $this->tplIndex);
?>

                        <p class="attribute_small this-product"><?php if ((isset($_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['currProduct']->value['attribute_small']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></p>
                        <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1437459199681688c3547466_62172516', 'product_description', $this->tplIndex);
?>

                        <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2050008562681688c354d957_25211698', 'product_reviews', $this->tplIndex);
?>
 
                        <?php }?>
                    </div> 
                    </div>                  
                </li>
            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['disabled'])) && !$_smarty_tpl->tpl_vars['product']->value['disabled']) {?>
                    <li class="item-product">
                        <div class="row-product">
                            <div class="ets_purchase_item_image">
                                <input type="checkbox" class=""
                                    checked="checked"
                                    data-id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-attribute="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-qty="<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>"
                                    id="purchase_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
" 
                                    name="purchase_together[]" />
                            </div>
                            <div class="ets_purchase_item_des">
                                <label for="purchase_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
">
                                      <span class="product-title"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name_attribute'],100,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                </label>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2044433742681688c355cbb1_02792822', 'product_price_and_shipping', $this->tplIndex);
?>

                                <p class="attribute_small"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['product']->value['attribute_small']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['attribute_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></p>
                                
                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2095978174681688c35696b4_75917479', 'product_description', $this->tplIndex);
?>

                                <?php }?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226556191681688c3571242_26343868', 'product_reviews', $this->tplIndex);
?>
 
                                <?php }?>
                            </div>
                        </div>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        	<div class="button-container <?php if (count($_smarty_tpl->tpl_vars['purchase_togethers']->value) == $_smarty_tpl->tpl_vars['alldisabled']->value) {?>disabled<?php }?>">
        		<a class="ets_ajax_add_to_cart_button btn btn-primary" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajax_cart']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all to cart','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
">
        			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all to cart','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
        		</a>
        	</div>
        <?php
}
}
/* {/block "purchase_together"} */
/* {block 'product_thumbnail'} */
class Block_1643777216681688c3583cd6_47648062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                                      <img
                                        src = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['cover']['bySize']['small_default']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                        alt = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['cover']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                        data-full-size-image-url = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['cover']['small']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                      >
                                    </a>
                                <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_price_and_shipping'} */
class Block_1960138845681688c358c310_27661389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                        <span class="product-price-and-shipping">
                                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                            <span itemprop="price" class="price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_601126401681688c3597284_69176876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="product-description" itemprop="description">
                                        <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                        <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                                    </div>
                                  <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_604285718681688c359d3c3_25395855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['currProduct']->value),$_smarty_tpl ) );?>

                                  <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_thumbnail'} */
class Block_1478948130681688c35a8ad1_29382157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                                      <img
                                        src = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                        alt = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                        data-full-size-image-url = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                      >
                                    </a>
                                    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_price_and_shipping'} */
class Block_1390490184681688c35b2a62_78940380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                            <span class="product-price-and-shipping">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_OLD_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_OLD_PRICE']) {?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                                        <span class="regular-price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['regular_price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage' && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_DISCOUNT'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_DISCOUNT']) {?>
                                                      <span class="discount-percentage"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_percentage'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php }?>
                                                <?php }?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                                <span itemprop="price" class="price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                            </span>
                                        <?php }?>
                                    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_1883069687681688c35c7836_88268469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="product-description" itemprop="description">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                            <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                                        </div>
                                      <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_844338771681688c35ceec7_62189682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                      <?php
}
}
/* {/block 'product_reviews'} */
/* {block "purchase_together"} */
class Block_2144922128681688c357bca8_83061161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'purchase_together' => 
  array (
    0 => 'Block_2144922128681688c357bca8_83061161',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_1643777216681688c3583cd6_47648062',
    1 => 'Block_1478948130681688c35a8ad1_29382157',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_1960138845681688c358c310_27661389',
    1 => 'Block_1390490184681688c35b2a62_78940380',
  ),
  'product_description' => 
  array (
    0 => 'Block_601126401681688c3597284_69176876',
    1 => 'Block_1883069687681688c35c7836_88268469',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_604285718681688c359d3c3_25395855',
    1 => 'Block_844338771681688c35ceec7_62189682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="ets-list-checkbox-product ets_purchase_type_list">
                                <?php if (((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT'])) && !$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT']) && !((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'] && $_smarty_tpl->tpl_vars['currProduct']->value['quantity'] <= $_smarty_tpl->tpl_vars['currProduct']->value['out_of_stock'])) {?>
                    <li class="item-product">
                        <div class="row-product">
                            <div class="ets_purchase_item_image">
                                <input class=""
                                    id="product_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
"                                     type="checkbox" 
                                    checked="checked"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT']) {?>disabled="disabled"<?php }?> 
                                    name="product_current" />
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1643777216681688c3583cd6_47648062', 'product_thumbnail', $this->tplIndex);
?>
     
                            </div>
                            <div class="ets_purchase_item_des">
                                <label for="product_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
 (<b><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</b>)</label>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960138845681688c358c310_27661389', 'product_price_and_shipping', $this->tplIndex);
?>

                                <p class="attribute_small this-product"><?php if ((isset($_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['currProduct']->value['attribute_small']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></p>
             
                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_601126401681688c3597284_69176876', 'product_description', $this->tplIndex);
?>

                                <?php }?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_604285718681688c359d3c3_25395855', 'product_reviews', $this->tplIndex);
?>
 
                                <?php }?>                        
                            </div>  
                        </div>                  
                    </li>
                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['disabled'])) && !$_smarty_tpl->tpl_vars['product']->value['disabled']) {?>
                        <li class="item-product">
                            <div class="row-product">
                                <div class="ets_purchase_item_image">
                                    <input type="checkbox" class=""
                                        checked="checked"
                                        data-id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
"
                                        data-attribute="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
"
                                        data-qty="<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>"
                                        id="purchase_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
" 
                                        name="purchase_together[]" />
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1478948130681688c35a8ad1_29382157', 'product_thumbnail', $this->tplIndex);
?>

                                </div>
                                <div class="ets_purchase_item_des">
                                    <label for="purchase_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
">
                                          <span class="product-title"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name_attribute'],100,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                    </label>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1390490184681688c35b2a62_78940380', 'product_price_and_shipping', $this->tplIndex);
?>

                                    <p class="attribute_small"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['product']->value['attribute_small']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['attribute_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></p>
                                    
                                    <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1883069687681688c35c7836_88268469', 'product_description', $this->tplIndex);
?>

                                    <?php }?>
                                                                        <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_844338771681688c35ceec7_62189682', 'product_reviews', $this->tplIndex);
?>
 
                                    <?php }?>
                                </div>
                            </div>
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        	<div class="button-container <?php if (count($_smarty_tpl->tpl_vars['purchase_togethers']->value) == $_smarty_tpl->tpl_vars['alldisabled']->value) {?>disabled<?php }?>">
        		<a class="ets_ajax_add_to_cart_button btn btn-primary" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajax_cart']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all products to cart'),$_smarty_tpl ) );?>
">
        			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all products to cart','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
        		</a>
        	</div>
            
        <?php
}
}
/* {/block "purchase_together"} */
}
