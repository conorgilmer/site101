<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 15:30:37
         compiled from "/home/site101/public_html/conor/property/properties/application/views/smarty/templates/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27158098952b1bf9d824177-06510016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '959a8b16591dc9d484ddd2f64608e36ee0bbd0ae' => 
    array (
      0 => '/home/site101/public_html/conor/property/properties/application/views/smarty/templates/master.tpl',
      1 => 1387144309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27158098952b1bf9d824177-06510016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showJumboTron' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1bf9d9160a3_35972661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1bf9d9160a3_35972661')) {function content_52b1bf9d9160a3_35972661($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['showJumboTron']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
