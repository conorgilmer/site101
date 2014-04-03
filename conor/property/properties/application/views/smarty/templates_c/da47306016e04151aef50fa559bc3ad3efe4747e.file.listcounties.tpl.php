<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 17:04:51
         compiled from "/home/site101/public_html/conor/property/properties/application/views/smarty/templates/listcounties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59966340352b1d5b36ab7a3-81864552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da47306016e04151aef50fa559bc3ad3efe4747e' => 
    array (
      0 => '/home/site101/public_html/conor/property/properties/application/views/smarty/templates/listcounties.tpl',
      1 => 1387144309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59966340352b1d5b36ab7a3-81864552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1d5b3760f68_83033608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1d5b3760f68_83033608')) {function content_52b1d5b3760f68_83033608($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Areas</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
          <tr><th>ID</th> <th>County Name</th></tr><!--th span cols="2">Actions</th></tr-->
          
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['county_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['county_name'];?>
</td>
        <!--td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['county_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['county_id'];?>
">Delete</a><td>
 -->   </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
