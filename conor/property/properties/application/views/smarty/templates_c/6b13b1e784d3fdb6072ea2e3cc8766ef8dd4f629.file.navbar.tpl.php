<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 15:30:37
         compiled from "/home/site101/public_html/conor/property/properties/application/views/smarty/templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50341981552b1bf9d95e160-38062726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b13b1e784d3fdb6072ea2e3cc8766ef8dd4f629' => 
    array (
      0 => '/home/site101/public_html/conor/property/properties/application/views/smarty/templates/navbar.tpl',
      1 => 1387144309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50341981552b1bf9d95e160-38062726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlAction' => 0,
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1bf9d985ef3_95463327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1bf9d985ef3_95463327')) {function content_52b1bf9d985ef3_95463327($_smarty_tpl) {?> <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Property Website</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listproperties">List Properties</a></li>
           
             <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==true) {?> 
            <!--li><a href="logout.php">Logout</a></li-->
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=createproperty">Create Property</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listproperties">List Properties</a></li>
                <li class="divider"></li>
        
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=createphoto">Insert Photo</a></li>
                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listphotos">List Photos</a></li>
                <li class="divider"></li>
        
                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=createcontact">Create Agent</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listcontacts">List Agents</a></li>
                <li class="divider"></li>
                
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listcounties">List Counties</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listhousetype">List House Type</a></li>
               
                <li class="divider"></li>
                <li class="dropdown-header">Account Admin</li>
               <li><a href="logout.php">Logout</a></li>
          </ul>
            </li>
          </ul>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==false) {?>   
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="username" class="form-control" value="admin">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" value="letmein">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <?php }?>
        </div><!--/.navbar-collapse -->
      </div>
    </div><?php }} ?>
