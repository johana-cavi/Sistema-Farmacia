<?php
/* Smarty version 3.1.39, created on 2021-11-29 09:57:38
  from '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/contacts_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a4ea62ba1bd2_12551821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '575f326c6e58bf1f518695a8981a2fb1848cebf9' => 
    array (
      0 => '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/contacts_orders.tpl',
      1 => 1635995872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a4ea62ba1bd2_12551821 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/add/" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Order'];?>
</a>

<hr>

<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>
        <th>#</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
 #</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>

    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>

        <tr>

            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>
            <td>

                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['ordernum'];?>
</a>

            </td>

            <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['ds']->value['date_added'];
$_prefixVariable1 = ob_get_clean();
echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_prefixVariable1));?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['cname'];?>
</td>

            <td>
                <?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>


            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Active') {?>
                    <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                <?php } else { ?>
                    <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                <?php }?>
            </td>
        </tr>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
</table><?php }
}
