<?php ob_start(); ?>
<!DOCTYPE html>

<html>

<head>

  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">
  <title>UTR</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AbsoluteAdmin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->

  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- FullCalendar Plugin CSS -->

  <link rel="stylesheet" type="text/css" href="public/style/fullcalendar/fullcalendar.min.css">

  <!-- Theme CSS -->

  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->

  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">
  <link rel="stylesheet" type="text/css" href="assets/mods.css">

</head>

<body class="dashboard-page">

  <div id="main">

    <!-- Start: Header -->

	<?php include "includes/header.php"; ?>
	<?php require_once "includes/session.php"; ?>
	<?php require_once "includes/functions.php"; ?>
	<?php require_once "includes/db.php"; ?>
	<!-- End: Header -->


  

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">
		 <div class="tray tray-center">
			<?php
			  $admin = find_users_by_id($_GET["id"]);
			  if (!$admin) {
				// admin ID was missing or invalid or 
				// admin couldn't be found in database
				header("Location: manage_admins.php"); 
			  }
			  
			  $id = $admin["id"];
			  $query = "DELETE FROM users WHERE id = {$id} LIMIT 1";
			  $result = mysqli_query($conn, $query);
			
			  if ($result && mysqli_affected_rows($conn) == 1) {
				// Success
				$_SESSION["message"] = "Admin/ User deleted.";
				header("Location: manage_admins.php"); 
			  } else {
				// Failure
				$_SESSION["message"] = "Admin? User deletion failed.";
				header("Location: manage_admins.php"); 
			  }
			  
			?>
			  </div>
		  </div>
		</div>      
      </section>

      <!-- End: Content -->



  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->

  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>

  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

</body>
</html>

  