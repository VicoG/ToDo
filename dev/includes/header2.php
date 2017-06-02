<?php require_once "includes/session.php"; ?>
<?php require "includes/db.php";?>



<?php
// Database query
	$warningQuery  = "SELECT * FROM alert ";
	$warningQuery .= "WHERE alert_complete=0 ";

	$warningResult = mysqli_query($conn, $warningQuery);
	//Test if there was a query error
	//if(!$warningResult) {
		//die("Database header query failed.");
	//}
	$warningRow = mysqli_fetch_assoc($warningResult);
?>
	
 <header class="navbar navbar-fixed-top navbar-shadow">

      <div class="navbar-branding">

        <a class="navbar-brand" href="index.php">
          <b>RAPID</b>: UTR <sub> v1.0 </sub>
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
	  
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> 
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Navigation <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '100' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-comments"></span>
                    <span class="sidebar-title">Notification (100)</span>
                    <span class="caret"></span>
                </a>
			</li>
			<li role="separator" class="divider"></li>
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '200' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-truck"></span>
                    <span class="sidebar-title">First Response (200)</span>
                    <span class="caret"></span>
                </a>
			</li>
			<li role="separator" class="divider"></li>
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '300' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-code-fork"></span>
                    <span class="sidebar-title">Characterization (300)</span>
                    <span class="caret"></span>
                </a>
			</li>
            <li role="separator" class="divider"></li>
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '400' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-exclamation-triangle"></span>
                    <span class="sidebar-title">Decontamination (400)</span>
                    <span class="caret"></span>
                </a>
			</li>
            <li role="separator" class="divider"></li>
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '500' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-building"></span>
                    <span class="sidebar-title">Clearance (500)</span>
                    <span class="caret"></span>
                </a>
			</li>
			<li role="separator" class="divider"></li>
			<li>
                <a class="accordion-toggle <?php echo ($menuOpen == '600' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-wrench"></span>
                    <span class="sidebar-title">Reoccupancy (600)</span>
                    <span class="caret"></span>
                </a>
			</li>
          </ul>
        </li>
      </ul>
  </div>
      <div >
	  <?php
	  	if ($warningResult && mysqli_num_rows($warningResult) > 0) {
		  if ($warningRow[alert_complete] ==0) { 
			$_SESSION["alertID"] = $warningRow["id"];
		  ?>
			<h2 class="text-danger pull-right" style="margin-right:5em;">
				
				  <em> Active Alert </em> <small style="color:#EC6F5A;"> <?php echo $warningRow["incident_name"]; ?> </small>
				 <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true">  </i> <small style="color:#85D27A;">
				 <?php if($warningRow[training] ==1){ echo "Training Exercise"; } ?> </small>
			</h2>		
	<?php
		  }
		}?>
	</div>
    </header>
<!-- Start: Header -->
 