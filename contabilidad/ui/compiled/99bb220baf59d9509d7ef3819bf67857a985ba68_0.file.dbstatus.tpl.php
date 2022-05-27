<?php
/* Smarty version 3.1.39, created on 2021-12-02 12:18:17
  from '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/dbstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a8ffd9eeea14_50984242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bb220baf59d9509d7ef3819bf67857a985ba68' => 
    array (
      0 => '/home/u997099361/domains/nacionalcode.org/public_html/contabilidad/ui/theme/ibilling/dbstatus.tpl',
      1 => 1635995872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a8ffd9eeea14_50984242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52565248561a8ffd9ee5f27_93121810', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_52565248561a8ffd9ee5f27_93121810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_52565248561a8ffd9ee5f27_93121810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Database Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </h5>
            <div class="ibox-tools">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbbackup/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download Database Backup'];?>
</a>
            </div>
        </div>
        <div class="ibox-content">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>
                    <th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table Name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'tbl');
$_smarty_tpl->tpl_vars['tbl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->value) {
$_smarty_tpl->tpl_vars['tbl']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>

                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>

        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
