<?php
/* Smarty version 3.1.39, created on 2021-12-06 23:00:43
  from '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/modal_add_currency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61aedc6b70ba09_15338795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce033f28dd206d4bf3e8b00f680641df2490989' => 
    array (
      0 => '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/modal_add_currency.tpl',
      1 => 1635995872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61aedc6b70ba09_15338795 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>
        <?php if ($_smarty_tpl->tpl_vars['f_type']->value == 'edit') {?>
            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>

            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Currency'];?>

        <?php }?>
    </h3>
</div>
<div class="modal-body">

    <form class="form-horizontal" id="ib_modal_form">

        <div class="form-group"><label class="col-lg-4 control-label" for="iso_code"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency_Code'];?>
</label>

            <div class="col-lg-8"><input type="text" id="iso_code" name="iso_code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
">
                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency Example'];?>
</span>
            </div>


        </div>

        <div class="form-group"><label class="col-lg-4 control-label" for="symbol"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency Symbol'];?>
</label>

            <div class="col-lg-8"><input type="text" id="symbol" name="symbol" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['symbol'];?>
">

            </div>
        </div>

        <div class="form-group"><label class="col-lg-4 control-label" for="rate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Base Conversion Rate'];?>
</label>

            <div class="col-lg-8"><input type="text" id="rate" name="rate" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['rate'];?>
" >

            </div>
        </div>

        <input type="hidden" name="f_type" id="f_type" value="<?php echo $_smarty_tpl->tpl_vars['f_type']->value;?>
">
        <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
">
    </form>

</div>
<div class="modal-footer">



    <button type="button" data-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</button>
    <button class="btn btn-primary modal_submit" type="submit" id="modal_submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
</div><?php }
}
