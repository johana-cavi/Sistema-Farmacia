<?php
/* Smarty version 3.1.39, created on 2021-12-02 12:24:34
  from '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/email-templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a90152af9413_06789457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e97ba1b06f8bf6a700485f2e05ff9e92cde230' => 
    array (
      0 => '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/email-templates.tpl',
      1 => 1635995872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a90152af9413_06789457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140766710761a90152ae9f46_22410631', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_140766710761a90152ae9f46_22410631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140766710761a90152ae9f46_22410631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">


                <h2>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>

                </h2>

            </div>
            <div class="mail-box" id="application_ajaxrender">

                <table class="table table-hover table-mail">
                    <tbody>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                        <tr class="read">

                            <td><a  class="ve" id="f<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['tplname']);?>
</a>  </td>
                            <td><a  class="ve" id="s<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</a></td>
                            <td class=""></td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['send'] == 'Yes') {?>
                                    <span class="label label-success pull-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
 </span>
                                <?php } else { ?>
                                    <span class="label label-danger pull-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
 </span>
                                <?php }?>

                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
