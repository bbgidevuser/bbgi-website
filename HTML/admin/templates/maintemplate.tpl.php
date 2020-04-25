<?php
$page_url= explode('/',$_SERVER['PHP_SELF']);
$pageurl=end($page_url);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Black Business Growth Initiative : Admin</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- NProgress -->
    <link href="assets/css/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/css/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
	
	 <link href="assets/css/custom1.min.css" rel="stylesheet">
    
  </head>
    
    <body class="nav-md">
    <?php if($pageurl != 'login.php'){?>
    
        <!-- START PAGE CONTAINER -->
         
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
         <?php include('left.php') ?>
        </div>

        <!-- top navigation -->
       <?php include('header.php'); ?>
        <!-- /top navigation -->
   		
		
			<?php if(is_file($ss_templatesDir.$ss_subTemplate.".tpl.php")) 
		        	{ include($ss_templatesDir.$ss_subTemplate.".tpl.php"); }
		   		  else
		    		{ print "<p align='center'>
							<strong>Template fille missing:</strong>   $ss_subTemplate.tpl.php</p>"; 
					}
          ?>
          
               <!-- END PAGE CONTENT -->
        </div>
        </div>
        <!-- END PAGE CONTAINER -->
	<?php }else{?>	
    
    <?php if(is_file($ss_templatesDir.$ss_subTemplate.".tpl.php")) 
		        	{ include($ss_templatesDir.$ss_subTemplate.".tpl.php"); }
		   		  else
		    		{ print "<p align='center'>
							<strong>Template fille missing:</strong>   $ss_subTemplate.tpl.php</p>"; 
					}
          ?>
          
          <?php }?>

        <!-- MESSAGE BOX-->
        
        <!-- END MESSAGE BOX-->
        
        <?php include('footer.php'); ?>
        
        <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress/nprogress.js"></script>
    
    <!-- iCheck -->
    <script src="assets/js/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/buttons.bootstrap.min.js"></script>
    <script src="assets/js/buttons.flash.min.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <script src="assets/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/js/dataTables.keyTable.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/responsive.bootstrap.js"></script>
    <script src="assets/js/datatables.scroller.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>
    
   <script>
	$(document).ready(function() {
        $('#datatable-responsive').DataTable();
     });
	</script>
                 
    </body>
</html>
