<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 15:30:37
         compiled from "/home/site101/public_html/conor/property/properties/application/views/smarty/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137269186652b1bf9d99b848-57801029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7842e443f273c2639fdf563eb067d0da9fc5def4' => 
    array (
      0 => '/home/site101/public_html/conor/property/properties/application/views/smarty/templates/footer.tpl',
      1 => 1387144289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137269186652b1bf9d99b848-57801029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1bf9d9bb330_33805210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1bf9d9bb330_33805210')) {function content_52b1bf9d9bb330_33805210($_smarty_tpl) {?>  <hr>

      <footer>
        <p>&copy; <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
      </footer>
    </div> <!-- /container -->  

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/bootstrap/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
  <script>        
          $(document).ready(function () {
              console.log('jquery loaded');
            $('#btnLoadMovies').click(loadJsonMoviesApi);

          });//close on ready
          
          function loadJsonMoviesApi() {
          
          var url = "?action=filter";
          
          if ($('#cinema_id').val() > 0) {
          
          url += '&cinema_id=' + $('#cinema_id').val();
          
          }
          
            if ($('#movie_id').val() > 0) {
          
          url += '&movie_id=' + $('#movie_id').val();
          
          }
          $('#ajaxContent').empty();
          $.getJSON('api.php'+url, function(data) {

            //    console.log('loaded');
                
              var items=''; //Create a variable so you can build up a html string  
                        $.each(data, function(i,jsonItem){  
                            items += "<h1>" + jsonItem['title'] + "</h1>";  
                            items += "<p>" + jsonItem['movie_id'] + "</p>";  
                            items += "<p>" + jsonItem['cinemaTitle'] + "</p>";  
                            
  
                        });       
                    
                        
               $('#ajaxContent').append(items);  
    
            });  
          
          
          
          }
          
   </script>
  
  
  </body>
</html>
<?php }} ?>
