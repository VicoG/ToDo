<!DOCTYPE html>

<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">
  <title>UTR</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="Steve DiStefano">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">

</head>

<body class="dashboard-page">
  <div id="main">

	<?php require_once "includes/session.php"; ?>
	<?php require_once "includes/functions.php"; ?>
	<?php require_once "includes/db.php"; ?>

    <!-- Start: Header -->

<header class="navbar navbar-fixed-top navbar-shadow">
  <div class="navbar-branding">
	<a class="navbar-brand" href="login.php">
	  <b>RAPID:</b> UTR <sub>v2.0</sub>
	</a>
  </div>
</header>



      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">
		 <div class="tray tray-center mt50 pt50">			
			 <div class="row">                                        	
                <div class="col-md-6 col-md-offset-5 mt50 pt50"> 
				<?php
					$username = "";
					
					if (isset($_POST['submit'])) {
					  // Process the form
					  
					  // validations
					  $required_fields = array("username", "password");
					  validate_presences($required_fields);
					  
					  if (empty($errors)) {
						// Attempt Login
					
							$username = $_POST["username"];
							$password = $_POST["password"];
							
							$found_admin = attempt_login($username, $password);
					
						if ($found_admin) {
						  // Success
								// Mark user as logged in
								$_SESSION["admin_id"] = $found_admin["id"];
								$_SESSION["username"] = $found_admin["name"];
								$_SESSION["b"]= $found_admin["authorization"];
						  		header("Location: index.php"); 

						} else {
						  // Failure
						  $_SESSION["message"] = "Username/password not valid.";
						}
					  }
					} else {
					  
					} // end: if (isset($_POST['submit']))
					
					?>
					
					<?php //$layout_context = "admin"; ?>
					
						<?php //echo message(); ?>
						<?php echo form_errors($errors); ?>
						
						<h2>Login</h2>
						<form action="login.php" method="post">
						  <p>Username:
							<input type="text" name="username" value="<?php echo htmlentities($username); ?>" />
						  </p>
						  <p>Password:
							<input type="password" name="password" value="" />
						  </p>
						  <input type="submit" name="submit" value="Submit" />
						</form>
					</div>
				</div>      
			</section> <!-- End: Content -->


    </section><!-- End: Content-Wrapper -->
  </div><!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
  <!-- jQuery -->

  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="assets/js/demo/widgets.js"></script>
  
   
    <!-- Theme Javascript -->

  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Widget Javascript -->

	<script src="assets/js/demo/widgets.js"></script>  
	<script type="text/javascript">
  
  jQuery(document).ready(function() {

    "use strict";

    Demo.init(); // Init Demo JS
    Core.init(); // Init Theme Core

    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      // mobile: true,
      onStart: function() {
        // Do something before AdminPanels runs
      },

      onFinish: function() {

        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');
        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels

        demoHighCharts.init();

        runVectorMaps(); // function below

      },

      onSave: function() {

        $(window).trigger('resize');

      }

    });
	
	   // Init plugins for ".task-widget"

    // plugins: Custom Functions + jQuery Sortable

    var taskWidget = $('div.task-widget');

    var taskItems = taskWidget.find('li.task-item');

    var currentItems = taskWidget.find('ul.task-current');

    var completedItems = taskWidget.find('ul.task-completed');

    // Init jQuery Sortable on Task Widget

    taskWidget.sortable({

      items: taskItems, // only init sortable on list items (not labels)

      handle: '.task-menu',

      axis: 'y',

      connectWith: ".task-list",

      update: function( event, ui ) {

        var Item = ui.item;

        var ParentList = Item.parent();

        // If item is already checked move it to "current items list"

        if (ParentList.hasClass('task-current')) {
            Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
        }

        if (ParentList.hasClass('task-completed')) {

            Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
        }
      }
    });

    // Custom Functions to handle/assign list filter behavior

    taskItems.on('click', function(e) {

      e.preventDefault();

      var This = $(this);

      var Target = $(e.target);

      if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
        This.remove();
        return;
      }

      if (Target.parents('.task-handle').length) {
		      // If item is already checked move it to "current items list"
		      if (This.hasClass('item-checked')) {
		        This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
		      }
		      // Otherwise move it to the "completed items list"
		      else {
		        This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
		      }
      }
    });
 });// end document ready function
</script>
</body>
</html>

  