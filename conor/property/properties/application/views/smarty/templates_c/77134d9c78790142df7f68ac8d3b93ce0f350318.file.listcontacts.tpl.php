<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 22:02:55
         compiled from "/home/site101/public_html/conor/property/properties/application/views/smarty/templates/listcontacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26744139252b21b8f22bc49-60328450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77134d9c78790142df7f68ac8d3b93ce0f350318' => 
    array (
      0 => '/home/site101/public_html/conor/property/properties/application/views/smarty/templates/listcontacts.tpl',
      1 => 1387144308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26744139252b21b8f22bc49-60328450',
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
  'unifunc' => 'content_52b21b8f378fa4_01059836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b21b8f378fa4_01059836')) {function content_52b21b8f378fa4_01059836($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Agents</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          <tr><th>ID</th> <th>Name</th><th>Phone Number</th> <th span cols="2">Actions</th></tr>
          
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contact_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contact_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contact_phone_no'];?>
</td>
        
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=editcontact&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['contact_id'];?>
">Edit</a><td>
        <td><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['contact_id'];?>
">Delete</a><td>
    </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
